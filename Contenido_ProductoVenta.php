<?php
include 'Seguridad.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tablas.css" />
<title>Documento sin título</title>
</head>
<body>
<?php
include 'ConexionBd.php';
echo "<br>";
echo "<br>";
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($bd, $_POST["query"]);
    $query  = "
  SELECT * FROM productos
  WHERE Cod_Producto LIKE '%" . $search . "%'
  OR Nombre LIKE '%" . $search . "%'
  OR Precio LIKE '%" . $search . "%'
  OR Fk_Cpd_Categoria LIKE '%" . $search . "%'
  OR Descripcion LIKE '%" . $search . "%'
 ";
} else {
    $query = "
  SELECT * FROM productos ORDER BY Cod_Producto
 ";
}
$result = mysqli_query($bd, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
<div class="divTable" style="width: 100%;">
<div class="divTableBody">
<div class="divTableCell">Cod_Producto</div>
<div class="divTableCell">Nombre</div>
<div class="divTableCell">Precio</div>
<div class="divTableCell">Existencias</div>
<div class="divTableCell">Agregar</div>
</div>
 ';
    while ($row = mysqli_fetch_array($result)) {
    //___________________________Subconsulta Existencias________________________________

      $BdCod_Producto = $row["Cod_Producto"];
      $entrada=1;
      $cuantosentraron=0;
      $BdCantidad2=0;

      $sql3 = " SELECT * FROM stock WHERE Fk_Cod_Producto = '$BdCod_Producto' AND Fk_Cod_Estado='$entrada'"; 
      if(!$result3 = $bd->query($sql3)){
      die('Datos no encontrados!!! <br>['. $bd->error . ']');   
      }

      while($row3 = $result3->fetch_assoc()){
      $BdCantidad=stripslashes($row3["Cantidad"]);
      $BdFk_Cod_Estado=stripslashes($row3["Fk_Cod_Estado"]);
      $BdCantidad2=$BdCantidad+$BdCantidad2;
      }
      $BdCantidad2salida=0;
      $BdCantidad=0;
      $salidas=2;
      $sql4 = " SELECT * FROM stock WHERE Fk_Cod_Producto = '$BdCod_Producto' AND Fk_Cod_Estado='$salidas'"; 
      if(!$result4 = $bd->query($sql4)){
      die('Datos no encontrados!!! <br>['. $bd->error . ']');   
      }

      while($row4 = $result4->fetch_assoc())
      {
      $BdCantidad=stripslashes($row4["Cantidad"]);
      $BdFk_Cod_Estado=stripslashes($row4["Fk_Cod_Estado"]);
      $BdCantidad2salida=$BdCantidad+$BdCantidad2salida;  
      }
      $totalstock=$BdCantidad2-$BdCantidad2salida;
      #echo($totalstock);
      if($totalstock==0){
      $totalstock ="<p style='color:#e83737'>Agotado!</p>";
      }   
    //__________________________________________________________________________________

    //___________________________Subconsulta Categorias_________________________________

      $BdCategoria = $row["Fk_Cpd_Categoria"];
      $sql2 = " SELECT * FROM categoria WHERE Cod_Categoria = '$BdCategoria'";
      if(!$result2 = $bd->query($sql2)){
      die('Datos no encontrados!!! <br>['. $bd->error . ']');   
      }
        
      while($row2 = $result2->fetch_assoc()){
      $BdCategoria=stripslashes($row2["Categoria"]);
      }
      $signo="$";
    //___________________________________________________________________________________
        $output .= '
<div class="divTableRow">
<div class="divTableCell">' . $row["Cod_Producto"] . '</div>
<div class="divTableCell">' . $row["Nombre"] . '</div>
<div class="divTableCell">' .$signo. $row["Precio"] . '</div>
<div class="divTableCell">' . "$totalstock" . '</div>
	<div class="divTableCell">
	 <form class=form d=form1 name=form1 method=post action=Capa_Negocio_Guardar_ProductoV.php >
	  <input type=text id=btnCantidad name=btnCantidad required=required/>
      <input type=hidden name=CodigoP id=CodigoP value=' . $row["Cod_Producto"] . '>
 	  <input type=submit id=btnagregarPV title=Agregar producto a venta value=>
 	 </form>
	</div>
	</div>
	';
    }
    echo $output;
	} else {
    echo 'Data Not Found';
	}
	?>
</body>
</html>
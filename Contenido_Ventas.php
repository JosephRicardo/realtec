<?php
include 'Seguridad.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tablas.css" />
<title>Ventas</title>
</head>

<body>

<?php
include 'ConexionBd.php';
include('BtnDesplegable_Venta.html');
echo "<br>";
echo "<br>";
echo "<br>";

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($bd, $_POST["query"]);
    $query  = "
    SELECT * FROM factura 
    WHERE Cod_Factura LIKE '%" . $search . "%'
    OR Fk_Cod_Vendedor LIKE '%" . $search . "%'
    OR Fecha LIKE '%" . $search . "%'
    OR Fk_Cod_Cliente LIKE '%" . $search . "%'
    ";
    } else {
    $query = "
    SELECT * FROM factura ORDER BY Cod_Factura
    ";
    }
	$result = mysqli_query($bd, $query);
	if (mysqli_num_rows($result) > 0) {
	    $output .= '
	<div class="divTable" style="width: 100%;">
	<div class="divTableBody">
	<div class="divTableCell">Cod_Factura</div>
	<div class="divTableCell">Vendedor</div>
	<div class="divTableCell">Fecha</div>
	<div class="divTableCell">Cliente</div>
	<div class="divTableCell">Total de venta</div>
	<div class="divTableCell">detalle de venta</div>
	</div>
	';
	while ($row = mysqli_fetch_array($result)) { 
	//___________________________Subconsulta_Vendedor________________________________

		   $BdNombreV = $row["Fk_Cod_Vendedor"];
		   $sql2 = " SELECT * FROM usuario WHERE Cod_Usuario = '$BdNombreV'";
	       if(!$result2 = $bd->query($sql2)){
		   die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		   }
		
	       while($row2 = $result2->fetch_assoc()){
	       $BdNombreV=stripslashes($row2["Nombres"]);
	       }	
	//___________________________/Subconsulta_Vendedor_______________________________ 
    //___________________________Subconsulta_Cliente_________________________________
	       
	       $BdNombreC = $row["Fk_Cod_Cliente"];
		   $sql2 = " SELECT * FROM clientes WHERE Cod_Clientes = '$BdNombreC'";
	       if(!$result2 = $bd->query($sql2)){
		   die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		   }
		
	       while($row2 = $result2->fetch_assoc()){
	       $BdNombreC=stripslashes($row2["Nombres"]);
	       }
    //__________________________/Subconsulta_Cliente_________________________________
	//___________________________Sacar total_________________________________________
		   session_start();
		   $cont = $_SESSION['cont'];
		   $_SESSION['TotalFinal']=$_SESSION['TotalFinal'];
		   session_start();
		   $_SESSION['Subtotal'][$cont];
   //____________________________Sacar total_________________________________________
	  
        $output .= '         
	<div class="divTableRow">
	<div class="divTableCell">' . $row["Cod_Factura"] . '</div>
	<div class="divTableCell">' . "$BdNombreV" . '</div>
	<div class="divTableCell">' . $row["Fecha"] . '</div>
	<div class="divTableCell">' . "$BdNombreC". '</div>
	<div class="divTableCell">' . "$_SESSION[TotalFinal]" . '</div>
	<div class="divTableCell">
      <form class=form d=form1 name=form1 method=post action=Capa_Presentacion_Detalle_Venta.php>
	   <input type=hidden name=Ver id=Ver value=$BdCod_Factura>
	   <input type=submit id=btnVer title="Ver detalle" value= >
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
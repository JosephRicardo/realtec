<?php
include('Seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Styles/Tabla_Productos1.css" />

<title>Presentacion_Productos</title>
</head>

<body>
<table width="1120" height="1280" border="0" align="center">
  <tr>
    <td width="1114" height="204"><iframe src="Vendedor_Baner.php" frameborder="0" scrolling="no" width="1117" height="270" marginheight="0" marginwidth="0"></iframe></td>
  </tr>
  <tr>
    <td height="1002" valign="top">
    <?php
	class producto
	{
		public function MostrarP()
		{
			include('ConexionBd.php');
	include('Vendedor_BtnDesplegable_Productos.html');
	
	$cont="0";
     echo "<fieldset style=width:1070px>"; 
	 echo "<legend><h1>Productos registrados</h1></legend>";

	$sql = "SELECT * FROM Productos";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! [' . $bd->error . ']');
	}
	 
  
	    echo "<table width=1000 align=center border=1 id=tabla>";
		 echo "<tr>";
		 echo"<td align=center>Cod_Producto</td>";
        echo"<td align=center>Nombre</td>";
        echo"<td align=center>Precio</td>";
        echo"<td align=center>Categoria</td>";
        echo"<td align=center>Descripcion</td>";  
		echo"<td align=center>Existencias</td>";       
		echo "<td align=center></td>";
		echo "<td align=center></td>";
		echo "<td align=center></td>";
		echo"</tr>";
	
/*Base de datos*/
	while($row = $result->fetch_assoc())
	{
	$BdCod_Producto = stripslashes($row["Cod_Producto"]);
	$BdNombre = stripslashes($row["Nombre"]);	
	$BdPrecio = stripslashes($row["Precio"]);	
	$BdCategoria = stripslashes($row["Fk_Cpd_Categoria"]);	
	$BdDescripcion = stripslashes($row["Descripcion"]);
	
	
	
	
	
	
	//___________________________Subconsulta_stock________________________________
	
		$entrada=1;
		$cuantosentraron=0;
		$BdCantidad2=0;
	//	echo "Mi cod producto es: $BdCod_Producto";
		$sql3 = " SELECT * FROM stock WHERE Fk_Cod_Producto = '$BdCod_Producto' AND Fk_Cod_Estado='$entrada'";
	
	if(!$result3 = $bd->query($sql3)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row3 = $result3->fetch_assoc())
	{
	//$BdCategoria=stripslashes($row3["Categoria"]);
	$BdCantidad=stripslashes($row3["Cantidad"]);
	$BdFk_Cod_Estado=stripslashes($row3["Fk_Cod_Estado"]);
	//$cuantosentraron=$cuantosentraron+1;
	$BdCantidad2=$BdCantidad+$BdCantidad2;
	
	#echo "$BdCod_Producto";echo "Entraron: $BdCantidad2 "; echo "fin"; echo "</br>";
	
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
	//$BdCategoria=stripslashes($row3["Categoria"]);
	$BdCantidad=stripslashes($row4["Cantidad"]);
	$BdFk_Cod_Estado=stripslashes($row4["Fk_Cod_Estado"]);
	//$cuantosentraron=$cuantosentraron+1;
	$BdCantidad2salida=$BdCantidad+$BdCantidad2salida;
	
	#echo "$BdCod_Producto";echo "Salieron: $BdCantidad2salida "; echo "fin"; echo "</br>";
	
	}
	
	$totalstock=$BdCantidad2-$BdCantidad2salida;
	#echo($totalstock);
//___________________________________________________________________________________________	
	
	
		
//__________________________/Subconsulta_Categoria_______________________________
		
		
//___________________________Subconsulta_Categoria________________________________
	
		$sql2 = " SELECT * FROM Categoria WHERE Cod_Categoria = '$BdCategoria'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdCategoria=stripslashes($row2["Categoria"]);
	}
//__________________________/Subconsulta_Categoria_______________________________	
		
		
/*Impresion de los datos de la bd*/
	echo"<tr>";
	echo" <td  align=center>$BdCod_Producto</td>";
	echo" <td align=center>$BdNombre</td>";
	echo" <td align=center>$BdPrecio</td>";
	echo"<td align=center>$BdCategoria</td>";
	echo" <td align=center>$BdDescripcion</td>";
	
	

	
	
	echo" <td align=center>$totalstock</td>";
	
	echo"<td>
	<form class=form d=form1 name=form1 method=post action=Vendedor_Eliminar_Producto.php target=_parent>
	<input type=hidden name=EliminarP id=EliminarP value=$BdCod_Producto>
	<input type=submit id=btneliminarP value='' />
	</form>
	</td>";
	echo"<td>
	<form class=form d=form1 name=form1 method=post action=Vendedor_Capa_Presentacion_Editar_Productos.php target=_parent>
	<input type=hidden name=EditarP id=EditarP value=$BdCod_Producto>
	<input type=submit id=btneditarP value='' />
	</form>
	</td>";
	echo"<td>
	<form class=form d=form1 name=form1 method=post action=Vendedor_Capa_Presentacion_Agregar_Productos.php target=_parent>
	<input type=hidden name=AgregarP id=AgregarP value=$BdCod_Producto>
	<input type=submit id=btnagregarP value='' />
	</form>
	</td>";

	echo"</tr>";
	
	$cont++;
	}
		echo ("</table>");
		echo ("$cont Registros encontrados </br>");
		
		if($cont=="0")
		{ 
		echo("No se encontraron datos!");
		}
	 echo "</fieldset>";  
		}
	}
	
	$Nuevo=new Producto();
    $Nuevo -> MostrarP();
		
	?>
    </td>
  </tr>
</table>
</body>
</html>
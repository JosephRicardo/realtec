<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Styles/Tablas_Productos.css" />
<title>Documento sin título</title>
</head>

<body>
<table width="447" height="125" border="0" align="center">
  <tr>
    <td width="441" height="121">
    
	<?php
		
	include('ConexionBd.php');
	
	$cont="0";
     echo "<fieldset>"; 
	 echo "<h1><center>Seleccione productos</center></h1></legend>";

	$sql = "SELECT * FROM productos";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! [' . $bd->error . ']');
	}
	 
  
	    echo "<table width=900 border=1>";
		 echo "<tr>";
		 echo"<td align=center>Codigo del producto</td>";
        echo"<td align=center>Nombre</td>";
        echo"<td align=center>Precio</td>";
        echo"<td align=center>Categoria</td>";
        echo"<td align=center>Descripcion</td>";
        echo "<td align=center>Cantidad</td>";
		echo "<td align=center>Estado</td>";
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
	$BdCantidad = stripslashes($row["Cantidad"]);	
	$BdFk_Cod_Estado = stripslashes($row["Fk_Cod_Estado"]);
	
	//___________________________Subconsulta_Categoria________________________________
	
		$sql2 = " SELECT * FROM categoria WHERE Cod_Categoria = '$BdCategoria'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdCategoria=stripslashes($row2["Categoria"]);
	}
//__________________________/Subconsulta_Categoria_______________________________
		

//___________________________Subconsulta_Estado________________________________
	
		$sql2 = " SELECT * FROM estado WHERE Cod_Estado = '$BdFk_Cod_Estado'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdFk_Cod_Estado=stripslashes($row2["Estado"]);
	}
//__________________________/Subconsulta_Estado_______________________________
		
		
		
		
/*Impresion de los datos de la bd*/
	echo"<tr>";
	echo" <td  align=center>$BdCod_Producto</td>";
	echo" <td align=center>$BdNombre</td>";
	echo" <td align=center>$BdPrecio</td>";
	echo"<td align=center>$BdCategoria</td>";
	echo" <td align=center>$BdDescripcion</td>";
	echo"<td align=center>$BdCantidad</td>";
	echo"<td align=center>$BdFk_Cod_Estado</td>";
	
	echo"<td>
<input type=checkbox> 
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
		
	?>
    
    </td>
  </tr>
</table>
</body>
</html>
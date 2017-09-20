<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tablas.css" />
<title>Documento sin título</title>
</head>

<body>
<table width="686" height="24" border="0" align="center">
  <tr>
    <td width="680" height="20" colspan="2">
    
	<?php
	
	class Reporte
	{
		public function MostrarS()
		{
				$BdProducto="Producto no existente";
		
	include('ConexionBd.php');
	

	$cont="0"; 
	 echo "<h1><center>Stock</center></h1>";

	 include('BtnDesplegable_Reportes.html');
	

	$sql = "SELECT * FROM stock";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! [' . $bd->error . ']');
	}
	 
	    echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	    echo "<table width=1000 border=1 id=tabla align=center>";
		echo "<tr>";
		echo"<th align=center>Codigo stock</td>";
        echo"<th align=center>Producto</th>";
        echo"<th align=center>Estado</th>";
        echo"<th align=center>Cantidad</th>";
        echo"<th align=center>Fecha</th>";
		echo"</tr>";
	
/**/
	while($row = $result->fetch_assoc())
	{
	$BdCod_Stock = stripslashes($row["Cod_Stock"]);
	$BdFk_Cod_Producto = stripslashes($row["Fk_Cod_Producto"]);	
	$BdFk_Cod_Estado = stripslashes($row["Fk_Cod_Estado"]);	
	$BdCantidad = stripslashes($row["Cantidad"]);	
	$BdFecha = stripslashes($row["Fecha"]);	
	
	
	
//___________________________Subconsulta_Productos________________________________
	
		$sql2 = "SELECT * FROM Productos WHERE Cod_Producto = '$BdFk_Cod_Producto'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdProducto=stripslashes($row2["Nombre"]);

	}

//__________________________/Subconsulta_Estado_______________________________

			$sql2 = " SELECT * FROM estado WHERE Cod_Estado = '$BdFk_Cod_Estado'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdEstado=stripslashes($row2["Estado"]);
	}
//____________________________________________________________________________
	

/*Impresion de los datos de la bd*/
	echo"<tr>";
	echo" <td  align=center>$BdCod_Stock</td>";
	echo" <td align=center>$BdProducto</td>";
	echo" <td align=center>$BdEstado</td>";
	echo"<td align=center>$BdCantidad</td>";
	echo" <td align=center>$BdFecha</td>";
	echo"</tr>";
	
	$cont++;
	
	$BdProducto="Producto no existente";
	
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

	$Nuevo=new Reporte();
	$Nuevo -> MostrarS();	
	?>
  
    </td>
  </tr>
</table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tablas.css" />
<title>Documento sin título</title>
</head>

<body>
<table width="1120" height="321" border="0" align="center">
  <tr>
    
  </tr>
  <tr>
    <td width="1114" colspan="2"  valign="top">
    <?php
	
	class Venta
	{
		public function MostrarV($BdNombreV)
		{
			include('ConexionBd.php');
	

	$cont="0";
	
     echo "<fieldset"; 
	 echo "<legend><h1><center>Ventas encontradas</center></h1></legend>";
     include('BtnDesplegable_Venta.html');

		
	//___________________________Subconsulta_Vendedor________________________________
	
	$sql = "SELECT * FROM Usuario WHERE Nombres   LIKE '%$BdNombreV%' ";
	
	if(!$result = $bd->query($sql)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row = $result->fetch_assoc()){
	$BdCod_Nombre=stripslashes($row["Cod_Usuario"]);
	}
//__________________________/Subconsulta_Vendedor_______________________________



	
	$sql = "SELECT * FROM factura WHERE Fk_Cod_Vendedor = '$BdCod_Nombre' ";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! [' . $bd->error . ']');
	}
	 
	   
	    echo "<table width=900 border=1 id=tabla align=center>";
		 echo "<tr>";
		 echo"<th align=center>Codigo factura</td>";
        echo"<th align=center>Vendedor</td>";
        echo"<th align=center>Fecha</td>";
        echo"<th align=center>Cliente</td>";
		echo "<th align=center></td>";
		echo"</tr>";
	
/*Base de datos*/
	while($row = $result->fetch_assoc())
	{
	$BdCod_Factura = stripslashes($row["Cod_Factura"]);
	$BdFk_Cod_Vendedor = stripslashes($row["Fk_Cod_Vendedor"]);	
	$BdFecha = stripslashes($row["Fecha"]);	
	$BdFk_Cod_Cliente = stripslashes($row["Fk_Cod_Cliente"]);
	
	//___________________________Subconsulta_Vendedor________________________________
	
		$sql2 = " SELECT * FROM usuario WHERE Cod_Usuario = '$BdFk_Cod_Vendedor'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdNombreV=stripslashes($row2["Nombres"]);
	}
//__________________________/Subconsulta_Vendedor_______________________________
		

//___________________________Subconsulta_Cliente________________________________
	
		$sql2 = " SELECT * FROM Clientes WHERE Cod_Clientes = '$BdFk_Cod_Cliente'";
	
	if(!$result2 = $bd->query($sql2)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row2 = $result2->fetch_assoc()){
	$BdNombreC=stripslashes($row2["Nombres"]);
	}
//__________________________/Subconsulta_Cliente_______________________________
		
		
		
		
/*Impresion de los datos de la bd*/
	echo"<tr>";
	echo" <td  align=center>$BdCod_Factura</td>";
	echo" <td align=center>$BdNombreV</td>";
	echo" <td align=center>$BdFecha</td>";
	echo"<td align=center>$BdNombreC</td>";
	
	
	echo"<td>
	<form class=form d=form1 name=form1 method=post action=Capa_Presentacion_Detalle_Factura.php target=_parent>
	<input type=hidden name=Ver id=Ver value=$BdCod_Factura>
	<input type=submit id=btnVer title='Ver detalle' value= />
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
	$Nuevo=new Venta();
    $Nuevo -> MostrarV($_POST["NombreV"]);
		
	?>
    </td>
    <p>&nbsp;</p>
  </tr>
</table>
</body>
</html>
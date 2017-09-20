<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Styles/Tablas_Ventas.css" />

<title>Presentacion ventas</title>
</head>

<body>
<table width="1120" height="1280" border="0" align="center">
  <tr>
    <td width="1114" height="204"><iframe src="Vendedor_Baner.php" frameborder="0" scrolling="no" width="1117" height="270" marginheight="0" marginwidth="0"></iframe></td>
  </tr>
  <tr>
    <td height="1002" valign="top">
    
    <?php
	session_start();
	class Venta
	{
		public function MostrarV()
		{
			include('ConexionBd.php');
	include('Vendedor_BtnDesplegable_Venta.html');
	
	$cont="0";
     echo "<fieldset style=width:1065px>"; 
	 echo "<legend><h1>Ventas realizadas</h1></legend>";

	$sql = "SELECT * FROM factura";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! [' . $bd->error . ']');
	}
	 
  
	    echo "<table width=900 border=1 id=tabla align=center>";
		 echo "<tr>";
		 echo"<td align=center>Codigo factura</td>";
        echo"<td align=center>Vendedor</td>";
        echo"<td align=center>Fecha</td>";
        echo"<td align=center>Cliente</td>";
		echo"<td align=center>Total de venta</td>";
		echo "<td align=center></td>";
		echo"</tr>";
	
/*Base de datos*/
	while($row = $result->fetch_assoc())
	{
	$BdCod_Factura = stripslashes($row["Cod_Factura"]);
	$BdFk_Cod_Vendedor = stripslashes($row["Fk_Cod_Vendedor"]);	
	$BdFecha = stripslashes($row["Fecha"]);	
	$BdFk_Cod_Cliente = stripslashes($row["Fk_Cod_Cliente"]);	
	
	//___________________________Sacar total________________________________
	/*
	session_start();
	$_SESSION['Subtotal'][$cont];
	echo($_SESSION['Subtotal'][$cont]);

	echo("asdswefewf");

   */
	//____________________________Sacar total_______________________________
	
	
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
	echo"<td align=center>$_SESSION[TotalFinal]</td>";
	
	echo"<td>
	<form class=form d=form1 name=form1 method=post action=Capa_Presentacion_Detalle_Venta.php target=_parent>
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
	$Nuevo -> MostrarV();
		
	?>
    
    </td>
  </tr>
</table>
</body>
</html>
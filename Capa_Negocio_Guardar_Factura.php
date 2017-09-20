<?php
include('Seguridad.php');
?>

<?php
class Factura{
	public function GuardarF(){
		
		include ('ConexionBd.php');
		
		session_start();
		$DocumentoV = $_SESSION['Documento'];
		
#________________________________Consulta_Codigo_Vendedor________________________		

		$sql = "SELECT * FROM usuario WHERE Documento = '$DocumentoV'";
		if(!$result = $bd->query($sql))
		{
			die('Datos no encontrados!!! [' . $bd->error . ']');
		}
		
		while($row = $result->fetch_assoc())
		{
			$BdCod_Usuario=stripslashes($row["Cod_Usuario"]);
		}
		
		#echo($BdCod_Usuario.'<br>');
#_________________________________________________________________________________

#_________________________________Consulta_Codigo_Cliente_________________________
		
		$DocumentoC=$_SESSION['DocumentoC'];
		echo($DocumentoC);

		$sql2 = "SELECT * FROM clientes WHERE Documento = '$DocumentoC'";
		if(!$result2 = $bd->query($sql2))
		{
			die('Datos no encontrados!!! [' . $bd->error . ']');
		}
		
		while($row2 = $result2->fetch_assoc())
		{
			$BdCod_Clientes = stripslashes($row2["Cod_Clientes"]);
		}
		echo($BdCod_Clientes);
#____________________________________________________________________________________


#_________________________________Consulta_Codigo_Detalle_Factura___________________
		$sql3 = "SELECT * FROM detallefactura";
		if(!$result3 = $bd->query($sql3))
		{
			die('Datos no encontrados!!! [' . $bd->error . ']');
		}
		
		while($row3 = $result3->fetch_assoc())
		{
			$BdCod_Detalle_Factura = stripslashes($row3["Cod_Detalle_Factura"]);
		}
		
		echo($BdCod_Detalle_Factura);
#___________________________________________________________________________________


#_________________________________Insert_Tabla_Factura______________________________
		
		mysqli_query ($bd,"INSERT INTO factura(Fk_Cod_Detalle_Factura,Fk_Cod_Vendedor,Fk_Cod_Cliente)values('$BdCod_Detalle_Factura','$BdCod_Usuario','$BdCod_Clientes')")
			or die(mysqli_error($bd));
  
			header("location: Capa_Presentacion_Ventas.php");
						
	} 
}

$Nuevo=new Factura();
$Nuevo -> GuardarF();
?>
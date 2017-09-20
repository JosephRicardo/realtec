<?php

session_start();
$_SESSION["ValidarCheck"]=0;
if (isset($_POST["checkbox"]))
{
	$_SESSION["ValidarCheck"]=1;
}


class Cliente
{

	public function GuardarC($NombreC,$TelefonoC,$DocumentoC)
	{
		
		$_SESSION['DocumentoC']=$DocumentoC;
		echo($DocumentoC);
		
		if($_SESSION["ValidarCheck"]==1 || $_SESSION["ValidarCheck"]!=1)
		{
			include('ConexionBd.php');
			
			//____________Consulta para mirar si esta___________________________________
			$cont=0;
			$sql = "SELECT * FROM clientes WHERE Documento = '$DocumentoC'";
			if(!$result = $bd->query($sql))
			{
				die('Datos no encontrados!!! [' . $bd->error . ']');
			}
			
			while($row = $result->fetch_assoc())
			{
				$cont++;
			}
			
			if($cont==0)
			{
				mysqli_query ($bd,"INSERT INTO clientes(Nombres,Telefono,Documento)values('$NombreC','$TelefonoC','$DocumentoC')")
				or die(mysqli_error($bd));
			
				header("location: Capa_Negocio_Guardar_Factura.php");
			}
			else
			{
				echo "<script type=\"text/javascript\">alert(\"Usuario ya registrado\");</script>";  
				header("location: Capa_Negocio_Guardar_Factura.php");
			}
			//__________________________________________________________________________			
		}
	}
}

$Nuevo=new Cliente();
$Nuevo -> GuardarC($_POST["NombreC"],$_POST["TelefonoC"],$_POST["DocumentoC"]);
?>
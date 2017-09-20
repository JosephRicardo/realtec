<?php
include('Seguridad.php');
class Usuario{
	public function AgregarP($Permiso){			
		include('ConexionBd.php');
		mysqli_query ($bd,"INSERT INTO permisoadministrador (Documento) VALUES ('$Permiso')")
		or die(mysqli_error($bd));	
		header('location:Capa_Presentacion_Agregar_Permiso_Admin.php');								
	}
}
//__________________________________________________________________________________
$Nuevo=new Usuario();
$Nuevo -> AgregarP($_POST["Permiso"]);
?>
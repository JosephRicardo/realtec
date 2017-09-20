<?php

class usuario
{
	public function AgregarR($Rol)
	{
					
		include('ConexionBd.php');
		mysqli_query ($bd,"INSERT INTO Roles (Roles) VALUES ('$Rol')")
		or die(mysqli_error($bd));	
		
		
		header('location:Capa_Presentacion_Agregar_Rol.php');	
								
	}
}
//__________________________________________________________________________________

$Nuevo=new usuario();
$Nuevo -> AgregarR($_POST["Rol"]);
	?>
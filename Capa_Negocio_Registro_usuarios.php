
<?php

class Usuario{
	
	
	public function registrar($Nombres,$Apellidos,$Documento,$Telefono,$Correo,$Contrasena,$Roles,$Codigo_Verificacion)
	{
		$Codigo=0000;
		if(	$Codigo_Verificacion == $Codigo)
		{			
		include('ConexionBd.php');
		mysqli_query ($bd,"INSERT INTO usuario(Nombres,Apellidos,Documento,Telefono,Correo,Contrasena,Fk_Cod_Rol)values('$Nombres','$Apellidos','$Documento','$Telefono','$Correo','$Contrasena','$Roles')")
		or die(mysqli_error($bd));
				
		header('location:RegistroExitoso.php');		
		}
		
		if(	$Codigo_Verificacion != $Codigo || $Codigo_Verificacion == '')
		{
			header('location:Registro.php');
		}						
	}	
}

//_____________________________________________

$Nuevo=new Usuario();
$Nuevo -> registrar($_POST["Nombres"],$_POST["Apellidos"],$_POST["Documento"],$_POST["Telefono"],$_POST["Correo"],$_POST["Contrasena"],$_POST["Roles"],$_POST["Codigo_Verificacion"]);



//_____________________________________________
?>


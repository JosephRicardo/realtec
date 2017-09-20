	<?php
	class Usuario{
	  public function Actualizar($Cod_Usuario,$Nombres,$Apellidos,$Documento,$Telefono,$Correo){
		  	include ('ConexionBd.php');
			
			mysqli_query($bd,"UPDATE usuario SET Nombres = '$Nombres' WHERE Cod_Usuario = '$Cod_Usuario';")
			or die (mysqli_error($bd));		
			mysqli_query($bd,"UPDATE usuario SET Apellidos = '$Apellidos' WHERE Cod_Usuario = '$Cod_Usuario';")
			or die (mysqli_error($bd));		
			mysqli_query($bd,"UPDATE usuario SET Documento = '$Documento' WHERE Cod_Usuario = '$Cod_Usuario';")
			or die (mysqli_error($bd));		
			mysqli_query($bd,"UPDATE usuario SET Telefono = '$Telefono' WHERE Cod_Usuario = '$Cod_Usuario';")
			or die (mysqli_error($bd));	
			mysqli_query($bd,"UPDATE usuario SET Correo = '$Correo' WHERE Cod_Usuario = '$Cod_Usuario';")
			or die (mysqli_error($bd));	
			}
		 public function Imprimir(){	 
			 header('location:Capa_Presentacion_Usuarios.php');	 
			 }
		}
			$nuevo= new Usuario();
			$nuevo->Actualizar($_POST['Cod_Usuario'], $_POST['Nombres'],$_POST['Apellidos'],$_POST['Documento'],$_POST['Telefono'],$_POST['Correo']);
			$nuevo->Imprimir();
	?>
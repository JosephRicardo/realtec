<?php
	class Usuario{
			public function ActualizarContrasena($Cod_Usuario,$Pass_Actual,$Pass_New,$Pass_Confirm){			
				include('ConexionBd.php');					
				$sql = "SELECT * FROM usuario WHERE Cod_Usuario = '$Cod_Usuario'";
				if(!$result = $bd->query($sql)){
				die('Datos no encontrados!!! [' . $bd->error . ']');
				}
				while($row = $result->fetch_assoc()){
				$BdContrasena = stripslashes($row["Contrasena"]);
				if($Pass_New == $Pass_Confirm && $Pass_Actual == $BdContrasena){
					mysqli_query($bd,"UPDATE usuario SET Contrasena = '$Pass_New' WHERE Cod_Usuario = '$Cod_Usuario';")
					or die (mysqli_error($bd));	
					 header('Location: Capa_Presentacion_Usuarios.php');
					}//If
					else{
					header('Location: Capa_Presentacion_Editar_Contrasena_Mal.php');
					}		
				}//While
		    }//Metodo	
		}//Class
			$nuevo= new Usuario();
			$nuevo->ActualizarContrasena($_POST['Cod_Usuario'], $_POST['Pass_Actual'], $_POST['Pass_New'], $_POST['Pass_Confirm']);	
	?>
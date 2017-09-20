	<?php
	class Cliente{
	  public function Actualizar($Cod_Cliente,$Nombres,$Telefono,$Documento){
		  	include ('ConexionBd.php');
			mysqli_query($bd,"UPDATE clientes SET Nombres = '$Nombres' WHERE Cod_Clientes = '$Cod_Cliente';")
			or die (mysqli_error($bd));	
			mysqli_query($bd,"UPDATE clientes SET Telefono = '$Telefono' WHERE Cod_Clientes = '$Cod_Cliente';")
			or die (mysqli_error($bd));		
			mysqli_query($bd,"UPDATE clientes SET Documento = '$Documento' WHERE Cod_Clientes = '$Cod_Cliente';")
			or die (mysqli_error($bd));			
			}
		 public function Imprimir(){	 
			 header('location:Capa_Presentacion_Clientes.php');	 
			 }
		}
			$nuevo= new Cliente();
			$nuevo->Actualizar($_POST['Cod_Cliente'],$_POST['Nombres'],$_POST['Telefono'],$_POST['Documento']);
			$nuevo->Imprimir();
	?>
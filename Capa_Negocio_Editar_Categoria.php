	<?php
	class Categoria{
	  public function Actualizar($Cod_Categoria,$Categoria){
		  	include ('ConexionBd.php');
			
			mysqli_query($bd,"UPDATE categoria SET Categoria = '$Categoria' WHERE Cod_Categoria = '$Cod_Categoria';")
			or die (mysqli_error($bd));		
			}
		 public function Imprimir(){	 
			 header('location:Capa_Presentacion_Agregar_Categoria.php');	 
			 }
		}
			$nuevo= new Categoria();
			$nuevo->Actualizar($_POST['Cod_Categoria'], $_POST['Categoria']);
			$nuevo->Imprimir();
	?>
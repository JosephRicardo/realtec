<?php
	class Producto{
	  public function Actualizar($Cod_Producto,$Nombre,$Precio,$Descripcion){
		  	include ('ConexionBd.php');
			mysqli_query($bd,"UPDATE productos SET Nombre = '$Nombre' WHERE Cod_Producto = '$Cod_Producto';")
			or die (mysqli_error($bd));		
			mysqli_query($bd,"UPDATE productos SET Precio = '$Precio' WHERE Cod_Producto = '$Cod_Producto';")
			or die (mysqli_error($bd));		
			mysqli_query($bd,"UPDATE productos SET Descripcion = '$Descripcion' WHERE Cod_Producto = '$Cod_Producto';")
			or die (mysqli_error($bd));						
			}
	 public function Imprimir(){
			header('location:Capa_Presentacion_Productos.php');	 
	 }
	}
		$nuevo= new Producto();
		$nuevo->Actualizar($_POST['Cod_Producto'], $_POST['Nombre'],$_POST['Precio'],$_POST['Descripcion']);
		$nuevo->Imprimir();
	?>
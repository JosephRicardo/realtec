<?php
include('Seguridad.php');
class Producto{
	public function agregar($Cod_Producto,$Cantidad)
	{		
		include('ConexionBd.php');
		mysqli_query ($bd,"INSERT INTO stock(Fk_Cod_Producto,Fk_Cod_Estado,Cantidad)values('$Cod_Producto','1','$Cantidad')")
		or die(mysqli_error($bd));		
		header('location:Capa_Presentacion_Productos.php');				
		}				
	}	
	$Nuevo=new Producto();
	$Nuevo -> Agregar($_POST['Cod_Producto'],$_POST["Cantidad"]);
?>
<?php
session_start(); 

class stock
{
	public function GuardarE()
	{
		include('ConexionBd.php');
		$cont =($_SESSION['cont']);
		echo $cont."<br>" ;
		for($i=1; $i<=$cont; $i++)
		{
			echo $_SESSION['Cod_Productos_Vendidos'][$i]." " ;
			echo $_SESSION['Cantidad'][$i]."<br>";
			
			$Codigos=$_SESSION['Cod_Productos_Vendidos'][$i];
			$Cantidades=$_SESSION['Cantidad'][$i];
			
				mysqli_query ($bd,"INSERT INTO stock(Fk_Cod_Producto,Fk_Cod_Estado,Cantidad)values('$Codigos','2','$Cantidades')")
					or die(mysqli_error($bd));	
				
				header('location:Capa_Presentacion_Factura.php');
		}
	}
}

$Nuevo= new stock;
$Nuevo->GuardarE(); 


?>
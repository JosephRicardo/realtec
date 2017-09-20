
<?php

class Producto{
	
	
	public function registrar($Categoria,$Nombrep,$Preciop,$Descripcion)
	{
				
		include('ConexionBd.php');
		mysqli_query ($bd,"INSERT INTO productos(Fk_Cpd_Categoria,Nombre,Precio,Descripcion)values('$Categoria','$Nombrep','$Preciop','$Descripcion')")
		or die(mysqli_error($bd));
				
		header('location:Capa_Presentacion_Productos.php');		
		}
					
	}	


//_____________________________________________

$Nuevo=new Producto();
$Nuevo -> registrar($_POST["Categoria"],$_POST["NombreP"],$_POST["PrecioP"],$_POST["Descripcion"]);

//_____________________________________________
?>


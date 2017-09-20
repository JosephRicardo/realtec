
<?php
include('Seguridad.php');
class Producto
{
	public function AgregarC($Categoria)
	{			
		include('ConexionBd.php');
		mysqli_query ($bd,"INSERT INTO categoria (Categoria) VALUES ('$Categoria')")
		or die(mysqli_error($bd));		
		header('location:Capa_Presentacion_Agregar_Categoria.php');								
	}
}
//__________________________________________________________________________________
$Nuevo=new Producto();
$Nuevo -> AgregarC($_POST["Categoria"]);
?>
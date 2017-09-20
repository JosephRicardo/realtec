<?php
	session_start();
	class venta{
		public function guardarDetalleV(){
			
			include('ConexionBd.php');
				
				$cont =($_SESSION['cont']);	
				
			$Nombre=''; 
			$Precio='';
			$Cantidad='';
			$Subtotal='';	
			$BdCod_ProductoF='';
			
				
			for ($i=1 ; $i <= $cont ; $i++)
			{	
			
				$NombreR=$_SESSION['Nombre'][$i];
	 
				$Nombre=$Nombre.$_SESSION['Nombre'][$i].'  ';
				$Precio=$Precio.$_SESSION['Precio'][$i].'  ';
				$Cantidad=$Cantidad.$_SESSION['Cantidad'][$i].'  ';
				$Subtotal=$Subtotal.$_SESSION['Subtotal'][$i].'  ';
	
				$sql = "SELECT * FROM productos WHERE Nombre = '$NombreR'";
				if(!$result = $bd->query($sql))
				{
					die('Datos no encontrados!!! [' . $bd->error . ']');
				}
				
				 
				/*Base de datos*/
				while($row = $result->fetch_assoc())
				{
				$BdCod_Producto = stripslashes($row["Cod_Producto"]);
				$_SESSION['Cod_Productos_Vendidos'][$i]=$BdCod_Producto;
				}	
				
				$BdCod_ProductoF=$BdCod_ProductoF.$BdCod_Producto.' ';
				#echo($BdCod_Producto."&nbsp");
				#echo($Nombre."&nbsp");
				#echo($Precio."&nbsp");.
				#echo($Cantidad."&nbsp");
				#echo($Subtotal."&nbsp"."<br>");
				
			}
			mysqli_query ($bd,"INSERT INTO detallefactura(Fk_Cod_Productos,Cantidad,Precio,Subtotal)values('$Nombre','$Cantidad','$Precio','$Subtotal')")
			or die(mysqli_error($bd));	
			
			header('location:Capa_Negocio_Guardar_Egresos.php');	
		}	
	} 
	$Nuevo= new venta;
	$Nuevo->guardarDetalleV(); 

?>
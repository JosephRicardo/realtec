<?php
include("ConexionBd.php");
$BdCod_Producto=$_POST["Eliminar"];
echo("$BdCod_Producto");
mysqli_query($bd,"DELETE FROM productos WHERE Cod_Producto='$BdCod_Producto'")
or die (mysqli_error($bd));
header("location:Capa_Presentacion_Productos.php");
?>

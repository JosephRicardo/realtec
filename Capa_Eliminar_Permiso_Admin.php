<?php
include("ConexionBd.php");
$BdCod_Permiso=$_POST["Eliminar"];

mysqli_query($bd,"DELETE FROM permisoadministrador WHERE Cod_Permiso_Administrador='$BdCod_Permiso'")
or die (mysqli_error($bd));
header("location:Capa_Presentacion_Agregar_Permiso_Admin.php")
?>

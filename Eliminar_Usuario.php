<?php
include("ConexionBd.php");
$BdCod_Usuario=$_POST["Eliminar"];
echo("$BdCod_Usuario");
mysqli_query($bd,"DELETE FROM usuario WHERE Cod_Usuario='$BdCod_Usuario'")
or die (mysqli_error($bd));
header("location:Capa_Presentacion_Usuarios.php")
?>

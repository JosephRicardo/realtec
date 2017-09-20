<?php
include("ConexionBd.php");
$BdCod_Categoria=$_POST["Eliminar"];
echo("$BdCod_Categoria");
mysqli_query($bd,"DELETE FROM categoria WHERE Cod_Categoria='$BdCod_Categoria'")
or die (mysqli_error($bd));
header("location:Capa_Presentacion_Agregar_Categoria.php")
?>

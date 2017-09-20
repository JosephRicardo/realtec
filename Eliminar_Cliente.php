<?php
include("ConexionBd.php");
$BdCod_Cliente=$_POST["Eliminar"];
echo("$BdCod_Cliente");
mysqli_query($bd,"DELETE FROM clientes WHERE Cod_Clientes='$BdCod_Cliente'")
or die (mysqli_error($bd));
header("location:Capa_Presentacion_Clientes.php")
?>

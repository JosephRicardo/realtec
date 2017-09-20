
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
include("ConexionBd.php");

$BdCod_Rol=$_POST["Eliminar"];
echo("$BdCod_Rol");

mysqli_query($bd,"DELETE FROM Roles WHERE Cod_Roles='$BdCod_Rol'")
or die (mysqli_error($bd));

header("location:Capa_Presentacion_Agregar_Rol.php")
?>
<body>
</body>
</html>
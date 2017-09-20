<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tablas.css" />
<title>Documento sin título</title>
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>



<table width="1120" height="321" border="0" align="center">
  <tr>

  </tr>
  <tr>
    <td width="1114" colspan="2"  valign="top">
    <?php

include 'ConexionBd.php';

$cont = "0";
echo "<h1><center>Nombres relacionados</center></h1>";

include 'BtnDesplegable_Usuario.html';

$nombres = $_POST["NombreU"];
$sql     = "SELECT * FROM usuario WHERE Nombres   LIKE '%$nombres%' ";
if (!$result = $bd->query($sql)) {
    die('Datos no encontrados!!! [' . $bd->error . ']');
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<table width=900 border=0 id=tabla>";
echo "<tr>";
echo "<th align=center>Cod_Usuario</th>";
echo "<th align=center>Nombres</th>";
echo "<th align=center>Apellidos</th>";
echo "<th align=center>Documento</th>";
echo "<th align=center>Correo</th>";
echo "<th align=center>Telefono</th>";
echo "<th align=center>Contraseña</th>";
echo "<th align=center>Rol</th>";
echo "<th align=center></th>";
echo "<th align=center></th>";
echo "<th align=center></th>";
echo "</tr>";

/**/
while ($row = $result->fetch_assoc()) {
    $BdCod_Usuario = stripslashes($row["Cod_Usuario"]);
    $BdNombres     = stripslashes($row["Nombres"]);
    $BdApellidos   = stripslashes($row["Apellidos"]);
    $BdDocumento   = stripslashes($row["Documento"]);
    $BdCorreo      = stripslashes($row["Correo"]);
    $BdTelefono    = stripslashes($row["Telefono"]);
    $BdContrasena  = stripslashes($row["Contrasena"]);
    $BdRol         = stripslashes($row["Fk_Cod_Rol"]);

//___________________________Subconsulta_Roles________________________________

    $sql2 = " SELECT * FROM roles WHERE Cod_Roles = '$BdRol'";

    if (!$result2 = $bd->query($sql2)) {
        die('Datos no encontrados!!! <br>[' . $bd->error . ']');
    }

    while ($row2 = $result2->fetch_assoc()) {
        $BdRol = stripslashes($row2["Roles"]);
    }
//__________________________/Subconsulta_Roles_______________________________

/*Impresion de los datos de la bd*/
    echo "<tr>";
    echo " <td  align=center>$BdCod_Usuario</td>";
    echo " <td align=center>$BdNombres</td>";
    echo " <td align=center>$BdApellidos</td>";
    echo "<td align=center>$BdDocumento</td>";
    echo " <td align=center>$BdCorreo</td>";
    echo "<td align=center>$BdTelefono</td>";
    echo "<td align=center>$BdContrasena</td>";
    echo "<td align=center>$BdRol</td>";

    echo "<td>
	<form class=form d=form1 name=form1 method=post action=Eliminar.php target=_parent>
	<input type=hidden name=Eliminar id=Eliminar value=$BdCod_Usuario>
	<input type=submit id=btneliminar value=>
	</form>
	</td>";
    echo "<td>
	<form class=form id=form2 name=form2 method=post action=Capa_Presentacion_Editar.php target=_parent>
	<input type=hidden name=Editar id=Editar value=$BdCod_Usuario>
	<input type=submit id=btnEditar value=>
	</form>
	</td>";
    echo "<td>
	<form class=form id=form3 name=form3 method=post action=Capa_Presentacion_Editar_Contrasena.php target=_parent>
	<input type=hidden name=EditarC id=EditarC value=$BdCod_Usuario>
	<input type=submit id=btnEditarC value=>
	</form>

	</td>";

    echo "</tr>";

    $cont++;
}

echo ("</table>");
echo "<br>";
echo ("$cont Registros encontrados </br>");

if ($cont == "0") {
    echo ("No se encontraron datos!");
}

?>
    </td>
    <p>&nbsp;</p>
  </tr>
</table>


   <!--
    JavaScripts
    =============================================
    -->
<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/wow/dist/wow.js"></script>
<script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/lib/smoothscroll.js"></script>
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/js/autoincrement.js"></script>

</body>
</html>
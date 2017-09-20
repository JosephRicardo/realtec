<?php
include 'Seguridad.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tablas.css" />
<title>Documento sin título</title>
</head>

<body>

<?php
include 'ConexionBd.php';
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($bd, $_POST["query"]);
    $query  = "
  SELECT * FROM usuario
  WHERE Cod_Usuario LIKE '%" . $search . "%'
  OR Nombres LIKE '%" . $search . "%'
  OR Apellidos LIKE '%" . $search . "%'
  OR Documento LIKE '%" . $search . "%'
  OR Telefono LIKE '%" . $search . "%'
  OR Correo LIKE '%" . $search . "%'
  OR Fk_Cod_Rol LIKE '%" . $search . "%'
 ";
} else {
    $query = "
  SELECT * FROM usuario ORDER BY Cod_Usuario
 ";
}
$result = mysqli_query($bd, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
<div class="divTable" style="width: 100%;">
<div class="divTableBody">
<div class="divTableCell">Cod_Usuario</div>
<div class="divTableCell">Nombres</div>
<div class="divTableCell">Apellidos</div>
<div class="divTableCell">Documento</div>
<div class="divTableCell">Telefono</div>
<div class="divTableCell">Correo</div>
<div class="divTableCell">Rol</div>
<div class="divTableCell">Eliminar</div>
<div class="divTableCell">Editar</div>
<div class="divTableCell">Cambiar Contraseña</div>
</div>
 ';
    while ($row = mysqli_fetch_array($result)) { 

    // //___________________________Subconsulta_Roles________________________________
           $BdRol = $row["Fk_Cod_Rol"];      
           $sql2 = " SELECT * FROM roles WHERE Cod_Roles = '$BdRol'";
           if (!$result2 = $bd->query($sql2)) {
           die('Datos no encontrados!!! <br>[' . $bd->error . ']');
           }

           while ($row2 = $result2->fetch_assoc()) {
           $BdRol = stripslashes($row2["Roles"]);
           }


// //__________________________/Subconsulta_Roles_______________________________

        $output .= '         
<div class="divTableRow">
<div class="divTableCell">' . $row["Cod_Usuario"] . '</div>
<div class="divTableCell">' . $row["Nombres"] . '</div>
<div class="divTableCell">' . $row["Apellidos"] . '</div>
<div class="divTableCell">' . $row["Documento"] . '</div>
<div class="divTableCell">' . $row["Telefono"] . '</div>
<div class="divTableCell">' . $row["Correo"] . '</div>
<div class="divTableCell">' . "$BdRol" . '</div>
<div class="divTableCell">

  <form class=form d=form1 name=form1 method=post action=Eliminar_Usuario.php  target=_parent>
    <input type=hidden name=Eliminar id=Eliminar value='. $row["Cod_Usuario"] .'>
    <input type=submit id=btneliminar value=>
  </form>
</div>
<div class="divTableCell">
  <form class=form id=form2 name=form2 method=post action=Capa_Presentacion_Editar_Usuario.php>
    <input type=hidden name=Editar id=Editar value='. $row["Cod_Usuario"] .'>
    <input type=submit id=btnEditar value=>
  </form>
</div>
<div class="divTableCell">
  <form class=form id=form3 name=form3 method=post action=Capa_Presentacion_Editar_Contrasena.php>
    <input type=hidden name=EditarC id=EditarC value='. $row["Cod_Usuario"] .'>
    <input type=submit id=btnEditarC value=>
  </form>
</div>
</div>
  ';
    }
    echo $output;
} else {
    echo 'Data Not Found';
}
?>
</body>
</html>


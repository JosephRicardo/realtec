<?php
include 'Seguridad.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <!--  
    TItulo Proyecto Empresa 
    =============================================
    -->
    <title>Inicio</title>
    <!--  Hojas de estilo predeterminadas-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Hoja de estilo principal y archivo de color-->
    <link rel="stylesheet" type="text/css" href="css/Contenido.css"/>
</head>

<body>
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
    </main>  

<!-- Menú-->  
      <?php
      include ("Menu_Admin.php");
      ?>
<!--Finish_Menú-->
      <br>
      <br>
      <br>
      <br>
      <div class="Container">
       <img src="images/house.png" />
        <br>
        <br>
        <br>
        <div  class="row multi-columns-row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <a class="content-box" href="Capa_Presentacion_Agregar_Categoria.php">
              <div class="content-box-image" align="center">
                <img src="images/Categoria_inicio.png" id="imagen" title="Agregar Categoria" alt="Este enlace lo llevara al formulario para registrar una nueva categoria">
              </div> 
              <h3 class="content-box-title font-serif" align="center">Agregar categoria de producto</h3>
            </a>
          </div>
   
          <div class="col-md-4 col-sm-6 col-xs-12">
            <a class="content-box" href="Contacto_Rol.php">
              <div class="content-box-image" align="center">
                <img src="images/Roles.png" id="imagen" title="Agregar Rol" alt="Este enlace lo llevara al formulario para registrar un nuevo rol">
              </div> 
              <h3 class="content-box-title font-serif" align="center">Agregar rol de usuario</h3>
            </a>
          </div>
   
          <div class="col-md-4 col-sm-6 col-xs-12">
            <a class="content-box" href="Capa_Presentacion_Agregar_Permiso_Admin.php"">
              <div class="content-box-image" align="center">
                <img src="images/Permisos.png" id="imagen" title="Permisos" alt="Este enlace proporciona los permisos">
              </div> 
              <h3 class="content-box-title font-serif" align="center">Gestion de Administradores</h3>
            </a>
          </div>
        </div>

      </div>

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
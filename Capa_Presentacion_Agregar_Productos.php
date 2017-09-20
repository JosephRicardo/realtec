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
    <title>Agregar existencias</title>
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
       <img src="images/productos.png" />

<form id="EditarDatos" action="Capa_Negocio_Agregar_Productos.php" method="post" target="_top">
<br> 
  <?php
   $Cod_Producto = $_POST['Agregar'];
  ?>
  <legend><center>Agregar Productos</center></legend>
          <div>     
            <label id="oculto" hidden="">Ingrese cantidad de producto</label><br/>
            <label for="Cantidad"></label></td>
            <input type="text" name="Cantidad" id="Cantidad" placeholder="Ingrese cantidad de producto" title="Cantidad del producto" required />
          </div><br>
          <div>
            <input type="submit" name="btnCantidad" id="btnCantidad" value="Agregar" /> 
            <input type="hidden" name="Cod_Producto" id="Cod_Producto" value="<?php echo $Cod_Producto ?>" />
          </div>
</form>
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
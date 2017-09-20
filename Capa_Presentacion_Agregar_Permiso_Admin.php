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
    <title>Agregar nuevo permiso</title>
    <!--  Hojas de estilo predeterminadas-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Hoja de estilo principal y archivo de color-->
    <link rel="stylesheet" type="text/css" href="css/Contenido.css"/>
    <link rel="stylesheet" type="text/css" href="css/Tablas.css" />
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
       <img src="images/Permisos.png" />
       <div id="Tabla">       
        <?php
          include('ConexionBd.php');
          include('Btn_Agregar_Permiso_Admin.html');
    		  echo "<br>"	;
    		  echo "<br>";      
          $sql = "SELECT * FROM permisoadministrador";
          if(!$result = $bd->query($sql))
          {
          die('Datos no encontrados!!! [' . $bd->error . ']');
          }
          echo "<div class='divTable' style='width: 100%;'>";
          echo "<div class='divTableBody'>";
            echo"<div class='divTableCell'>Codigo permiso</div>";
            echo"<div class='divTableCell'>Documento usuario</div>";
            echo"<div class='divTableCell'>Eliminar Permiso</div>";
          echo"</div>";
          while($row = $result->fetch_assoc()){
          $BdCod_Permiso = stripslashes($row["Cod_Permiso_Administrador"]);
          $BdDocumento = stripslashes($row["Documento"]);     
          /*Impresion de los datos de la bd*/
            echo"<div class='divTableRow'>";
              echo" <div class='divTableCell'>$BdCod_Permiso</div>";
              echo" <div class='divTableCell'>$BdDocumento</div>";
              echo"<div class='divTableCell'>
                <form class=form d=form1 name=form1 method=post action=Capa_Eliminar_Permiso_Admin.php target=_parent>
                <input type=hidden name=Eliminar id=Eliminar value=$BdCod_Permiso>
                <input type=submit id=btneliminar value='' title=Eliminar categoria />
                </form>
              </div>";
            echo"</div>";
          } 
            echo ("</div>");  
        ?>  
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
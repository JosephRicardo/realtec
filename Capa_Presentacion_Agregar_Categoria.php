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
    <title>Agregar Categoria</title>
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
       <img src="images/Categoria_inicio.png" />
       <div id="Tabla">       
        <?php
          include('ConexionBd.php');
          include('Btn_Agregar_Categoria.html');
    		  echo "<br>"	;
    		  echo "<br>";      
          $sql = "SELECT * FROM categoria";
          if(!$result = $bd->query($sql))
          {
          die('Datos no encontrados!!! [' . $bd->error . ']');
          }
          echo "<div class='divTable' style='width: 100%;'>";
          echo "<div class='divTableBody'>";
            echo"<div class='divTableCell'>Codigo categoria</div>";
            echo"<div class='divTableCell'>Nombre de categoria</div>";
            echo"<div class='divTableCell'>Eliminar Categoria</div>";
            echo"<div class='divTableCell'>Editar Categoria</div>";
          echo"</div>";
          while($row = $result->fetch_assoc()){
          $BdCod_Categoria = stripslashes($row["Cod_Categoria"]);
          $BdCategoria = stripslashes($row["Categoria"]);     
          /*Impresion de los datos de la bd*/
            echo"<div class='divTableRow'>";
              echo" <div class='divTableCell'>$BdCod_Categoria</div>";
              echo" <div class='divTableCell'>$BdCategoria</div>";
              echo"<div class='divTableCell'>
                <form class=form d=form1 name=form1 method=post action=Capa_Eliminar_Categoria.php target=_parent>
                <input type=hidden name=Eliminar id=Eliminar value=$BdCod_Categoria>
                <input type=submit id=btneliminar value='' title=Eliminar categoria />
                </form>
              </div>";
              echo"<div class='divTableCell'>
                <form action=Capa_Editar_Categoria.php method=post>
                <input type=hidden name=Editar id=Editar value=$BdCod_Categoria>
                <input type=submit id=btnEditar value='' title=Editar categoria />
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
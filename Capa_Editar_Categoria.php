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
    <title>Editar Categoria</title>
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
       <img src="images/Categoria_inicio.png" />
       <legend>Categoria</legend>
       <form id="EditarDatos" method="POST" name="FORM1" action="Capa_Negocio_Editar_Categoria.php" target="_top" >
         <br>
          <?php
            class Categoria{
             public function EditarC($BdCod_Categoria){
              include ('ConexionBd.php');
              $BdCod_Categoria =$_POST['Editar'];
              $sql = "SELECT * FROM categoria WHERE Cod_Categoria = '$BdCod_Categoria'";
              if(!$result = $bd->query($sql)){
                die('Datos no encontrados!!! ['. $bd->error . ']'); 
              }
              while($row = $result->fetch_assoc()){
                $BdCategoria=stripslashes($row["Categoria"]);
              }
             
          ?>
          <div id="Tabla">
           <div>
            <input type="hidden" name="Cod_Categoria" value="<?php echo $BdCod_Categoria ?>" />
           </div>
           <div> 
            <input type="text" name="Categoria" id="Categoria" required placeholder="Ingrese nueva categoria" value=" <?php echo $BdCategoria;  }
           
           
            }
            $Nuevo=new Categoria();
            $Nuevo -> EditarC($_POST["Editar"]);
            ?>"/>
           </div>  
            <br>
            </br>
           <div>  
            <input type="submit" value='Actualizar' />
           </div>  
          </div>
       </form>
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
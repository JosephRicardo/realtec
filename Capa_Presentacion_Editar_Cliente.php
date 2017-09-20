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
    <title>Editar cliente</title>
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
       <img src="images/Users.png" />
      
    
<form id="EditarDatos" method="POST" name="FORM1" action="Capa_Negocio_Editar_Cliente.php" target="_top" >
<br>
  <?php
    class Cliente{
  	 public function EditarC($BdCod_Cliente){
      include ('ConexionBd.php');
      $BdCod_Usuario =$_POST['Editar'];
      $sql = "SELECT * FROM clientes WHERE Cod_Clientes = '$BdCod_Cliente'";
        if(!$result = $bd->query($sql)){
         die('Datos no encontrados!!! ['. $bd->error . ']'); 
        }
      while($row = $result->fetch_assoc()){
        $BdNombres=stripslashes($row["Nombres"]);
        $BdTelefono=stripslashes($row["Telefono"]);
        $BdDocumento=stripslashes($row["Documento"]);
      }
  ?>
        <legend><center>Editar Datos</center></legend>  
        <div>
          <input type="hidden" name="Cod_Cliente" value="<?php echo $BdCod_Cliente ?>" />
        </div>
        <div>
          <label id="oculto">Nombres</label><br/>  
          <img id="small" src="images/Username1.png"/>    
          <input type="text" name="Nombres" placeholder="Ingrese nombres"  value="<?php echo $BdNombres; ?>" required/>
        </div>
        <div>
          <label id="oculto">Celular</label><br/>  
          <img id="small" src="images/cell1.png"/>    
          <input type="tel" name="Telefono" placeholder="Teléfono"  value="<?php echo $BdTelefono; ?>" pattern="[0-9]+" maxlength="10" required />
        </div>
        <div>
          <label id="oculto">Documento</label><br/>  
          <img id="small" src="images/Documento1.png"/>    
          <input type="text" name="Documento" placeholder="Ingrese su documento"  value="<?php echo $BdDocumento; ?>" maxlength="10" required/>
        </div>
          <?php 
  	     	}
          }
          $Nuevo=new Cliente();
          $Nuevo -> EditarC($_POST["Editar"]);
  	     	?>
        <div>
          <br>
          <span style="color: #fff;">......</span>
          <input type="submit" value="Actualizar" />
          </br>
        <div/> 
        </div>
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
</body>
</html>
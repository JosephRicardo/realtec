<?php
include('ConexionBd.php');
include 'Seguridad.php';
$sql = "SELECT * FROM usuario WHERE Cod_Usuario = '$Cod_Usuario'";
        if(!$result = $bd->query($sql))
        {
          die('Datos no encontrados!!! [' . $bd->error . ']');
        }
          while($row = $result->fetch_assoc())
        {
          $BdContrasena = stripslashes($row["Contrasena"]);
        }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script language="JavaScript" type="text/JavaScript">
      function verif(formu){
       if (formu.Pass_New.value==formu.Pass_Confirm.value) {
        return true
       }
       else {
        alert('las dos contraseñas no son iguales'); return false 
       }
  }
  </script>
  <meta charset="UTF-8">
    <!--  
    TItulo Proyecto Empresa 
    =============================================
    -->
    <title>Cambiar contraseña</title>
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
      <form id="EditarDatos" action="Capa_Negocio_Editar_Contrasena.php" method="post" target="_top">
        <br>
          <legend><center>Cambiar contraseña</center></legend>  
          <?php
            session_start();
            $Cod_Usuario =  $_SESSION['Cod_Usuario'];
          ?>
        <div>
          <label id="oculto">Contraseña actual<p style="color: #FF0000">La contraseña es incorrecta</p></label><br>   
          <img id="small" src="images/Pass1.png"/> 
          <input type="password" name="Pass_Actual" placeholder="Ingrese su contraseña actual" required/>  
        </div>
        <div>
          <label id="oculto">Contraseña nueva</label><br>
          <img id="small" src="images/Pass1.png"/>
          <input type="hidden" name="Cod_Usuario" value="<?php echo $Cod_Usuario; ?>"/>
          <input type="password" name="Pass_New" placeholder="Ingrese su nueva contraseña" required/>
        </div>
        <div>
          <label id="oculto">Confirmar contraseña</label><br>
          <img id="small" src="images/Pass1.png"/>
          <input type="password" name="Pass_Confirm" placeholder="confirme nueva contraseña" required />
        </div>
          <a href="Capa_Presentacion_Usuario.php"></a><br>
          <span style="color: #fff;">......</span>
          <input type="submit" name="btn" value="Actualizar" onclick='return(verif(this.form)); MM_validateForm()' /><br>  
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
            
       <!--      <td width="436" height="23" bgcolor="#CCCCCC"><center>Error n° 4234 </center></td>
             </tr>
             <tr>
               <td height="92"><center><p>Error al ingresar los datos</p></center>
               <p>
                 <label for="textfield"></label>

             <input type="submit" id="btn" name="btn" value="Aceptar"/>
				
               </p></td>
             </tr> -->


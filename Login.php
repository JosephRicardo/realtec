<!DOCTYPE html>
<html lang="en-US" dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    TItulo Proyecto Empresa
    =============================================
    -->
    <title>Login</title>
    <!--
    Icono Pagina (Favicons)
    =============================================
    -->
    <link rel="icon" type="image/png" sizes="96x96" href="Img_Logo.PNG">

    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--
    Hojas De Estilo
    =============================================
    -->
    <!--  Hojas de estilo predeterminadas-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Hoja de estilo principal y archivo de color-->

  <link rel="stylesheet" type="text/css" href="css/login.css"/>
    </head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
  <!-- Menú-->
    <?php
     include "Menu.php";
    ?>
   <!--Finish_Menú-->

  <div class="Container">
  <form action="Validacion_Login.php" method="post">
    <img src="images/User.png" />
      <div class="form">
      <br>
      <br>

          <label id="oculto">Usuario</label><br/>
           <img id="small" src="images/Username.png"/>
           <input type="text" name="User" placeholder="Ingrese su Documento" pattern="[0-9]{1,11}" required="required"/>
           <br/>
          <label id="oculto">Contraseña</label><br/>
           <img id="small" src="images/Pass.png"/>
           <input type="password" name="Pass" placeholder="Ingrese su contraseña" required/>
           <br>
           <br>
          <select name="Roles" id="Roles" required>
            <option value = ''>Seleccione Rol...</option>
            <?php
            include 'ConexionBd.php';
            $sql = "SELECT * FROM roles";
            if (!$result = $bd->query($sql)) {
            die('Datos no encontrados!!![' . $bd->error . ']');
            }
            while ($row = $result->fetch_assoc()) {
            $BdCod_Roles = stripslashes($row["Cod_Roles"]);
            $BdRoles     = stripslashes($row["Roles"]);
            echo "<option value = '$BdCod_Roles'>$BdRoles</option>";
            }
            ?>
          </select>
          <br>
          <br>
          <input type="submit" id="btn" name="btn" value="Ingresar  "/>
          <br/>
          <br/>
          <a href="C:\wamp\www\Proyecto\Proyecto/Olvido_Contraseña.php">¿Olvido su contraseña?</a>
          <br>
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
</body>
</html>
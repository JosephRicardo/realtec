<?php
include('Seguridad.php');
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    TItulo Proyecto Empresa 
    =============================================
    -->
    <title>Ventas Real Tec</title>
    <!--  
    Icono Pagina (Favicons) 
    =============================================
    -->
    <link rel="icon" type="image/png" sizes="96x96" href="Img_Logo.PNG">
    
    
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
    
	<link rel="stylesheet" type="text/css" href="css/Usuarios.css"/>
    </head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
<table width="1127" height="300" border="0" align="center">
  <tr>
    
  </tr>
  
  <tr>
    <td height="20" valign="top">
    <center>
    <fieldset>
<legend>Consultar por nombre de vendedor</legend>

   <form action="Capa_Presentacion_Tabla_Vendedor.php" method="post"> 
    <table width="289" border="0">
      <tr>
        <td height="81" colspan="2"><table width="289" border="0">
          <tr>
            <label id="oculto" hidden="">Ingrese Nombre de vendedor</label>
            <br/>
          </tr>
          <tr>
            <td width="47"><label for="NombreV"></label></td>
            <td colspan="2"><input type="text" name="NombreV" id="NombreV" autofocus placeholder="Nombre vendedor" title="Nombre de vendedor" required/></td>
          </tr>
          <tr>
            <td rowspan="2">&nbsp;</td>
            <td width="39" rowspan="2">&nbsp;</td>
            <td width="181">&nbsp;</td>
          </tr>
          <tr>
            <td><input type="submit" name="btnNombreV" id="btnNombreV" value="Consultar" /></td>
            <br />
          </tr>
          
        </table></td>
      </tr>
    </table>
</form>
</fieldset>
</center>
    
    
    
    </td>
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
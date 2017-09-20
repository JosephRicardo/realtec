<!DOCTYPE html>
<html lang="en-US" dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    TItulo Proyecto Empresa 
    =============================================
    -->
    <title>Real Tec</title>
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
    <link href="css/style.css" rel="stylesheet">
   
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
      
      <!-- Menú-->
  
		<?php
			include ("Menu.php");
        ?>
        
   <!--Finish_Menú-->
      
      <section class="bg-dark-30 showcase-page-header module parallax-bg" data-background="images/showcase_bg.jpg" >
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-40 titan-title-size-4">Real Tec</div><a class="section-scroll btn btn-border-w btn-round" href="Registro.php" title="Registrese aqui" >Registrese aqui</a>
          </div>
        </div>
      </section>
      <div class="main showcase-page">
        <section class="module-extra-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-9">
                <div class="callout-text font-alt">
                  <h4 style="margin-top: 0px; font-;">¿QUIERES INICIAR SESIÓN?</h4>
                  <p style="margin-bottom: 0px;">INGRESA AQUÍ</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="callout-btn-box"><a class="btn btn-border-w btn-circle" href="Login.php" title="Iniciar Sesión" >Iniciar Sesión</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module-medium" id="demos">
          <div class="container">
          <div class="row multi-columns-row">
            
 <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="#">
 <div class="content-box-image" align="center"><img src="images/screenshots/Img_Logo_opt (1) - copia.png" alt="Real tec" title="Real Tec" ></div>
 <h3 class="content-box-title font-serif" align="center">¿Tu Eres Real? Unete!!</h3></a></div> 
 
 <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="#">
 <div class="content-box-image" align="center"><img src="images/screenshots/logoSena_opt.png" alt="Logo Sena" title="Logo Sena" > </div> <h3 class="content-box-title font-serif" align="center">Programadores SENA</h3></a></div>
              
 <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="#">
 <div class="content-box-image" align="center"><img src="images/screenshots/carta_opt.png" alt="Sobre de carta" title="Sobre de carta" ></div>
 <h3 class="content-box-title font-serif" align="center">Contáctenos</h3></a></div>
 </div>
 </section> 
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
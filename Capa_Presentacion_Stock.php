<!DOCTYPE html>
<html lang="en-US" dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--  
    TItulo Proyecto Empresa 
    =============================================
    -->
    <title>Reportes Real Tec</title>
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
      
      <!-- Menú-->
  
		<?php
			include ("Menu_Admin.php");
        ?>
   
   <!--Finish_Menú-->
   
   <?php
$cuantos=0;
$valor=0;
include('ConexionBd.php');
$sql3 = "SELECT * FROM stock";
	
	if(!$result3 = $bd->query($sql3)){
			die('Datos no encontrados!!! <br>['. $bd->error . ']');		
		}
		
	while($row3 = $result3->fetch_assoc())
	{
	$BdCategoria=stripslashes($row3["Cod_Stock"]);
	
	//$cuantosentraron=$cua
	$cuantos=$cuantos+1;
	}

$valor=250+($cuantos*50);

?>
   
   
   

<form method="POST" name="FORM1" >
 <table width="1134" height="600" border="0" align="center">
    <td width="1123">
    <br>
    <br>
    <br>
    <br>
      <div class="Container">
       <img src="images/Reportes.png" />
       <div class="form"> 
        <table width="1161" border="0" align="center">
 		 <td valign="top">
           <table width="1065" height="600" border="0" align="center">              
              <td height="600" colspan="2"  valign="top"><iframe src="Contenido_Stock.php"frameborder="0" scrolling="no" width="1117" height="<?php echo $valor; ?>" marginheight="0" marginwidth="0"></iframe>
              </td>
           </table>
         </td>    
        </table>	
       </div>
      </div>
    </td>
 </table>
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


<!DOCTYPE html>
<html lang="en-US" dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    TItulo Proyecto Empresa 
    =============================================
    -->
    <title>Registro Real Tec</title>
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
	<link rel="stylesheet" type="text/css" href="css/Registro.css"/>
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


<form method="POST" name="FORM1" action="Capa_Negocio_Registro_usuarios.php">
<table width="1134" height="975" border="0" align="center">
  <tr>
    <td height="94" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="1">&nbsp;</td>
    <td width="1123"><div class="Container">
      
      <img src="images/User.png" />
      <div class="form">
        <br /><br />  
       <select name="Roles" id="Roles" required>
              <option value = ''>Seleccione Rol...</option>
              <?php
			  include('ConexionBd.php');
			  $sql = "SELECT * FROM roles";
			  if(!$result = $bd ->query($sql))
			  {
				die('Datos no encontrados!!!['.$bd->error.']'); 	  
			  }
			  while($row = $result->fetch_assoc())
			  {
				$BdCod_Roles  = stripslashes($row["Cod_Roles"]);
		  		$BdRoles  = stripslashes($row["Roles"]);
				echo "<option value = '$BdCod_Roles'>$BdRoles</option>";
			  }
			  ?>
			  </select> <br>
        
        
        <label id="oculto">Nombres</label><br/>  
        <img id="small" src="images/Username.png"/>    
        <input type="text" name="Nombres" placeholder="Ingrese nombres" required />
        <br/>
        
        <label id="oculto">Apellidos</label><br/>  
        <img id="small" src="images/Username.png"/>    
        <input type="text" name="Apellidos" placeholder="Ingrese apellidos" required />
        <br/>
        
          <label id="oculto">Documento</label><br/>  
        <img id="small" src="images/Documento.png"/>    
        <input type="text" name="Documento" placeholder="Ingrese documento" maxlength="10" required />
        <br/>

        
        <label id="oculto">Email</label><br/>  
        <img id="small" src="images/@.png"/>    
        <input type="Email" name="Correo" placeholder="Ingrese Correro electrónico" required />
        <br/>
        
        <label id="oculto">Celular</label><br/>  
        <img id="small" src="images/cell.png"/>  
        
        
        <input type="tel" name="Telefono" placeholder="Ingrese Telefono" pattern="[0-9]+" maxlength="10" required />
        <br/>
        
        <label id="oculto">Contraseña</label><br/>  
        <img id="small" src="images/Pass.png"/>    
        <input type="password" name="Contrasena" placeholder="Contraseña" required />
        <br/>
        
        <label id="oculto">RepetirContraseña</label><br/> 
        <img id="small" src="images/Pass.png"/>
        <input type="password" name="Contrasena2" placeholder="Confirmar Contraseña " required/>
        <br />  
               
        <label id="oculto">Codigo verificacion</label><br/> 
        <img id="small" src="images/Documento.png"/>
        <input type="password" name="Codigo_Verificacion" placeholder="Codigo de verificacion" pattern="[0-9]+" required />
        <br /> <br />  
        
        <input type="submit" id="btn" name="btn"  value="Registrar" />
        <br /> 
        </div>
      </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

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
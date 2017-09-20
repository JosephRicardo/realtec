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
    <title>Usuarios Real Tec</title>
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
    <link rel="stylesheet" type="text/css" href="css/Agregar_Categoria.css" />
    
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
   
   
   <form method="POST" name="FORM1" >
 <table width="1134" height="600" border="0" align="center">
    <td width="1123">
    <br>
    <br>
    <br>
    <br>
      <div class="Container">
       <img src="images/Roles.png" />
       <div class="form"> 
        <table width="1161" border="0" align="center">
 		 <td valign="top">
           <table width="1065" height="600" border="0" align="center">              
              <td height="600" colspan="2"  valign="top">
    <fieldset>
      
      <legend><h1>Roles existentes</h1></legend>    

    <table width="1067" height="201" border="0">
      <tr>
        <td width="351">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="174"><?php
		
	include('ConexionBd.php');

	$sql = "SELECT * FROM Roles";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! [' . $bd->error . ']');
	}
	 
  
	    echo "<table width=1000 align=center border=1 id=tabla>";
		 echo "<tr>";
		 echo"<td align=center>Codigo rol</td>";
        echo"<td align=center>Roles</td>";
		echo"<td align=center>	
		</td>";
		echo"</tr>";
	
/*Base de datos*/
	while($row = $result->fetch_assoc())
	{
	$BdCod_Roles = stripslashes($row["Cod_Roles"]);
	$BdRoles = stripslashes($row["Roles"]);	
	
		
/*Impresion de los datos de la bd*/
	echo"<tr>";
	echo" <td  align=center>$BdCod_Roles</td>";
	echo" <td align=center>$BdRoles</td>";
	
	
	
	echo"<td>
	<form class=form d=form1 name=form1 method=post action=Capa_Negocio_Eliminar_Rol.php target=_parent>
	<input type=hidden name=Eliminar id=Eliminar value=$BdCod_Roles>
	<input type=submit id=btnEliminar value='' title=Eliminar rol />
	</form>
	</td>";
}	
	echo ("</table>");	 
	?>

		
	</td>
        <td width="385">&nbsp;</td>
        <td width="317"><form action="Capa_Negocio_Agregar_Rol.php" target="_parent" method="post">
          <table width="288" border="0" align="center">
            <tr>
              <td width="20" height="40">&nbsp;</td>
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td height="42" colspan="2">&nbsp;</td>
              <td width="17" height="42">&nbsp;</td>
              <td colspan="2"><input type="text" name="Rol" id="Rol" required placeholder="Ingrese nuevo rol" title="Agregar nuevo rol" /></td>
            </tr>
            <tr>
              <td height="44" colspan="3">&nbsp;</td>
              <td width="42">&nbsp;</td>
              <td width="170"><input type="submit" name="btnRol" id="btnRol" value="Agregar" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </form></td>
      </tr>
    </table>
  </fieldset>
    
     
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
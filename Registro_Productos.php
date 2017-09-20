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
    <title>Agregar Productos</title>
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
       <img src="images/productos.png" />
       <legend>Agregar productos</legend>
       <form id="EditarDatos" method="POST" name="FORM1" action="Capa_Negocio_Registro_Productos.php" target="_top" >  
       <select name="Categoria" autofocus id="Categoria" required>
           <option value = '' >Seleccione...</option>;
            <?php
    		class Producto{
    		  public function RegistrarP(){
    		  include('ConexionBd.php');
    		  $sql = "SELECT * FROM categoria";
    		    if(!$result = $bd ->query($sql)){
    		    die('Datos no encontrados!!!['.$bd->error.']'); 	  
    		    }
    		    while($row = $result->fetch_assoc()){
    	        $BdCod_Categoria  = stripslashes($row["Cod_Categoria"]);
    		    $BdCategoria  = stripslashes($row["Categoria"]);
    		    echo "<option value = '$BdCod_Categoria'>$BdCategoria</option>";
    		    } 
    		  }
    		}
    		$Nuevo=new Producto();
    		$Nuevo -> RegistrarP();
            ?>
	    </select>
        <div>
         <label id="oculto">Nombre Productos</label><br/>  
         <img id="small" src="images/Username2.png"/>    
         <input type="text" name="NombreP" placeholder="Nombre del producto" required/>
        </div>
        <div>
         <label id="oculto">Precio</label><br/>  
         <img id="small" src="images/Precio1.png"/>    
         <input type="text" name="PrecioP" placeholder="precio del producto" required/>
        </div>
        <div>
         <label id="oculto">descripcion</label><br/>  
         <img id="small" src="images/Descripcion1.png"/>    
         <input type="text" name="Descripcion" placeholder="Descripcion del producto" required/>
        </div>
        <div>
         <br>
          <input type="submit" id="btn" name="btn"  value="Registrar"/>
         <br/>
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
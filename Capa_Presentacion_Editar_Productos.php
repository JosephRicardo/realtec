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
    <title>Editar producto</title>
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
      
    
<form id="EditarDatos" method="POST" name="FORM1" action="Capa_Negocio_Editar_Productos.php" target="_top" >
<br>
  <?php
    class Producto{
	 public function EditarP($BdCod_Producto){
      include ('ConexionBd.php');
      $BdCod_Producto =$_POST['EditarP'];
      $sql = "SELECT * FROM productos WHERE Cod_Producto = '$BdCod_Producto'";
        if(!$result = $bd->query($sql)){
        die('Datos no encontrados!!! ['. $bd->error . ']'); 
        }
      while($row = $result->fetch_assoc()){
        $BdNombre=stripslashes($row["Nombre"]);
        $BdPrecio= stripslashes($row["Precio"]);
        $BdFk_Cod_Categoria=stripslashes($row["Fk_Cpd_Categoria"]);
        $BdDescripcion=stripslashes($row["Descripcion"]);

        $sql2 = "SELECT * FROM categoria WHERE Cod_Categoria = '$BdFk_Cod_Categoria'";
      if(!$result2 = $bd->query($sql2)){
      die('Datos no encontrados!!! ['. $bd->error . ']'); 
      }
      while($row2= $result2->fetch_assoc()){
      $BdCategoria= stripslashes($row2["Categoria"]);
      }
//_______________________________________________________________________
}
?>

        <legend><center>Editar Datos</center></legend> 
        <div>            
            <SELECT NAME="Roles" SIZE=1 ">
            <OPTION VALUE="<?php echo $BdFk_Cod_Categoria ?>"><?php echo $BdCategoria ?> </OPTION>       
            </SELECT>
        </div>    
        <div>
            <input type="hidden" name="Cod_Producto" value="<?php echo $BdCod_Producto ?>" />
        </div>
        <div>
            <label id="oculto">Producto</label><br/> 
            <img id="small" src="images/Username2.png"/>  
            <input type="text" name="Nombre" value="<?php echo $BdNombre; ?>" placeholder="Nombre del producto" required/>
        </div>
        <div>
            <label id="oculto">Precio</label><br/> 
            <img id="small" src="images/Precio1.png"/>
            <input type="text" name="Precio" value="<?php echo $BdPrecio; ?>" placeholder="Precio del producto " required />
        </div>
        <div>
            <label id="oculto">Descripcion</label><br/> 
            <img id="small" src="images/Documento1.png"/> 
            <input type="text" name="Descripcion" placeholder="Descripción del producto" required value="<?php echo $BdDescripcion;  
	        }
            }
            $Nuevo=new Producto();
            $Nuevo -> EditarP($_POST["EditarP"]);
            ?>"/>
        </div> 
        <div>   
            <br>
            <span style="color: #fff;">......</span>
            <input type="submit" name="btn"  value="Actualizar" />
            <br/>
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
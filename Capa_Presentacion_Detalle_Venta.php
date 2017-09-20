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
    <title>Detalle</title>
    <!--  Hojas de estilo predeterminadas-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Hoja de estilo principal y archivo de color-->
    <link rel="stylesheet" type="text/css" href="css/Contenido.css"/>
       <link rel="stylesheet" type="text/css" href="css/Tablas.css"/>
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
       <img src="images/sales.png" />

       <?php
       session_start();
		class Stock{
		public function MostrarS($Ver){		
		include('ConexionBd.php');
	    $cont="0";
        echo "<fieldset>"; 
	    echo "<legend><h1><center>Detalle de venta</center></h1></legend>";
	    $sql = "SELECT * FROM detallefactura WHERE Cod_Detalle_Factura = '$Ver' ";
	    if(!$result = $bd->query($sql)){
		die('Datos no encontrados!!! [' . $bd->error . ']');
	    }
	 
	    echo "<center>";
	    echo "<table width=900 border=0 id=tablaGV>";
		 echo "<tr>";
		 echo"<th align=center>Numero factura</th>";
        echo"<th align=center>Codigo producto</th>";
        echo"<th align=center>Cantidad</th>";
        echo"<th align=center>Precio</th>";
		echo "<th align=center>SubTotal</th>";
		echo"</tr>";
		echo "</center>";
	
        /**/
	    while($row = $result->fetch_assoc()){
	    $BdCod_Detalle_Factura = stripslashes($row["Cod_Detalle_Factura"]);
	    $BdFk_Cod_Productos = stripslashes($row["Fk_Cod_Productos"]);	
	    $BdFk_Cod_Productos=str_replace(' ','</br>',$BdFk_Cod_Productos);
	    $BdCantidad = stripslashes($row["Cantidad"]);	
	    $BdCantidad=str_replace(' ','</br>',$BdCantidad);
	    $BdPrecio = stripslashes($row["Precio"]);	
	    $BdPrecio=str_replace(' ','</br>',$BdPrecio);
	    $BdSubtotal = stripslashes($row["SubTotal"]);
	    $BdSubtotal=str_replace(' ','</br>',$BdSubtotal);
        
        /*Impresion de los datos de la bd*/
	    echo"<tr>";
	    echo" <td id='td1' align=center>$BdCod_Detalle_Factura</td>";
	    echo" <td  id='td1' align=center>$BdFk_Cod_Productos</td>";
		echo" <td  id='td1' align=center>$BdCantidad</td>";
		echo"<td  id='td1' align=center>$BdPrecio</td>";
		echo"<td  id='td1' align=center>$BdSubtotal</td>";
		echo"</tr>";
	    $cont++;
	    }
		echo ("</table>");
		echo ("$cont Registros encontrados </br>");
		
		if($cont=="0"){ 
		echo("No se encontraron datos!");
		}
	    echo "</fieldset>";  
		}
		}
	    $Nuevo=new Stock();
        $Nuevo -> MostrarS($_POST["Ver"]);
		
	?>
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
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
    <title>Agregar Producto a venta</title>
    <!--  Hojas de estilo predeterminadas-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Hoja de estilo principal y archivo de color-->
    <link rel="stylesheet" type="text/css" href="css/Tablas.css"/>
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
	  <img src="images/sales.png" />
	  <div id="Tabla">
	  <?php
	  include('ConexionBd.php');
	  include('BtnDesplegable_Factura.html');	
			echo "<br>";
			echo "</br>"; 		 
	        session_start();
	        @$_SESSION['cont']=$_SESSION['cont']+1;
	        //echo $_SESSION['cont'];
	        @$Cod_Producto=$_POST["CodigoP"];
	        //echo("$Cod_Producto");
	        @$Cantidad=$_POST["btnCantidad"];
	        //echo("$Cantidad");
	class Producto{
		public function Mostrar ($Cod_Producto,$Cantidad){
			include('ConexionBd.php');		
			$sql = "SELECT * FROM productos WHERE Cod_Producto ='$Cod_Producto'";
			if(!$result = $bd->query($sql)){
			die('Datos no encontrados!!! [' . $bd->error . ']');
			}	 
			/*Base de datos*/
			while($row = $result->fetch_assoc()){
			$BdCod_Producto = stripslashes($row["Cod_Producto"]);
			$BdNombre = stripslashes($row["Nombre"]);	
			$BdPrecio = stripslashes($row["Precio"]);	
			}
			$cont = $_SESSION['cont'];
			@$_SESSION['Nombre'][$cont] = $BdNombre;
			@$_SESSION['Precio'][$cont] = $BdPrecio;
			$_SESSION['Cantidad'][$cont] = $Cantidad;
			$_SESSION['Subtotal'][$cont] = $_SESSION['Precio'][$cont] * $_SESSION['Cantidad'][$cont];
				
			/*___________________________Impresion de vectores__________________________*/

			echo "<div class='divTable' style='width: 100%;'>";
			 echo "<div class='divTableBody'>";
              echo "<div class='divTableCell'>Nombre</div>";
              echo "<div class='divTableCell'>Precio</div>";
              echo "<div class='divTableCell'>Cantidad</div>";
              echo "<div class='divTableCell'>Subtotal</div>";
              echo "<div class='divTableCell'>Eliminar</div>";
             echo "<div>"; 
            echo "</div>";
	  ?>
	  </div>
	  <?php

            for($i=1;$i<=$cont;$i++){
             echo "<div class='divTableRow'>";
              echo "<div class='divTableCell'>";
            	echo $_SESSION['Nombre'][$i];
              echo "</div>";
              echo "<div class='divTableCell'>";
            	echo $_SESSION['Precio'][$i];
              echo "</div>";
              echo "<div class='divTableCell'>";
            	echo $_SESSION['Cantidad'][$i];
              echo "</div>";
              echo "<div class='divTableCell'>";
            	echo $_SESSION['Subtotal'][$i];;
              echo "</div>";
              echo "<div class='divTableCell'>
            			<form class=form d=form1 name=form1 method=post action=Capa_Negocio_Eliminar_Producto_Venta.php>
						 <input type=hidden name=Posicion id=Posicion value=$i>
						 <input type=submit id=btneliminar value=>
						</form>
            		</div>";
             echo "</div>"; 
         
            }  
			
			$TotalF=0;
		    for($i=1;$i<=$cont;$i++){
			$TotalF=$TotalF+$_SESSION['Subtotal'][$i];
			} 		  

	        $_SESSION['TotalFinal']=number_format($TotalF);
	        echo "<div style='align:center'>";
	         echo "Total: $_SESSION[TotalFinal]";
	        echo "</div>";
	        }
	    }

	    $Nuevo=new Producto();
	    $Nuevo -> Mostrar(@$_POST["CodigoP"],@$_POST["btnCantidad"]);

	     ?>
	     </div>
	     <br>
	     </br>
	     <div>
          <form method="post" action="Capa_Negocio_Guardar_DetalleV.php">
	       <input  type="submit" name="GenerarVenta" id="BtnVenta" value="Generar venta" />
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
<script src="assets/js/autoincrement.js"></script>
</body>
</html>
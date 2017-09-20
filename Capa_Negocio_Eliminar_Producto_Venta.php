<?php

session_start();

include("ConexionBd.php");

/*
$_SESSION['cont']=0;
header ('Location: Capa_Presentacion_Agregar_ProductoV.php');
*/


$PosicionE=$_POST["Posicion"];
echo "La posicion es: ";
echo $PosicionE;

$_SESSION['Nombre'][$PosicionE] = '0';
$_SESSION['Precio'][$PosicionE] = '0';
$_SESSION['Cantidad'][$PosicionE] = '0';
echo("<br>");
echo($_SESSION['Nombre'][$PosicionE]);
echo($_SESSION['Precio'][$PosicionE]);
echo($_SESSION['Cantidad'][$PosicionE]);

#echo "el precio queda en: ";
#echo $_SESSION['Precio'][$PosicionE];
//header('location:Capa_Negocio_Guardar_ProductoV.php');
echo "<form class=form d=form1 name=form1 method=post action=Capa_Negocio_Guardar_ProductoV.php>";
//echo "<input type=text name=Posicion id=Posicion value=$i>";
echo "<input type=hidden name=CodigoP id=CodigoP value='0'>";
echo "<input type=hidden id=btnCantidad name=btnCantidad value='0' />";
echo "<input type=submit id=btneliminar value='Eliminado Correctamente. Clic para continuar' />";

echo "				
</form>";
?>
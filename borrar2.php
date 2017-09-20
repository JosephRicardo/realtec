<?php
session_start();
$_SESSION['cont']=$_SESSION['cont']+1;
echo $_SESSION['cont'];
?>
<p><a href="cancelarcompra.php">Cancelar Compra</a></p>

<?php
session_start();
$_SESSION['autorizado']=0;
header("location: Login.php");
?>
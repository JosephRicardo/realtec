<?php 
session_start();

if($_SESSION['autorizado']==0){
	header("Location: Session_Cerrada.php");
	}
?>
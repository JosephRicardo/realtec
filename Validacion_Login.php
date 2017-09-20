<?php

session_start();
include('ConexionBd.php');
 $Documento = $_POST['User'];
 $Contrasena = $_POST['Pass'];
 $Roles = $_POST['Roles'];
 $count="0";
 
 
 //Inicializar variable de seguridad
 $_SESSION['autorizado']=0;
 
 
include('ConexionBd.php');

//Datos Login	  
$sql = "SELECT * FROM usuario WHERE Documento = '$Documento' AND Contrasena = '$Contrasena' AND Fk_Cod_Rol = '$Roles'";
	if(!$result = $bd->query($sql))
	{
		die('Datos no encontrados!!! <br>['. $bd->error . ']');		
	}	  
	
	while($row = $result->fetch_assoc())
	{
     $BdDocumento=stripslashes($row["Documento"]);
     $BdNombres=stripslashes($row["Nombres"]);
	 $count++;		
	}



	if($count!='0')
	{
		$_SESSION['Documento']=$BdDocumento;
		$_SESSION['autorizado']="1";
		$_SESSION['usuarioactual']=$BdNombres;
		header("location: Index.php");
			
	if($Roles==1){
		header("location: Capa_Presentacion_Inicio.php");
		}else
		{
		header("location: Vendedor_Index.php");	
		}
	}else{
	header("location: Login.php");	
	}
			
	  
?>
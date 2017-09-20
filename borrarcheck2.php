<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
session_start();



$_SESSION["seleccionado"]="no";
if (isset($_POST["sel"]))
{
	$_SESSION["seleccionado"]="si";
}






class Cliente
{
	public function GuardarC()
	{
		
		//saber si llegó el check
		if ($_SESSION["seleccionado"]=="si")
		{
			echo "Si está seleccionado";	
		}
		
		
		if ($_SESSION["seleccionado"]=="no")
		{
			echo "No está seleccionado";	
		}
		
		$_SESSION["seleccionado"]="no"; 
	}
}

$Nuevo=new Cliente();
$Nuevo -> GuardarC();
?>


















<?php








$seleccionado="no";



if (isset($_POST["sel"]))
{
	$seleccionado="si";
		
}


echo "¿Hizo la selección?   Rta: $seleccionado ";


?>
</body>
</html>
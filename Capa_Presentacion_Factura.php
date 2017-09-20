<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/Tabla_Factura.css"/>
<style type="text/css">
#form1 #tabla tr td {
	font-size: 18px;
}
</style>
<title>Factura</title>
</head>
<body>

<br>
</br>
<br>
</br>
<form id="form1" name="form1" method="post" action="Capa_Negocio_Guardar_Cliente.php" target="_top">
  <table id="tabla" width="393" height="298" border="0" align="center">
    <tr>
      <th height="37" colspan="2" align="center">Factura</th>
    </tr>
    <tr>
      <th height="41" align="left" colspan="2" id="th"><label for="Agregar_Cliente"></label>
      Primera compra
      <input type="checkbox" name="checkbox" id="checkbox"/></th>
    </tr>
    <tr>
      <td width="185" height="104" align="center" id="td1"><label for="Cliente">  <br />
       <br />
      </label>
      <input type="text" name="NombreC" id="NombreC" placeholder="Nombre"/></td>
      <td width="192" id="td1" align="center">
      <br />
      <label id="Fecha">Fecha:<br />
      </label>
      <input name="Fecha"type="text" readonly="readonly" value="<?php echo date("d/m/Y"); ?>" size="10"/>
      </td>
    </tr>
    <tr>
      <td id="td1" height="54" align="center"><p>
        <input type="text" name="DocumentoC" id="DocumentoC" placeholder="Documento"/>
      </p>  </td>
      <td id="td1" height="54" align="center"><input type="text" name="TelefonoC" id="TelefonoC" placeholder="Telefono"/></td>
    </tr>
    <tr>
      <td height="23" colspan="2" valign="top">
      
      <?php
	  
	  
	     include('ConexionBd.php');
         session_start();
	  
	  		/*___________________________Impresion de vectores__________________________*/
		$cont = $_SESSION['cont'];
		$i = 0; 
		echo "<table width=600 border=0 id=tabla >";
				echo "<tr >";	
				echo"<th align=center>Producto</th>";
				echo"<th align=center>Precio</th>";
				echo"<th align=center>Cantidad</th>";
				echo"<th align=center>Subtotal</th>";
				echo "</tr>";
				//echo "</table>";
		 for($i=1;$i<=$cont;$i++)
		   {
			   
	if($_SESSION['Cantidad'][$i]!='0' && $_SESSION['Cantidad'][$i]!='' )		   
	{		   
			   //echo $i;echo "-"; echo $cont;
		echo "<tr>";
				echo "<td align=center> ";
				echo $_SESSION['Nombre'][$i];
				echo "</td>";
				echo "<td align=center>";
				echo $_SESSION['Precio'][$i];
				echo "</td>";
				echo "<td align=center>";
				echo $_SESSION['Cantidad'][$i];
				echo "</td>";
				echo "<td align=center>";
				echo $_SESSION['Subtotal'][$i];
				echo "</td>";
				
		echo "</tr>";
		   }
		  
				
		   }
		    echo "<td align=center>";
				echo "Total";
				echo "</td>";
				echo "<td align=center>";
				echo "";
				echo "</td>";
				echo "<td align=center>";
				echo "";		
		   echo "</td>";
				echo "<td align=center>";
				echo "$_SESSION[TotalFinal]";
				echo "</td>";
		   
		/*____________________________________________________________________________*/
	  
	  ?>
      </td>
    </tr>    
  </table>
    <tr>
      <td height="23" align="center"/>
      <input type="submit"  class="link" value="Terminar"/>
      <td align="center"><input type="button" value="Imprimir" id="BtnImprimir" onclick="javascript:window.print()" /></td>
  </tr>
  </table>
</form>
</body>
</html>
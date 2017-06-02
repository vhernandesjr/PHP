<style>
p.uppercase {
    text-transform: uppercase;
}
</style>
<?php
/**
 * @author Galore 
 * @copyright 2016
 */
 
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING^ E_DEPRECATED);
include "conecta.php";

 
$id_grupo = $_GET['id_grupo'];



if (!empty($_POST)) {


$nome_grupo= $_POST['nome_grupo'];


$query = "
	    INSERT INTO Grupo (		
								id_grupo,
								nome_grupo
							)
		Values 				(		
								'$id_grupo',
								'$nome_grupo'
						  	 	
							)";
						
	    $result = mysql_query($query) or die("Error in query: $query. " .mysql_error());
		print "<script> window.location='lista.php';</script>";
		
}  



echo<<<BLOCO


<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agenda</title>

</head>


<body >

<table width="100%" border="0" cellspacing="0" cellpadding="0" height="600px">
  <tr>
    <td  height="85px" colspan="2"  nowrap style="border-bottom: solid #234446 2px !important "> 
		<img src="../usuarios/1.jpg" height="100">
     
	<div style="float:left"></div></td >
  </tr>
  <tr>
 	  <td colspan="2"> 
	  </td>
  </tr>
  <tr>
 
     <td width="13%" height="100%" align="center" valign="top">
     
     <a href="JavaScript: window.history.back();">
        		<img src="imagem/esquerda.png" width="100%" height="100%"></a>
    <td width="100%" align="center" valign="top" >
    
    
    <form id="form1" name="form1" method="post" action="">
 <table width="1000px" border="0" cellspacing="0" cellpadding="0" style="border:#234446 solid 1.5px !important; margin-top:30px; color:#234446" align="center" bgcolor="#e4e3ec">
   <tr>
    <td colspan="3"  style="background:#234446; color:#e4e3ec">CADASTRO DE CLIENTE</td>
  </tr>
  <tr>
    <td height="30" colspan="3" style=" padding-left:20px;">ID:<br>
      <input name="id_grupo" type="text"   id="id_grupo" value="$id_grupo" disabled="disabled" style="margin-bottom:5px"  /></td>
    </tr>
        <tr>
          <td height="30" style=" padding-left:20px;">NOME:<BR>
            <input name="nome_grupo" type="text" id="nome_grupo" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          
    <tr>
    <td colspan="3" align="center" valign="middle">
	
	<input type="submit" name="button" id="button" value="GRAVAR" />
	
	</td>
    </tr>
    <tr>
      <td colspan="3" align="center" valign="middle">&nbsp;</td>
    </tr>
  </table>
	</form>
    
    </td>
  </tr>
      <tr>
    <td colspan="2" >
        <div style="float:right; bottom:0px"></div>  
    </td>
  </tr>
  <tr>
    <td colspan="2" style="border-top: solid #234446 2px !important; right:!important">
    
    <img src="../imagem/Galore.png" align="right" >
    

    </td>
  </tr>
</table>
</body>



BLOCO

?>
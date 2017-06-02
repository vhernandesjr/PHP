
<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING^ E_DEPRECATED);
include "conecta.php";




$id_usuario = $_GET['id_usuario'];

 
$query = "SELECT * FROM Usuario WHERE id_usuario=$id_usuario";
$result = @mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());

while ($row = mysql_fetch_assoc($result)) 
{
$id_usuario= $row['id_usuario'];
$nome_usuario =$row['nome_usuario'];
$senha_usuario=$row['senha_usuario'];

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
        		<img src="../imagem/esquerda.png" width="100%" height="100%"></a>
    <td width="100%" align="center" valign="top" >
    
    
    <form id="form1" name="form1" method="post" action="">
 <table width="1000px" border="0" cellspacing="0" cellpadding="0" style="border:#234446 solid 1.5px !important; margin-top:30px; color:#234446" align="center" bgcolor="#e4e3ec">
   <tr>
    <td colspan="3"  style="background:#234446; color:#e4e3ec">CADASTRO DE CLIENTE</td>
  </tr>
  <tr>
    <td height="30" colspan="3" style=" padding-left:20px;">ID:<br>
      <input name="id_usuario" type="text"   id="id_usuario" value="$id_usuario" disabled="disabled" style="margin-bottom:5px"  /></td>
    </tr>
        <tr>
          <td height="30" style=" padding-left:20px;">NOME:<BR>
            <input name="nome_usuario" type="text" id="nome_usuario" style=" width:500px; text-transform:uppercase;margin-bottom:5px" value="$nome_usuario" /></td>
          </tr>
           <tr>
          <td height="30" style=" padding-left:20px;">SENHA:<BR>
            <input name="senha_usuario" type="text" id="senha_usuario" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  value="$senha_usuario" /></td>
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
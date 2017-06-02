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

 
$id_usuario = $_GET['id_usuario'];
$id_cliente = $_GET['id_cliente'];
$adm_usuario = $_GET['adm_usuario'];
$grupo_usuario = $_GET['grupo_usuario'];



if (!empty($_POST)) {


$nome_cliente= $_POST['nome_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$endereco_cliente= $_POST['endereco_cliente'];
$observacao_cliente	= $_POST['observacao_cliente'];
$cliente_cadastrado_por	= $_POST['cliente_cadastrado_por'];
$contato_cliente= $_POST['contato_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];
$celular_cliente= $_POST['celular_cliente'];
$cidade_cliente	= $_POST['cidade_cliente'];
$cep_cliente	= $_POST['cep_cliente'];
$email_cliente	= $_POST['email_cliente'];


$query = "
	    INSERT INTO Cliente (		
								id_cliente,
								nome_cliente,
								telefone_cliente,
						  	 	endereco_cliente,
						  	 	observacao_cliente,
						  	 	mostra_cliente,
						  	 	cliente_cadastrado_por,
								contato_cliente,
								cnpj_cliente,
								celular_cliente,
								cidade_cliente,
								cep_cliente,
								email_cliente
							)
		Values 				(		
								'$id_cliente',
								'$nome_cliente',
								'$telefone_cliente',
						  	 	'$endereco_cliente',
						  	 	'$observacao_cliente',
						  	 	'1',
						  	 	'$cliente_cadastrado_por',
								'$contato_cliente',
								'$cnpj_cliente',
								'$celular_cliente',
						  	 	'$cidade_cliente',
						  	 	'$cep_cliente',
						  	 	'$email_cliente'
						  	 	
							)";
						
	    $result = mysql_query($query) or die("Error in query: $query. " .mysql_error());
		print "<script> window.location='agenda.php?id_usuario=$id_usuario&adm_usuario=$adm_usuario&grupo_usuario=$grupo_usuario';</script>";
		
		




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
		<img src="usuarios/$grupo_usuario.jpg" height="100">
     
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
      <input name="id_gado" type="text"   id="id_gado" value="$id_cliente" disabled="disabled" style="margin-bottom:5px"  /></td>
    </tr>
        <tr>
          <td height="30" style=" padding-left:20px;">NOME:<BR>
            <input name="nome_cliente" type="text" id="nome_cliente" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
           <tr>
          <td height="30" style=" padding-left:20px;">CONTATO:<BR>
            <input name="contato_cliente" type="text" id="contato_cliente" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
             <tr>
          <td height="30" style=" padding-left:20px;">CNPJ / CPF:<BR>
            <input name="cnpj_cliente" type="text" id="cnpj_cliente" style=" width:300px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
           <tr>
          <td height="30" style=" padding-left:20px;">TELEFONE:<BR>
            <input name="telefone_cliente" type="text" id="telefone_cliente" style=" width:300px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
           <tr>
          <td height="30" style=" padding-left:20px;">CELULAR:<BR>
            <input name="celular_cliente" type="text" id="celular_cliente" style=" width:300px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
           <tr>
          <td height="30" style=" padding-left:20px;">ENDEREÇO:<BR>
            <input name="endereco_cliente" type="text" id="endereco_cliente" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
           <tr>
          <td height="30" style=" padding-left:20px;">CIDADE:<BR>
            <input name="cidade_cliente" type="text" id="cidade_cliente" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
    <tr>
        <tr>
          <td height="30" style=" padding-left:20px;">CEP:<BR>
            <input name="cep_cliente" type="text" id="cep_cliente" style=" width:300px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
    <tr>
        <tr>
          <td height="30" style=" padding-left:20px;">EMAIL:<BR>
            <input name="email_cliente" type="text" id="email_cliente" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
            <tr>
          <td height="30" style=" padding-left:20px;">OBSERVAÇÃO:<BR>
            <input name="observacao_cliente" type="text" id="observacao_cliente" style=" width:500px; text-transform:uppercase;margin-bottom:5px"  /></td>
          </tr>
		           <tr>
          <td height="30" style=" padding-left:20px;">CADASTRO PRIVADO:     		
		  	<input type="radio" name="cliente_cadastrado_por" value="$grupo_usuario" id="cliente_cadastrado_por_1" checked>
                Sim
             <input type="radio" name="cliente_cadastrado_por" value="0" id="cliente_cadastrado_por_0">
                Não
           </td>
          </tr>
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
    
    <img src="imagem/Galore.png" align="right" >
    

    </td>
  </tr>
</table>
</body>

BLOCO

?>
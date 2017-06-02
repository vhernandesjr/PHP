
<style>

table tbody tr td a{
  display: block;
  text-transform: uppercase;
  font-family:Verdana, Geneva, sans-serif;
  color:#234446;
  text-decoration:none; 
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
$adm_usuario = $_GET['adm_usuario'];
$grupo_usuario = $_GET['grupo_usuario'];

// INSERE CLIENTE


$query = "SELECT id_cliente FROM Cliente ORDER BY id_cliente DESC LIMIT 1 ";
$result = @mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());
while ($row = mysql_fetch_assoc($result)) {
$id_cliente = $row['id_cliente'];
$ultimo_id_cliente=$id_cliente+1;
}
if($ultimo_id_cliente<1)
$ultimo_id_cliente=1;


$pesquisa= $_POST['pesquisa'];

$x=1;
$query = "SELECT * FROM Cliente where nome_cliente LIKE '%$pesquisa%' AND mostra_cliente='1'  AND (cliente_cadastrado_por='0' OR  cliente_cadastrado_por='$grupo_usuario') ORDER BY nome_cliente ASC limit 20";
$result = @mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());

while ($row = mysql_fetch_assoc($result)) {
$id_cliente = $row['id_cliente'];
$nome_cliente = $row['nome_cliente'];
$telefone_cliente = $row['telefone_cliente'];
$celular_cliente = $row['celular_cliente'];
$endereco_cliente = $row['endereco_cliente'];
$observacao_cliente = $row['observacao_cliente'];

//TROCA COR 
if($x % 2 == 0)
{
$cor="#fff";
}
else
{
$cor="#cbe3f5";
}
//FIM TROCA COR 

//PODE ADICIONAR CLIENTE
if($adm_usuario=="1")
{
	$add_cliente="Cadastra.php?&id_cliente=$ultimo_id_cliente&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario&adm_usuario=$adm_usuario";
}
else
{
$add_cliente="#";
}
//FIM PODE ADICIONAR CLIENTE
if($adm_usuario=="1")
{
$resultado.= <<<RESULTADO
 <tr bgcolor=$cor>
    
    <td><a href="#">$nome_cliente</a></td>
    <td><a href="#">$telefone_cliente</a></td>
	<td><a href="#">$celular_cliente</a></td>
    <td><a href="#">$endereco_cliente</a></td>
	<td><a href="Mostra.php?&id_cliente=$id_cliente&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario&adm_usuario=$adm_usuario"><center><img src="imagem/olho.png" height="30"></center></a></td>
 	<td><a href="Altera.php?&id_cliente=$id_cliente&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario&adm_usuario=$adm_usuario"><center><img src="imagem/edit.gif" height="30"></center></a></td>
    <td><a href="Oculta.php?&id_cliente=$id_cliente&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario&adm_usuario=$adm_usuario"><center><img src="imagem/x.gif" height="30"></center></a></td>
  </tr>
  
RESULTADO;
$x=$x+1;

}

else
{
$resultado.= <<<RESULTADO


 <tr bgcolor=$cor>
    
    <td><a href="#">$nome_cliente</a></td>
    <td><a href="#">$telefone_cliente</a></td>
	<td><a href="#">$celular_cliente</a></td>
    <td><a href="#">$endereco_cliente</a></td>
	<td><a href="Mostra.php?&id_cliente=$id_cliente&id_usuario=$id_usuario"><center><img src="imagem/olho.png" height="30"></center></a></td>
 	<td><a href="#"><center><img src="imagem/edit.gif" height="30"></center></a></td>
    <td><a href="#"><center><img src="imagem/x.gif" height="30"></center></a></td>
  </tr>
  
RESULTADO;
$x=$x+1;

}
}



echo <<< CORPO

<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agenda</title>

</head>


<body >

<table width="100%" border="0" cellspacing="0" cellpadding="0" height="600px" style="text-transform: uppercase;  font-family:Verdana, Geneva, sans-serif;  color:#234446;">
  <tr>
    <td  height="85px"  nowrap style="border-bottom: solid #234446 2px !important "> 
		<img src="usuarios/$grupo_usuario.jpg" height="100">
    </td >
	<td  height="85px"  nowrap style="border-bottom: solid #234446 2px !important "> 
		<form id="form1" name="form1" method="post" action="agenda.php?&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario&adm_usuario=$adm_usuario">
			<div style="float:left">
			
				<input name="pesquisa" type="text" id="pesquisa"  style=" width:800px; height:50px; text-transform:uppercase;margin-bottom:5px;font-size:30px;margin-left:100px" />     
			</div>
    		<div style="float:left;padding-left:20px">
				
		 		<input type="image" src="imagem/lupa.png" height="30px"  height="30px" onClick="this.form.submit()">
				
    		</div>
		</form>
	</td>
  </tr>
   <tr>
 
        <td width="13%"  align="center" valign="top" height="100%">
	 		<a href=$add_cliente>
	 			<img src="imagem/add.png" height="50px" style="margin:10px">
	 		</a>
        	<a href="index.php">
        		<img src="imagem/fechar.png"  height="50px" style="margin:10px;vertical-align:bottom" >
        	</a>
        </td>
    <td align="center" valign="top" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
   
    <td>Nome</td>
    <td>Telefone</td>
	    <td>Celular</td>
    <td>Endereço</td>
	 <td><center>Detalhes</center></td>
    <td><center>Alterar</center></td>
    <td><center>Excluir</center></td>
  </tr>
  
  
$resultado
 
  
</table>
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
CORPO
?>
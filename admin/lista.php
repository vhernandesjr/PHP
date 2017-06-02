
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


// INSERE USUARIO
$query = "SELECT id_usuario FROM Usuario ORDER BY id_usuario DESC LIMIT 1 ";
$result = @mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());
while ($row = mysql_fetch_assoc($result)) {
$id_usuario = $row['id_usuario'];
$ultimo_id_usuario=$id_usuario+1;
}
if($ultimo_id_usuario<1)
$ultimo_id_usuario=1;
// FIM INSERE USUARIO

// INSERE GRUPO
$query = "SELECT id_grupo FROM Grupo ORDER BY id_grupo DESC LIMIT 1 ";
$result = @mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());
while ($row = mysql_fetch_assoc($result)) {
$id_grupo = $row['id_grupo'];
$ultimo_id_grupo=$id_grupo+1;
}
if($ultimo_id_grupo<1)
$ultimo_id_grupo=1;
// FIM INSERE GRUPO


$pesquisa= $_POST['pesquisa'];

$x=1;
$query = "SELECT * FROM Usuario where nome_usuario LIKE '%$pesquisa%' ORDER BY nome_usuario ASC limit 20";
$result = @mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());

while ($row = mysql_fetch_assoc($result)) {
$id_usuario = $row['id_usuario'];
$nome_usuario = $row['nome_usuario'];
$senha_usuario = $row['senha_usuario'];
$adm_usuario = $row['adm_usuario'];
$grupo_usuario = $row['grupo_usuario'];

if($x % 2 == 0)
{
$cor="#fff";
}
else
{
$cor="#cbe3f5";
}

if($adm_usuario=="1")
{
$adm_usuario="Sim";
}
else
{
$adm_usuario="Não";
}

$resultado.= <<<RESULTADO

 <tr bgcolor=$cor>
    
   
    <td><a href="#">$nome_usuario</a></td>
	<td><a href="#">$senha_usuario</a></td>
	 <td><a href="#">$grupo_usuario</a></td>
	  <td><a href="#">$adm_usuario</a></td>
	<td><a href="Mostra.php?&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario"><center><img src="../imagem/olho.png" height="30"></center></a></td>
 	<td><a href="Altera.php?&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario"><center><img src="../imagem/edit.gif" height="30"></center></a></td>
    
  </tr>
  
RESULTADO;
$x=$x+1;
}


echo <<< CORPO

<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Agenda</title>

</head>


<body >

<table width="100%" border="0" cellspacing="0" cellpadding="0" height="600px" style="text-transform: uppercase;  font-family:Verdana, Geneva, sans-serif;  color:#234446;">
  <tr>
    <td  height="85px"  nowrap style="border-bottom: solid #234446 2px !important "> 
		<img src="../usuarios/1.jpg" height="100">
    </td >
	<td  height="85px"  nowrap style="border-bottom: solid #234446 2px !important "> 
		<form id="form1" name="form1" method="post" action="lista.php?&id_usuario=$id_usuario">
			<div style="float:left">
			
				<input name="pesquisa" type="text" id="pesquisa"  style=" width:800px; height:50px; text-transform:uppercase;margin-bottom:5px;font-size:30px;margin-left:100px" />     
			</div>
    		<div style="float:left;padding-left:20px">
				
		 		<input type="image" src="../imagem/lupa.png" height="30px"  height="30px" onClick="this.form.submit()">
				
    		</div>
		</form>
	</td>
  </tr>
   <tr>
 
        <td width="13%"  align="center" valign="top" height="100%">
	 		<a href="Cadastra.php?&id_usuario=$ultimo_id_usuario">
	 			<img src="../imagem/add.png" height="50px" style="margin:10px">
	 		</a>
				<a href="Cadastra_grupo.php?&id_grupo=$ultimo_id_grupo">
	 			<img src="../imagem/grupo.png" height="50px" style="margin:10px">
	 		</a>
        	<a href="index.php">
        		<img src="../imagem/fechar.png"  height="50px" style="margin:10px;vertical-align:bottom" >
        	</a>
        </td>
    <td align="center" valign="top" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
   	
    <td>Nome</td>
    <td>Senha</td>
	<td>Grupo</td>
	<td>Administrador</td>
		 <td><center>Detalhes</center></td>
    <td><center>Alterar</center></td>
    
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
    
    <img src="../imagem/Galore.png" align="right" >
    

    </td>
  </tr>
</table>
</body>
CORPO
?>
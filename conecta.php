<?php

	$db_host = "mysql.dgplus.com.br"; 
    $db_user = "agenda2016"; 
    $db_pass = "alundra2016"; 
    $db_name   = "agenda2016";

$conexao = mysql_connect($db_host, $db_user, $db_pass) or die("Não foi possível conectar à base de dados. Erro: " . mysql_errno() . "<br />" . mysql_error());
mysql_select_db($db_name, $conexao) or die("Não foi possível selecionar o banco de dados. Erro: " . mysql_errno() . "<br />" . mysql_error());

?>

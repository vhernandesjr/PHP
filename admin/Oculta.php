<?php

 
 include "conecta.php";
$id_cliente = $_GET['id_cliente'];
$id_usuario = $_GET['id_usuario'];

$query = "   UPDATE   Cliente
		SET   mostra_cliente = '0'
		WHERE id_cliente = $id_cliente";
	    $result = mysql_query($query) or die("Error in query: $query. " .mysql_error());

		print "<script> window.location='agenda.php?&id_usuario=$id_usuario';</script>";
?>
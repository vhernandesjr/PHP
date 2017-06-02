<?php

/**
 * @author Jujuba's Development
 * @copyright 2015
 */

include "conecta.php";
$id_pro = $_GET['id_pro'];


$query = "DELETE  FROM propriedade WHERE id_propriedade='$id_pro'";
@mysql_query($query, $conexao) or die("Error in query: $query. " .mysql_error());
// SITE LISTA.PHP
		print "<script> window.location='http://dgplus.com.br/fazenda/ListaPropriedade.php';</script>";

?>
<?php
session_start();

$_SESSION = array();

// destru�mos ent�o o cookie relacionado a esta sess�o
if(isset($_COOKIE[session_name("adm_diario")])){
setcookie(session_name(), '', time() - 1000, '/');
}
  
// finalmente destruimos a sess�o
 session_destroy();



header("Location:index.php");
?>


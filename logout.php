<?php
session_start();

$_SESSION = array();

// destruímos então o cookie relacionado a esta sessão
if(isset($_COOKIE[session_name("adm_diario")])){
setcookie(session_name(), '', time() - 1000, '/');
}
  
// finalmente destruimos a sessão
 session_destroy();



header("Location:index.php");
?>


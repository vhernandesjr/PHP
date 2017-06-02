<?
header('p3p: CP="CAO PSA OUR"');
session_name("adm");
session_start();
session_destroy();

echo $_SESSION["adm"];
if($_GET['login'] == "falhou") {
    print $_GET['causa'];
}
?>
<form name="form1" method="post" action="loga.php?acao=logar">
<BR>
<div style="height: 50% !important;">
</div>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" style="alignment-adjust:central">
  <tr>
    <th scope="col"><span style="font-family: Arial, Helvetica, sans-serif">Login: </span></th>
    <th scope="col"><div align="left">
      <input type="text" name="nome" />
    </div></th>
  </tr>
  <tr>
    <td><div align="center" style="font-weight: bold; font-family: Arial, Helvetica, sans-serif">Senha: </div></td>
    <td><input type="password" name="pwd" /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Entrar" />
    </div></td>
    </tr>
</table>

<BR>
</form>


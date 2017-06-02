<?

header('p3p: CP="CAO PSA OUR"');
if($_GET['login'] == "falhou") {
    print $_GET['causa'];
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
    <td  height="85px"  nowrap style="border-bottom: solid #234446 2px !important ">&nbsp;</td>
  </tr>
  <tr>
    
    <td align="center" valign="middle" height="100%" >
    
    	    <form name="form1" method="post" action="loga.php?acao=logar"  >
   <div style="height:100%; size:100% !important" >
    <table width="300px" border="0" cellspacing="0" cellpadding="0" style="border:#234446 solid 1.5px !important; margin-top:30px; color:#234446" align="center" bgcolor="#e4e3ec">
  <tr>
    <td  style="background:#234446; color:#e4e3ec">ÁREA RESTRITA:</td>
  </tr>
  <tr>
 
    <td>NOME:</td>
  </tr>
  <tr>
    <td align="center" ><input type="text" name="nome"  style="margin-bottom:5px;text-transform:uppercase"/></td>
  </tr>
  <tr>
    <td>SENHA:</td>
  </tr>
  <tr>
    <td align="center" ><input type="password" name="pwd" style="margin-bottom:5px;text-transform:uppercase" /></td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="Submit" value="ENTRAR"  style="margin-bottom:5px"/></td>
  </tr>
</table>  
</div>
</form>
     
    </td>

  </tr>
  <tr>
    <td style="border-top: solid #234446 2px !important;"> 
    <div style="float:right; bottom:0px; ">
    <img src="imagem/Galore.png"  style="right:0" />
    </div></td>
  </tr>
  </table>

</body>

BLOCO

?>




<? 
session_name("adm");
session_start();

if($_GET['acao'] == "logar") {

include "conecta.php";
 //   $conn = mysql_connect("root","","senha"); //configure os dados do seu MySQL
//    $banco = mysql_select_db("SEU_BANCO"); //coloque o nome do seu banco de dados
//    
    $nome = $_POST['nome'];
    $q_user = mysql_query("SELECT * FROM Usuario WHERE nome_usuario='$nome'");

    if(mysql_num_rows($q_user) == 1) {
    
        $query = mysql_query("SELECT * FROM Usuario WHERE nome_usuario='$nome'");
		$dados = mysql_fetch_array($query);
		
        if($_POST['pwd'] == $dados['senha_usuario']) {
			$id_usuario = $dados['id_usuario'];
			$adm_usuario = $dados['adm_usuario'];
			$grupo_usuario = $dados['grupo_usuario'];
			
            header("Location: agenda.php?&id_usuario=$id_usuario&grupo_usuario=$grupo_usuario&adm_usuario=$adm_usuario");
            exit;
        } else {
            header("Location: index.php?login=falhou&causa=".urlencode('Senha Errada'));
            exit;
        }
    } else {
        header("Location: index.php?login=falhou&causa=".urlencode('Usuario Invalido'));
        exit;
    }
}
//agora a parte que verifica se o login já foi feito
if(session_is_registered("nome") == false) {
    header("Location: index.php");
}
?>

<style type="text/css">
<!--
.cabeca {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>

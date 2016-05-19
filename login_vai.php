<?php
//CONFERE O LOGIN/SENHA NO BANCO
// Conexão com o banco de dados

require "comum.php";

// Inicia sessões

session_start();



// Recupera o login

$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;

// Recupera a senha, a criptografando em MD5

$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login

if(!$email || !$senha)
{
echo "ok"; 
echo "<form name = form method = post action = index.php>";

echo "</form>";
echo "<script>form.submit();</script>";
    exit;

}



/**

* Executa a consulta no banco de dados.

* Caso o número de linhas retornadas seja 1 o login é válido,

* caso 0, inválido.

*/

$SQL = "SELECT id_user, email, senha, nome, cpf, sexo, nascimento, conta, cidade, uf, cep, num, complemento, type, bloqueado, saldo 

        FROM usuario

        WHERE email = '" . $email . "'";

$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");

$total = @mysql_num_rows($result_id);



// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)

{
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão

    $dados = @mysql_fetch_array($result_id);


    // Agora verifica a senha

if(!strcmp($senha, $dados["senha"]))

    {

        // TUDO CERTO! Agora, passa os dados para a sessão e redireciona o usuário

        $_SESSION["id_usuario"]   = $dados["id_user"];

	$_SESSION["email_usuario"] = $dados["email"];

        $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);

	$_SESSION["senha_usuario"] = stripslashes($dados["senha	"]);

	$_SESSION["cpf_usuario"] = stripslashes($dados["cpf"]);

        $_SESSION["sexo_usuario"] = stripslashes($dados["sexo"]);

        $_SESSION["nascimento_usuario"] = stripslashes($dados["nascimento"]);

        $_SESSION["conta_usuario"] = stripslashes($dados["conta"]);

        $_SESSION["cidade_usuario"] = stripslashes($dados["cidade"]);

        $_SESSION["uf_usuario"] = stripslashes($dados["uf"]);

        $_SESSION["cep_usuario"] = stripslashes($dados["cep"]);

        $_SESSION["num_usuario"] = stripslashes($dados["num"]);

        $_SESSION["complemento_usuario"] = stripslashes($dados["complemento"]);

        $_SESSION["type_usuario"] = stripslashes($dados["type"]);

        $_SESSION["bloqueado_usuario"] = stripslashes($dados["bloqueado"]);

        $_SESSION["saldo_usuario"] = stripslashes($dados["saldo"]);


	echo "1:".$_SESSION["email_usuario"];
	header("Location: perfil.php");
//	echo "<form name = form method = post action = perfil.php>";
//	echo "</form>";
//	echo "<script>form.submit();</script>";

        

    }

    // Senha inválida

    else

    {

	echo "Senha invalida!";


    }

}

?>
</body>
</html>

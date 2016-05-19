<?php
//MANDA AS MENSAGENS PRO BANCO
require "comum.php";


//Id randômico
$id = "NULL";
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["anoAniversario"]."-".$_POST["mesAniversario"]."-".$_POST["diaAniversario"];
$sexo = $_POST["sexo"];
$cpf = $_POST["cpf"];
$conta = $_POST["conta"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$cep = $_POST["cep"];
$numero = $_POST["num"];
$complemento = $_POST["complemento"];



//senha criptografada em md5
$senha = isset($_POST["cadsenha"]) ? md5($_POST["cadsenha"]) : FALSE;
//Verificar se existe alguma conta com o e-mail
$SQL = "select email from usuario where email = '".$email."';";
$result_id = mysql_query($SQL) or die(mysql_error());

$total = mysql_num_rows($result_id);

$dados = mysql_fetch_array($result_id);

if ($dados['email'] != $email)
{

$SQL = "INSERT INTO usuario VALUES (".$id.", '".$email."', '".$senha."', '".$nome."', '".$cpf."', '".$sexo."', '".$nascimento."', ".$conta.", '".$cidade."', '".$uf."', ".$cep.", ".$numero.", '".$complemento."', 0, 0, 0);";

//Faz a ação no banco
mysql_query($SQL) or die(mysql_error());


$SQL = "select id_user from usuario where email = '$email';";
$result_id = mysql_query($SQL) or die(mysql_error());
$total = mysql_num_rows($result_id);

$dados = mysql_fetch_array($result_id);

$id = $dados['id'];


header("Location: index.php");

}
else
{

echo "<form name = form method = post action = cadastro.php>";

echo "<input type = hidden value = '<br>ESTE EMAIL JÁ ESTÁ VINCULADO COM UMA CONTA! ' name = msg>";
echo "</form>";
echo "<script>form.submit();</script>";
}
?>

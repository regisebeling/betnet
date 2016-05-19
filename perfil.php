<?php
require "verifica.php";
require "comum.php";
session_start();
?>


<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>BetNet</title>
</head>
<body>
<h1>Dados do Usuário</h1>
<?php

echo "Nome: ".$_SESSION["nome_usuario"]."<br>";
echo "Email: ".$_SESSION["email_usuario"]."<br>";
echo "CPF: ".$_SESSION["cpf_usuario"]."<br>";
echo "Sexo: ".$_SESSION["sexo_usuario"]."<br>";
echo "Nascimento: ".$_SESSION["nascimento_usuario"]."<br>";
echo "Conta: ".$_SESSION["conta_usuario"]."<br>";
echo "Cidade: ".$_SESSION["cidade_usuario"]."<br>";
echo "UF: ".$_SESSION["uf_usuario"]."<br>";
echo "CEP: ".$_SESSION["cep_usuario"]."<br>";
echo "Número: ".$_SESSION["num_usuario"]."<br>";
echo "Complemento: ".$_SESSION["complemento_usuario"]."<br>";




?>
</body>
</html>

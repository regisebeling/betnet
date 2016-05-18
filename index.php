<?php
//CATP11
//Autor: Régis Ebeling
include("Pessoa.class.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CATP11</title>
  </head>
  <body>
</body>
<?php

	echo "====================== Implementação a ======================";
	echo "<br><br>";
	$timestamp = mktime(0, 0, 0, 02, 10, 1993); // Gera o timestamp da data 09/02/1993 as 00:00:00
	
	echo "*****Instância de Pessoa utilizando o construtor padrão*****<br>";
	$pessoa_padrao = new Pessoa();
	echo "Nome: ".$pessoa_padrao->getNome()."<br>";
	echo "Nasc: ".date('d/m/Y', $pessoa_padrao->getNascimento())."<br>";
	echo "Sexo: ".$pessoa_padrao->getSexo()."<br><br><br>";
	
	echo "*****Instância de Pessoa utilizando o construtor Alternativo*****<br>";
	$pessoa_parametrizada = new Pessoa("Pedro", $timestamp, Sexo::MASCULINO);
	echo "Nome: ".$pessoa_parametrizada->getNome()."<br>";
	echo "Nasc: ".date('d/m/Y', $pessoa_parametrizada->getNascimento())."<br>";
	echo "Sexo: ".$pessoa_parametrizada->getSexo()."<br><br><br>";
	
	echo "*****Instância de Pessoa utilizando o construtor Alternativo e parâmetro inválido*****<br>";
	$pessoa_parametrizada = new Pessoa("2Pedro", $timestamp, Sexo::MASCULINO);
	echo "Nome: ".$pessoa_parametrizada->getNome()."<br>";
	echo "Nasc: ".date('d/m/Y', $pessoa_parametrizada->getNascimento())."<br>";
	echo "Sexo: ".$pessoa_parametrizada->getSexo()."<br><br><br>";
	
	echo "*****Instância de Aluno utilizando o construtor padrão*****<br>";
	$aluno_padrao = new Aluno();
	echo "Nome: ".$aluno_padrao->getNome()."<br>";
	echo "Nasc: ".date('d/m/Y', $aluno_padrao->getNascimento())."<br>";
	echo "Sexo: ".$aluno_padrao->getSexo()."<br>";
	echo "Código: ".$aluno_padrao->getCodigo()."<br>";
	echo "Nível: ".$aluno_padrao->getNivel()."<br><br><br>";
	
	echo "*****Instância de Aluno utilizando o construtor Alternativo*****<br>";
	$aluno_parametrizada = new Aluno("Yoda", $timestamp, Sexo::MASCULINO, "7777", Nivel::MESTRADO);
	echo "Nome: ".$aluno_parametrizada->getNome()."<br>";
	echo "Nasc: ".date('d/m/Y', $aluno_parametrizada->getNascimento())."<br>";
	echo "Sexo: ".$aluno_parametrizada->getSexo()."<br>";
	echo "Codigo: ".$aluno_parametrizada->getCodigo()."<br>";
	echo "Nivel: ".$aluno_parametrizada->getNivel()."<br><br><br>";
	
	echo "*****Instância de Aluno utilizando o construtor Alternativo e parâmetro inválido*****<br>";
	$aluno_parametrizada = new Aluno("2Yoda", $timestamp, Sexo::MASCULINO, "e777", Nivel::MESTRADO);
	echo "Nome: ".$aluno_parametrizada->getNome()."<br>";
	echo "Nasc: ".date('d/m/Y', $aluno_parametrizada->getNascimento())."<br>";
	echo "Sexo: ".$aluno_parametrizada->getSexo()."<br>";
	echo "Codigo: ".$aluno_parametrizada->getCodigo()."<br>";
	echo "Nivel: ".$aluno_parametrizada->getNivel()."<br><br><br>";



	
	echo "<strong>====================== Implementação b ======================</strong><br>";
	$objetos = array();
	$objetos_hash = array(); //Para utilizar uma hashtable
	$nomes_masc = array("Alisson", "Willian", "Ernando", "Paulao", "Artur", "Dourado", "Bob", "Andrigo", "Anderson", "Sasha", "Vitinho");
	$nomes_fem = array("Maria", "Julia", "Leticia", "Fernanda", "Paula", "Rosana", "Vanessa", "Sofia");
	$nomes_merge = array_merge($nomes_fem, $nomes_masc);
	$vet_sexo = array(Sexo::INDEFINIDO, Sexo::MASCULINO, Sexo::FEMININO);
	$vet_nivel = array(Nivel::INDEFINIDO, Nivel::GRADUACAO, Nivel::ESPECIALIZACAO, Nivel::MESTRADO, Nivel::DOUTORADO);


	for ($i = 0; $i < 10; $i++){
	
		if(rand(0,1) == 0){ //Objeto tipo Pessoa
			if(rand(0,2) == 0){ //Masculino
				$nome = $nomes_masc[rand(0,10)];
				$sexo = $vet_sexo[1];

			}
			else if(rand(0,2) == 1){ //Feminino
				$nome = $nomes_fem[rand(0,7)];
				$sexo = $vet_sexo[2];
			}
			else{ //INDEFINIDO
				$nome = $nomes_merge[rand(0,18)];
				$sexo = $vet_sexo[0];
				
			}
			$timestamp = mktime(0, 0, 0, rand(1,12), rand(0,30), rand(1930,2015));	//Gera uma data aleatória		
			$pessoa = new Pessoa($nome, $timestamp, $sexo); echo "<br>"; //Cria um objeto do tipo pessoa
			array_push($objetos, $pessoa); //Adiciona o objeto no array
			$objetos_array[$nomes] = $pessoa; //Adiciona o objeto na hashtable (array associativo)
		
		}

		else{ 
			if(rand(0,2) == 0){ //Masculino
				$nome = $nomes_masc[rand(0,10)];
				$sexo = $vet_sexo[1];

			}
			else if(rand(0,2) == 1){ //Feminino
				$nome = $nomes_fem[rand(0,7)];
				$sexo = $vet_sexo[2];
			}
			else{ //INDEFINIDO
				$nome = $nomes_merge[rand(0,18)];
				$sexo = $vet_sexo[0];
				
			}
			$timestamp = mktime(0, 0, 0, rand(1,12), rand(0,30), rand(1930,2015));			
			$codigo = rand(1,9999);
			$nivel = $vet_nivel[rand(0,4)];
			$aluno = new Aluno($nome, $timestamp, $sexo, $codigo, $nivel); echo "<br>";
			array_push($objetos, $aluno);
			$objetos_hash[$nome] = $aluno;
		
		}

	}
	
	//Imprimindo os objetos armazenador no array
	foreach($objetos as $obj)
		echo $obj->toString()."<br>";

	echo "<strong>====================== Implementação c ======================</strong><br>";
	//Gerando aleatoriamente os objetos utilizei um conjunto de poucos nomes e não realizei a comparação se a chave (nome) já existe na hashtable. Então, simplesmente o registro é sobrescrito na estrutura de dados.
	//Imprimindo os objetos armazenados na hashtable

	foreach($objetos_hash as $obj){
		echo $obj->toString()."<br>";

	}


?>
</html>


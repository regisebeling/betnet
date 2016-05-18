<?php

class Usuario {
	private $id;
	private $email;
	private $senha;
	private $nome;
	private $cpf;
	private $sexo;
	private $nascimento;
	private $conta;
	private $cidade;
	private $uf;
	private $cep;
	private $num;
	private $complemento;
	private $type;
	private $bloqueado;


	public function __construct(){
		$this->setID(null);
		$this->setEmail("");
		$this->setSenha("");
		$this->setNome("");
		$this->setCPF("");
		$this->setSexo("");
		$this->setNascimento("");
		$this->setConta("");
		$this->setCidade("");
		$this->setUF("");
		$this->setCEP("");
		$this->setNum("");
		$this->setComplemento("");
		$this->setType(0);
		$this->setBloqueado(false);
	}
	//ID
	function getID() {
        	return $this->id;
	}

	function setID($novo_id)
	{
 		$this->id = $novo_id;
		return true;
	}
	//Email
	function getEmail() {
        	return $this->email;
	}

	function setEmail($novo_email)
	{
 		$this->email = $novo_email;
		return true;
	}
	//Senha
	function getSenha() {
        	return $this->senha;
	}

	function setSenha($nova_senha)
	{
 		$this->senha = $nova_senha;
		return true;
	}
	//Nome
	function getNome() {
        	return $this->nome;
	}

	function setNome($novo_nome)
	{
 		$this->nome = $novo_nome;
		return true;
	}
	//CPF
	function getCPF() {
        	return $this->cpf;
	}

	function setCPF($novo_cpf)
	{
 		$this->cpf = $cpf;
		return true;
	}
	//Sexo
	function getSexo() {
        	return $this->sexo;
	}

	function setSexo($novo_sexo)
	{
 		$this->sexo = $novo_sexo;
		return true;
	}
	//Nascimento
	function getNascimento() {
        	return $this->nascimento;
	}

	function setNascimento($novo_nascimento)
	{
 		$this->nascimento = $novo_nascimento;
		return true;
	}
	//Conta
	function getConta() {
        	return $this->conta;
	}

	function setConta($nova_conta)
	{
 		$this->conta = $nova_conta;
		return true;
	}
	//Cidade
	function getCidade() {
        	return $this->cidade;
	}

	function setCidade($nova_cidade)
	{
 		$this->cidade = $nova_cidade;
		return true;
	}
	//UF
	function getUF() {
        	return $this->uf;
	}

	function setUF($novo_uf)
	{
 		$this->uf = $novo_uf;
		return true;
	}
	//CEP
	function getCEP() {
        	return $this->cpf;
	}

	function setCPF($novo_cpf)
	{
 		$this->cpf = $novo_cpf;
		return true;
	}
	//Num
	function getNum() {
        	return $this->num;
	}

	function setNum($novo_num)
	{
 		$this->num = $novo_num;
		return true;
	}
	//Complemento
	function getComplemento() {
        	return $this->complemento;
	}

	function setComplemento($novo_complemento)
	{
 		$this->complemento = $novo_complemento;
		return true;
	}
	//Type
	function getType() {
        	return $this->type;
	}

	function setType($novo_type)
	{
 		$this->type = $novo_type;
		return true;
	}
	//Bloqueado
	function getBloqueado() {
        	return $this->bloqueado;
	}

	function setBloqueado($novo_bloq)
	{
 		$this->bloqueado = $novo_bloq;
		return true;
	}
}


<?php

class Reclamacao {
	private $id_reclamacao;
	private $id_user;
	private $categoria;
	private $texto;
	private $resposta;


	public function __construct(){
		$this->setIDReclamacao(null);
		$this->setIDUser(null);
		$this->setCategoria("");
		$this->setTexto("");
		$this->setResposta("");
	}
	//ID Reclamação
	function getIDReclamacao() {
        	return $this->id_reclamacao;
	}

	function setIDReclamacao($nova_reclamacao)
	{
 		$this->id_reclamacao = $nova_reclamacao;
		return true;
	}
	//ID User
	function getIDUser() {
        	return $this->id_user;
	}

	function setIDUser($novo_user)
	{
 		$this->user = $novo_user;
		return true;
	}
	//Categoria
	function getCategoria() {
        	return $this->categoria;
	}

	function setCategoria($nova_categoria)
	{
 		$this->categoria = $nova_categoria;
		return true;
	}
	//Texto
	function getTexto() {
        	return $this->texto;
	}

	function setTexto($novo_texto)
	{
 		$this->texto = $novo_texto;
		return true;
	}
	//Resposta
	function getResposta() {
        	return $this->resposta;
	}

	function setResposta($nova_resposta)
	{
 		$this->resposta = $nova_resposta;
		return true;
	}

}

<?php

class Aposta {
	private $id_aposta;	
	private $id_luta;
	private $id_user;
	private $candidato;
	private $valor;


	public function __construct(){
		$this->setIDAposta(null);
		$this->setIDLuta(null);
		$this->setIDUser(null);
		$this->setCandidato("");
		$this->setValor("");
	}
	//ID Aposta
	function getIDAposta() {
        	return $this->id_aposta;
	}

	function setIDAposta($nova_aposta)
	{
 		$this->id_aposta = $nova_aposta;
		return true;
	}
	//ID Luta
	function getIDLuta() {
        	return $this->id_luta;
	}

	function setIDLuta($novo_id)
	{
 		$this->id_luta = $novo_id;
		return true;
	}
	//ID Usuário
	function getIDUser() {
        	return $this->id_user;
	}

	function setIDUser($novo_user)
	{
 		$this->id_user = $novo_user;
		return true;
	}
	//Candidato
	function getCandidato() {
        	return $this->candidato;
	}

	function setCandidato($novo_candidato)
	{
 		$this->candidato = $novo_candidato;
		return true;
	}
	//Valor
	function getValor() {
        	return $this->valor;
	}

	function setValor($novo_valor)
	{
 		$this->valor = $novo_valor;
		return true;
	}
}


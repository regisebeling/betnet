<?php

class Luta {
	private $id_luta;
	private $op1;
	private $op2;
	private $data;
	private $horario;
	private $local;
	private $aposta_minima;
	private $ativa;


	public function __construct(){
		$this->setIDLuta(null);
		$this->setOp1("");
		$this->setOp2("");
		$this->setData("");
		$this->setHorario("");
		$this->setLocal("");
		$this->setApostaMinima("");
		$this->setAtiva(true);
	}
	//ID
	function getIDLuta() {
        	return $this->id_luta;
	}

	function setIDLuta($novo_id)
	{
 		$this->id_luta = $novo_id;
		return true;
	}
	//Op1
	function getOp1() {
        	return $this->op1;
	}

	function setOp1($novo_op1)
	{
 		$this->op1 = $novo_op1;
		return true;
	}
	//Op2
	function getOp2() {
        	return $this->op2;
	}

	function setOp2($novo_op2)
	{
 		$this->op2 = $novo_op2;
		return true;
	}
	//Data
	function getData() {
        	return $this->data;
	}

	function setData($nova_data)
	{
 		$this->data = $nova_data;
		return true;
	}
	//Horario
	function getHorario() {
        	return $this->horario;
	}

	function setHorario($novo_horario)
	{
 		$this->horario = $novo_horario;
		return true;
	}
	//Local
	function getLocal() {
        	return $this->local;
	}

	function setLocal($novo_local)
	{
 		$this->local = $novo_local;
		return true;
	}
	//ApostaMinima
	function getApostaMinima() {
        	return $this->aposta_minima;
	}

	function setApostaMinima($nova_aposta_minima)
	{
 		$this->aposta_minima = $nova_aposta_minima;
		return true;
	}
	//Ativa
	function getAtiva() {
        	return $this->ativa;
	}

	function setAtiva($nova_ativa)
	{
 		$this->ativa = $nova_ativa;
		return true;
	}
}


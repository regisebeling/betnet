<?php

class Resultado {
	private $id_luta;
	private $vencedor;
	private $perdedor;
	private $bolsa;


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
	//Vencedor
	function getVencedor() {
        	return $this->vencedor;
	}

	function setVencedor($novo_vencedor)
	{
 		$this->vencedor = $novo_vencedor;
		return true;
	}
	//Perdedor
	function getPerdedor() {
        	return $this->perdedor;
	}

	function setPerdedor($novo_perdedor)
	{
 		$this->perdedor = $novo_perdedor;
		return true;
	}
	//Bolsa
	function getBolsa() {
        	return $this->bolsa;
	}

	function setBolsa($nova_bolsa)
	{
 		$this->bolsa = $nova_bolsa;
		return true;
	}
}


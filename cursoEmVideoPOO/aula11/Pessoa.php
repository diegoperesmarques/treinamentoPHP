<?php

abstract class Pessoa {
	private $nome;
	private $idade;
	private $sexo;
	
	public final function fazerAniversario() {
		$this->idade++;
	}
	
	function getNome() {
			return $this->nome;
	}
	
	function setNome($n){
			$this->nome = $n;
	}
	
	function getIdade() {
		return $this->idade;
	}
	
	function setIdade($i) {
		$this->idade = $i;
	}
	
	function getSexo() {
		return $this->sexo;
	}
	
	function setSexo($s) {
		$this->sexo = $s;
	}
}
?>

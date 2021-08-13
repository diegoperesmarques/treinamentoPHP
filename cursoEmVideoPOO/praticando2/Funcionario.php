<?php
abstract class Funcionario {
    private $nome;
    private $salario;
    private $turno;

    function getNome() {
        return $this->nome;
    }

    function setNome($n) {
        $this->nome = $n;
    }

    function getSalario() {
        return $this->salario;
    }

    function setSalario($s) {
        $this->salario = $s;
    }

    function getTurno() {
        return $this->turno;
    }

    function setTurno($t) {
        $this->turno = $t;
    }
}
?>
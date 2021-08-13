<?php
class Produto {
    private $nome;
    private $tipo;
    private $quantidade;

    function getNome() {
        return $this->nome;
    }

    function setNome($n) {
        $this->nome = $n;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setTipo($t) {
        $this->tipo = $t;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function setQuantidade($q) {
        $this->quantidade = $q;
    }

}
?>
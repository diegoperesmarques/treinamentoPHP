<?php
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    //Métodos internos
    function apresentar(){
        echo "<p>-----------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " .$this->getNome();
        echo "veio diretamente de " .$this->getNacionalidade();
        echo "tem " .$this->getIdade(). " anos e pesa " .$this->getPeso(). "KG";
        echo "<br> Ele tem " .$this->getVitorias(). " vitórias";
        echo $this->getDerrotas(). " derrotas e " .$this->getEmpates(). "empates";
        echo "</p>";
    }
    function status() {
        echo "<p>-----------------------</p>";
        echo "<p>" .$this->getNome(). " é um peso " .$this->getCategoria();
        echo "e já ganhou " .$this->getVitorias(). " vezes.";
        echo " perdeu " .$this->getDerrotas(). " vezes e ";
        echo " empatou " .$this->getEmpates(). " vezes!";
    }
    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Métodos especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($n){
        $this->nome = $n;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function setNacionalidade($n){
        $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($id){
        $this->idade = $id;
    }

    function getAltura(){
        return $this->altura;
    }

    function setAltura($a) {
        $this->altura = $a;
    }

    function getPeso(){
        return $this->peso;
    }

    function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }

    function getCategoria(){
        return $this->categoria;
    }

    function setCategoria(){
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    function getVitorias(){
        return $this->vitorias;
    }

    function setVitorias($vi) {
        $this->vitorias = $vi;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function setDerrotas($de) {
        $this->derrotas = $de;
    }

    function getEmpates(){
        return $this->empates;
    }

    function setEmpates($em){
        $this->empates = $em;
    }
}
?>
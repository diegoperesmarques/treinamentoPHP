<?php
require_once 'Lutador.php';
class Luta{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //Métodos públicos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor) {
                case 0: //Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>" .$this->desafiado->getNome(). " venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo "<p>" .$this->desafiante->getNome(). " venceu!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }

        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }


    //Métodos especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function setDesafiado($de) {
        $this->desafiado = $de;
    }

    function getDesafiante () {
        return $this->desafiante;
    }

    function setDesafiante($d) {
        $this->desafiante = $d;
    }

    function getRounds() {
        return $this->rounds;
    }

    function setRounds($r) {
        $this->rounds = $r;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setAprovada($a) {
        $this->aprovada = $a;
    }

}
?>
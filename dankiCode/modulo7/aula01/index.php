<?php
    class Pessoa {
        //Objeto pessoa

        private $nome = "Guilherme";
        private $idade = '23';
        private $peso = '70kg';

        public function crescer() {
            echo 'estou crescendo';
        }

        private function comer() {
            echo 'estou comando';
        }
    }

    //instanciar
    $pessoa = new Pessoa();
    $pessoa2 = new Pessoa();

    $pessoa->crescer();
?>
<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
      private $matr;
      private $curso;

      public function cancelarMatr() {
      	     echo "<p>Matrícula será cancelada</p>";
      }

      function getMatr() {
      	       return $this->matr;
      }

      function setMatr($m) {
      	       $this->matr = $m;
      }

      function getCurso() {
      	       return $this->curso;
      }

      function setCurso($c) {
      	       $this->curso = $c;
      }
}
?>
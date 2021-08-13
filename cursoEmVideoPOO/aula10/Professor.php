<?php
require_once 'Pessoa.php';
class Professor extends Pessoa {
      private $especialidade;
      private $salario;

      public function receberAumento($aum) {
      	     $this->salario += $aum;
      }

      function getEspecialidade() {
      	       return $this->especialidade;
      }
      function setEspecialidade($e) {
      	       $this->especialidade = $e;
      }

      function getSalario() {
      	       return $this->salario;
      }

      function setSalario($s) {
      	       $this->salario = $s;
      }
}
?>

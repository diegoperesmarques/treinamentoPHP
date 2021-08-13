<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
	private $bolsa;
	public function renovarBolsa () {
		echo "<p>Bolsa renovada</p>";
	}
	
	function getBolsa() {
		return $this->bolsa;
	}
	
	function setBolsa($b) {
		$this->bolsa = $b;
	}
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 992531771cf682d34f28da082de4b4546367e7a0

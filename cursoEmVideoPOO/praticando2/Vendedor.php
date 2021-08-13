<?php
require_once 'Funcionario.php';
class Vendedor extends Funcionario {
    function Vender() {
        echo "<p>Produto vendido com sucesso</p>";
    }
}
?>
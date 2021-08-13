<?php
require_once 'Funcionario.php';
class Estoquista extends Funcionario {
    function entrarProduto() {
        echo "<p>Entrada efeturada com sucesso</p>";
    }

    function sairProduto() {
        echo "<p>Saída realizada com sucesso!</p>";
    }
}
?>
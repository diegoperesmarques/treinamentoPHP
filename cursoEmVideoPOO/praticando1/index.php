<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estoque</title>
</head>
<body>
<?php
require_once 'Estoque.php';

$produto1 = new Estoque();
$produto1->adicionarProduto(5);
$produto1->totalProdutos();
$produto1->adicionarProduto(2);
$produto1->totalProdutos();
$produto1->removerProduto(20);
$produto1->totalProdutos();
$produto1->removerProduto(1);
$produto1->totalProdutos();

?>
</body>
</html>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','12345678');

$id = 3;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Novo',sobrenome='Nome' WHERE id = $id");

if ($sql->execute()) {
    echo 'Os dados foram cadastrados com sucesso!';
}
?>
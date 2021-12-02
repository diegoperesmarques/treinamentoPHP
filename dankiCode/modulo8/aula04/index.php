<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','12345678');

$id = 5;

$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = ?");


if($sql->execute(array($id))) {
    echo "Cliente deletado com sucesso!";
}

?>
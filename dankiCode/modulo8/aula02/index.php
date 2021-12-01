<?php

date_default_timezone_set('America/Sao_Paulo');


$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','12345678');

if (isset($_POST['acao'])) {
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$momento_registro = date('Y-m-d H:i:s');


$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

$sql->execute(array($nome, $sobrenome, $momento_registro));

echo 'Cliente inserido com sucesso!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando dados ao banco</title>
</head>
<body>
    <form action="#" method = "post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" required>

        <input type="submit" value="Enviar" name = "acao">
    </form>
</body>
</html>
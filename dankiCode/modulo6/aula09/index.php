<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Trabalhao com formulário</title>
</head>
<body>

<?php
/*
if (isset($_GET['acao'])) {
$nome = $_GET['nome'];
$email = $_GET['email'];

echo $nome;
echo '<br>';
echo $email;
}*/

/*if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    echo $nome;
    echo '<br>';
    echo $email;
    }*/


if (isset($_POST['acao'])) {
    foreach($_POST['valor'] as $key => $value) {
        echo $value;
        echo '<br />';
    }
}
?>
    <form action="#" method = "post">
        Nome: <input type="text" name="nome" id="nome"><br>
        Email: <input type="text" name="email" id="email"><br>

        <input type="checkbox" name="valor[]" value = "10"> 10
        <input type="checkbox" name="valor[]" value = "20"> 20
        <input type="checkbox" name="valor[]" value = "30"> 30
        <input type="checkbox" name="valor[]" value = "40"> 40
        <input type="submit" value="Enviar" name = "acao">
    </form>
</body>
</html>
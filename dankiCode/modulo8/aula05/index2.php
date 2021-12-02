<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','12345678');

$sql = $pdo->prepare("SELECT * FROM categorias");

$sql->execute();

$info = $sql->fetchAll();

foreach($info as $key => $value) {
    $categoria_id = $value['id'];
    echo "<h2>Exibindo posts de: {$value['nome']} </h2>";
    echo '<br>';

    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
    $sql->execute();
    $infoPosts = $sql->fetchAll();

    foreach($infoPosts as $key => $value) {
        echo 'Titulo: ' .$value['titulo'];
        echo '<br>';
        echo 'Noticia: ' .$value['conteudo'];
        echo '<hr>';
    }
}
?>
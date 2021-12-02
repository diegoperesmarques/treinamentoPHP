<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','12345678');

$sql = $pdo->prepare("SELECT * FROM posts");

$sql->execute();

$info = $sql->fetchAll();

/*
echo "<pre>";
print_r($info);
echo "</pre>";
*/


foreach ($info as $key => $value){
    echo 'Titulo: ' .$value['titulo'];
    echo '<br>';
    echo 'Noticia: ' .$value['conteudo'];
    echo '<hr>';
}


/*
for ($i=0; $i < count($info); $i++) {
    echo 'Titulo: ' .$info[$i]['titulo'];
    echo '<br>';
    echo 'Noticia: ' .$info[$i]['conteudo'];
    echo '<br>';
}

*/
?>
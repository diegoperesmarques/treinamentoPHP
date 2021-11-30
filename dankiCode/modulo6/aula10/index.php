<?php
session_start();
/*$_SESSION['nome'] = 'Guilherme';
$_SESSION['idade'] = 24;
*/

setcookie('nome', 'Guilherme', time() + (60*60*24), '/');

echo $_COOKIE['nome'];

/*
Não tem função para destruir um cookie 
Somente tem colocar um tempo negativo
*/

?>
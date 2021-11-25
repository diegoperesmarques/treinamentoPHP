<?php

$conteudo = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and 
scrambled it to make a type specimen book';

//Serve para recortar uma string.
echo substr($conteudo, 0, 20);

$nome = 'Diego Peres Marques';
$nomes = explode(' ', $nome);

echo '<br>';

print_r($nomes);

echo '<br>';

//Serve para juntar um array com um delimitador.
//No caso o espaco.
$nomes = implode(' ', $nomes);
echo $nomes;

echo '<br>';

//Serve para tirar todo o código HTML
$conteudo = '<h1>Guilherme</h1>Outra coisa';
echo strip_tags($conteudo);

echo '<br>';

echo htmlentities('<div></div>');

?>
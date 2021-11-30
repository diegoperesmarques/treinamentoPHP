<?php

//Serve para unir 1 ou mais arrays
$array1 = array("chave1" => "valor1", "chave2" => "valor2");
$array2 = array("chave3" => "valor3", "chave4" => "valor4");

$resultado = array_merge($array1, $array2);
print_r($resultado);

//array intersect key serve para retornar valores com a mesma 
//chave em 1 ou mais arrays.
$array3 = array("chave1" => "valor1", "chave2" => "valor2");
$array4 = array("chave1" => "outro valor", "chave3" => "valor3");
echo ("<br>");

print_r(array_intersect_key($array3, $array4));



//array map serve para aplicar uma função em todos os valores do array.
echo '<br>';
$arr = ['<p>Guilherme</p>', 'joao', '<h1>fabricio</h1>'];
print_r($arr);

echo '<br>';
print_r(array_map('strip_tags', $arr));
?>
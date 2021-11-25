<?php

//Array single.
$arr = ['guilherme', 'joão'];
$arr = array('guilherme', 'chave2' => 'joao');

$arr[0] = 'guilherme';
$arr[] = 'joao';

//Arrays multidimensionais 
//$arr2 = array(array('Guilherme', 'Joao'), array(23, 45));

//$arr2[0] = array('Guilherme', 'joao');

//$arr2[0] = array('chave1' => 'Guilherme', 'joao');

$arr2[0]['chave1'] = 'Guilherme1';

echo $arr2[0]['chave1'];


?>
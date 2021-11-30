<?php
require_once('Exemplo.php');

//Instânciad de objeto
$exemplo = new Exemplo();

//$exemplo1->var1 = 'Ola';
$exemplo->var2 = 'Guilherme';


$exemplo2 = new Exemplo;
$exemplo2->var2 = 'Joao';
$exemplo->setVar1('Guilherme');
echo $exemplo->pegaVar1();


echo $exemplo->var2;
echo '<br>';
echo $exemplo2->var2;

echo '<br>';

Exemplo::$var3 = 'Outra variável';
echo Exemplo::$var3;

Exemplo::metodoEstatico();
?>
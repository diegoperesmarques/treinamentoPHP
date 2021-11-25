<?php
$nome = 'Guilherme';

switch($nome) {
    case 'Guilherme':
        echo 'Minha variavel e guilherme';
        break;
    case 'Joao':
        echo 'Minha variavel e joao';
        break;
}

//Break para o loop for, while, do, foreache e switch;

for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo '<hr>';
    if ($i == 5){
        break;
    }
}

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo $i;
    echo '<hr>';
}
?>
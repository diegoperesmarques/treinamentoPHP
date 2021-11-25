<?php

function mostrarNome($nome, $idade) {
    echo '<h2>NOme é Guilherme</h2>' .$nome;
    echo '<hr>';
    echo "Idade: $idade";
}

function calculadora($numero1 = 10, $numero2 = 5) {
    echo ($numero1 + $numero2);
}

function verdade() {
    return true;
}

function retornarString() {
    return 'Guilherme';
}


mostrarNome('Joao', 20);

calculadora(20, 30);

echo retornarString();

?>
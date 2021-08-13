<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Farmacia</title>
</head>
<body>
<pre>
<?php
require_once 'Vendedor.php';
require_once 'Produto.php';
require_once 'Estoquista.php';

$vend = new Vendedor();
$vend->setNome("Maria");
$vend->setSalario(1000);
$vend->setTurno("Manhã");
print_r($vend);
$vend->vender();

?>
</pre>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Heranca 2</title>
</head>
<body>
<pre>
<?php
require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Bolsista.php';
/*$v1 = new Visitante();
<<<<<<< HEAD
=======

>>>>>>> 992531771cf682d34f28da082de4b4546367e7a0
$v1->setNome("Juvenal");
$v1->setIdade(33);
$v1->setSexo("M");
print_r($v1);
*/
$a1 = new Aluno();
$a1->setNome("Pedro");
$a1->setMatricula(111);
$a1->setIdade(16);
$a1->setSexo("M");
$a1->setCurso("Informática");
print_r($a1);

$b1 = new Bolsista();
$b1->setMatricula(1112);
$b1->setNome("Jubileu");
$b1->setBolsa(12.5);
$b1->setCurso("Administração");
$b1->setIdade(17);
$b1->pagarMensalidade();
print_r($b1);
?>
</pre>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 992531771cf682d34f28da082de4b4546367e7a0

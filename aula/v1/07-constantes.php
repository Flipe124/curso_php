<?php
// CONSTANTES
define("NOME", "Felipe oliveira");
define("IDADE", 24);
define("ALTURA", 1.92);
define("SOLTEIRO", true);
define("TIMES", ['Vasco', 'Flamengo', 'Santos']);

echo NOME;
echo "<hr>";

echo 'Meu nome é ' .NOME. ', minha idade é ' .IDADE. ' e minha alutra é ' .ALTURA;
echo "<hr>";
echo TIMES[2];// Apresenta no caso 'Santos'
?>
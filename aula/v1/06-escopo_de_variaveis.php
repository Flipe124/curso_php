<?php
// ESCOPO GLOBAL
$name = "Felipe Oliveira";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    // ESCOPO LOCAL
    global $name;// Definindo uma variável global
    echo $name;
}
exibeNome();
echo "<hr>";
/////////////////////////
function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
////////////////////////

function soma(){

    echo  $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

?>

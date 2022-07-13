<?php
//----------Escalares-----------
// String
$nome = "Olá mundo";
var_dump($nome);

echo "<br>";
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

// Int
$idade = 27;
echo "<br>";
if(is_string($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif   

echo "<hr>";

?>
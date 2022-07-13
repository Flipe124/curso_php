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
endif;   
echo "<hr>";

// Float
$altura = 1.7;
var_dump($altura);
if(is_int($altura)){
    echo "É um inteiro";
}else{
    echo "Não é um inteiro";
}
echo "<hr>";
// Boolean
$admin = false;
var_dump($admin);
if(is_int($altura)){
    echo "É um boolean";
}else{
    echo "Não é boolean";
}
echo "<hr>";
//----------Compostos-----------

$carros = array("Gol", "Uno", "Camaro", 12, 12.4, false);
var_dump($carros);
if(is_array($carros)){
 echo "É um array";
}else{
    echo "Não é um array";
}
echo "<hr>";
// Object
class Cliente{
    public $nome;
    public function atribuitNome($nome){
        $this.$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuitNome("Felipe");
var_dump($cliente);
if(is_object($carros)){
    echo "É um object";
   }else{
       echo "Não é um object";
   }
   echo "<hr>";

//----------Especiais-----------  
//NULL
$cidade = NULL;
var_dump($cidade);
// Resource


?>
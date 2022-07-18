<?php

$nomes = array("José", "Felipe", "Juca");

// is-array($array) = Verifica se uma determinada variável é um array
echo is_array($nomes);// Retorna 1 - true
echo "<hr>";

var_dump(is_array($nomes));// reetorna bool(true)
echo "<hr>";

if(is_array($nomes)){
    echo "É um array";
}else{
    echo "Não é um array";
};
echo "<hr>";

//in_array($valor, $array) = Verifica se um determinado valor existem em alguma posição do array
echo in_array("Felipe", $nomes);// Retorna 1 - True
echo "<hr>";

if(in_array("Felipe", $nomes)){
    echo "Existe no array";
}else{
    echo "Não existe no array";
};
echo "<hr>";

//array_keys($array)= Retorna um novo array com as chaves do array passado
$familia = array("tio"=> "José","Eu"=> "Felipe","Conheco"=> "Juca");

$keys = array_keys($familia);
print_r($keys);
echo "<hr>";
// Retorna:
// Array ( [0] => tio [1] => Eu [2] => Conheco )

//array_values($array) = Retorna um novo array com os valores do array passado

$values = array_values($familia);
print_r($values); 
echo "<hr>";
// Retorna
// Array ( [0] => José [1] => Felipe [2] => Juca )

//array_merge($array1, $array2) = agrega o conteúdo dos dois arrays

$carros = array("Camaro","Uno", "Cruze");
$motos = array("Ninja 3000", "Fan 150", "KTM duke 200");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
echo "<hr>";

//array_pop($array) = excluí a última posição do array

print_r($carros);// Array ( [0] => Camaro [1] => Uno [2] => Cruze )
echo "<hr>";
echo array_pop($carros);
print_r($carros);// Array ( [0] => Camaro [1] => Uno )
echo "<hr>";

//array_shift($array) = excluí a primeira posição do array
echo "Array shift <br>";
print_r($carros);
echo array_shift($carros);
print_r($carros);
echo "<hr>";

//array_unshift($array, "valor") = adiciona um ou mais elementos no início do array

$frutas = array("Uva", "Laranja", "Maça");

print_r($frutas);// Array ( [0] => Uva [1] => Laranja [2] => Maça )
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<hr>";

print_r($frutas);// Array ( [0] => Manga [1] => Acerola [2] => Morango [3] => Uva [4] => Laranja [5] => Maça )
echo "<hr>";

array_push($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);// Array ( [0] => Manga [1] => Acerola [2] => Morango [3] => Uva [4] => Laranja [5] => Maça [6] => Manga [7] => Acerola [8] => Morango )
echo "<hr>";

//array_combine($keys, $values) = Mescla os dois arrays

$keys = array("Campeão", "Vice", "Terceiro");
$values = Array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);

print_r($times);// Array ( [Campeão] => Vasco [Vice] => Flamengo [Terceiro] => Botafogo )
echo "<hr>";

//array_sum()= calcula a soma dos elementos de um array

$soma = array(5, 6, 10, 8);

echo array_sum($soma);// 29
echo "<hr>";

//explode ("/", "20/01/2001") = Transforma string em array
$date = "30/02/2018";

$novaData = explode("/", $date);

print_r($novaData);
echo "<hr>";

$frase = "Meu nome não é Jonny!";

$divisor = explode(" ", $frase);
print_r($divisor);
echo "<hr>";

//implode ("-", $array) = Transforma array em string

$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");

$juncao = implode(", ", $nomes);

echo $juncao;

?>
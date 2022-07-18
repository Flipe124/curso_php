<?php
// Arrays
$carros = array("Jeep", "BMW", "Toyota");
print_r($carros);// Para exibir o array
echo "<hr>";

echo $carros[1];// Exibe no caso BMW
echo "<hr>";

$carros = array(1=>"Jeep", 2=>"BMW", 3=>"Toyota");
echo $carros[1];// Exibe no caso Jeep
echo "<hr>";

$carros[] = "Supra";
$carros[10] = "Camaro";
print_r($carros);
echo "<hr>";


///////////////////////

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Dafra";
$motos[5] = "Suzuki";
print_r($motos);
echo "<hr>";

///////////////////////

$clientes = ["Felipe", "Juca", "Terencio"];
print_r($clientes);
echo "<hr>";

// COUNT
echo count($clientes);// No caso retorna 3
echo "<hr>";

$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach ($carros as $valor) {
   echo $valor."<br>";// Retorna todo o conteúdo do array carros
}
echo "<hr>";

// ARRAYS ASSOCIATIVOS
$pessoa = array("nome"=> "Felipe", "idade"=> 19, "altura"=> 1.93);
echo $pessoa["altura"];

$pessoa["Cidade"] = "Cianorte";
print_r($pessoa);
echo "<hr>";

foreach ($pessoa as $indice => $valor){
    echo $indice. " : " .$valor. "<br>";
}
echo "<hr>";

// ARRAYS MULTIDIMENSIONAIS
$times = array(
    "cariocas"=> array("Vasco", "Flamengo","Botafogo"),
    "paulistas"=> array("Santos", "São Paulo","Palmeiras"),
    "baianos"=> array("Bahia", "Vitoria","Outro")
);
echo $times["paulistas"][1];// Retorna São Paulo
echo "<hr>";

///////////////

$teams = array(
    "cariocas"=> array("Campeão"=> "Vasco", "Vice"=> "Flamengo","Terceiro"=> "Botafogo"),
    "paulistas"=> array("Santos", "São Paulo","Palmeiras"),
    "baianos"=> array("Bahia", "Vitoria","Outro")
);
 foreach($teams["cariocas"] as $indice => $valor){
    echo $indice. " : " .$valor. "<br>";
 }
// Retorna: 
// Campeão : Vasco
// Vice : Flamengo
// Terceiro : Botafogo
?>
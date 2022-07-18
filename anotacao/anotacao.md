# Dia 12/07/2022
### Como mostrar na tela
```
<?php
    echo "Meu nome é Felipe <br>";
    print "Minha idade é 19";
?> 
```
### Criação de variáveis e utilização
```
<?php
    $nome = "Felipe Oliveira";
    $idade = 19;
    $altura = 1.7;

    echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura";
?>
```

### Como deve ser a criação da variável
```
    $nome;
    $meunome;
    $meu_nome;
    // Nomes inválidos
    $12345nome;
    $carro*!@#;
    $ carro;
```
### Criar uma variável com o valor atribuído a ela anteriormente 
```
<?php
    $bebida = "Refrigerante";
    $$bebida = "Guaraná";

    echo $Refrigerante;
    echo "<br>";

    $destino = "Cidade";
    $$destino = "Ilhéus";

    echo $destino;

?>
``` 
#### Saída
```
    Guaraná
    Cidade
```
### Dissecar um variável 
```
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
    endif        
?>
```
# Dia 13/07/2022
# Dia 18/07/2022
### As são literais
- Então mesmo que tiver uma variável dentro dela não será interpretada.
EX:
```
echo 'meu nome é $nome';
```
- Para ser interpletada deve se utilizar o <.> para  concatenar
EX:
```
echo 'meu nome é '. $nome; 
```

#### Para utilizar ''
- É necessário utilizar \ antes das aspas.
EX:
```
echo 'Meu nome é'.$nome.'e minha idade é \'10\'';
```

### Escopo de variáveis
```
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

function soma(){ // Outra maneira de definir variáveis globais
    echo  $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
```
### Constantes
#### As constantes automaticamente são GLOBAIS.
```
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
```
- Por convenção normalmente se utiliza letras maiúsculas em seu nome;
- Primeiro parâmetro seu nome;
- Segundo parâmetro seu valor;

### Arrays
```
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
```
### Funções de Arrays
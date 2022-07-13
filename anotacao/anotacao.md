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
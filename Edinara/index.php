<?php

/*
Comando de saída -> echo "Olá Mundo !"

Variavéis com PHP
$nomeDaVariavel = 10;
$nomeDaVariavel1 = "10";
<br> -> Pular linha
*/

echo "Olá Mundo !<br>";
$nome = "Edinara";
//echo $nome;
echo "Olá, $nome. Seja bem Vinda !";
echo "<br>";

$num1 = 10;
$num2 = 20;

$resultado = $num1 + $num2;
echo "Resultado: $num1 + $num2 = $resultado";
echo "<br>";


$idade = 50;
if($idade == 18){
    echo "Maior de idade";
}else if($idade <= 18){
    echo "Menor de idade";
}else{
    echo "Você é velho";
}
echo "<br>";

$aux = 0;
while($aux <= 100){
    if($aux % 2 == 0){
        echo $aux." - É PAR<br>"; //O . é para concatenar uma variável com uma string
    }else{
        echo $aux." - É IMPAR<br>";
    }
    $aux++;
}
echo "<br>";

// Criando ARRAY
$numeros = [2, 1, 5, 8, 9, 11, 2, 45];
foreach($numeros as $numero){
    if($numero % 2 == 0){
        echo $numero." - é par <br>";
    }
}

$letras = ["a", "x", "b", "c", "a", "f"];
$letrasNaoRepetidas = array_unique($letras); // array_unique remove valores duplicados de um array
echo "<pre>";
var_dump($letrasNaoRepetidas); // var_dump usado para debugar o código
echo "</pre>";
?>

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

echo "<pre>";
var_dump(in_array('x', $letras));
echo "</pre>";

if (in_array('x', $letras)){
    echo "Tem a letra X no array";
}

echo "<br>";
echo count($letras); // Contar quantos elementos tem no array

//Array merge -> Junta dois ou mais arrays
$letras1 = ["a", "b", "c", "x"];
$letras2 = ["d", "e", "f"];
$letras3 = array_merge($letras1, $letras2);

echo "<pre>";
var_dump($letras3);
echo "</pre>";

array_pop($letras3); //remover o ultimo elemento
echo "<pre>";
var_dump($letras3);
echo "</pre>";

array_shift($letras3); // remover o primeiro elemento
echo "<pre>";
var_dump($letras3);
echo "</pre>";

asort($letras3); // deixar em ordem crescente 
echo "<pre>"; // retorno em booleano
var_dump($letras3);
echo "</pre>";

arsort($letras3); // deixar em ordem decrescente
echo "<pre>";
var_dump($letras3);
echo "</pre>";

// Funções String
$nome = "edinara";
echo strtoupper($nome);
echo "<br>";
echo mb_strtolower($nome); // mb reconhecer o acento e não dá erro
echo "<br>";
$frase = "sou um dev web";
echo ucfirst($frase); // primeira letra da string em caixa alta
echo "<br>";
echo ucwords($frase); // primeira letra de cada palavra em caixa alta

//strlen tamanho de uma string
echo "<br>";
echo strlen($frase);

echo "<br>";
echo str_word_count($frase); // contar as palavras em uma string 

echo "<br>";
echo strrev($nome);

echo "<br>";
$frasee = "Olá sou programador";
//str_replace ('quando encontrar', 'substitua por', $frase);
echo str_replace('programador', 'desenvolvedor', $frasee);

// date ('Y') - 2022
// date ('y') - 22
// date ('m') - 10
// date ('d') - 05

echo "<br>";
date_default_timezone_set('America/Fortaleza');
echo date('Y-m-d');
?>

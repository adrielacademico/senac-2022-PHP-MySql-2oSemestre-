<?php 

/*
1. Escreva um programa PHP 
que armazene o valor 20 em uma variável A 
e o valor 5 em uma variável B. 
Em seguida, some as variáveis A com B 
e exiba o resultado.
*/

$a = 20;
$b = 5;

$soma = $a + $b;

echo 'Atividade 01:' . PHP_EOL;
echo 'A soma de A com B é ' . $soma . PHP_EOL;
echo PHP_EOL;

/*
2. Escreva um programa PHP 
que armazene o valor 10 em uma variável A, 
o valor 2 em uma variável B 
e o valor 4 em uma variável C. 
A seguir, some as variáveis C com B, 
multiplique por A e exiba o resultado
*/

$a = 10;
$b = 2;
$c = 4;

//$soma_c_com_b = $c + $b;
//$resultado = $soma_c_com_b * $a;
$resultado = ($c + $b) * $a;

echo 'Atividade 02:' . PHP_EOL;
echo $resultado;
echo PHP_EOL;

/*
3. Escreva um programa PHP 
que armazene o valor 1000 em uma variável X 
e o valor 600 em uma variável Y. 
A seguir, subtraía Y de X e exiba o resultado.
*/

$x = 1000;
$y = 600;

$resultado = $x - $y;
$resultado2 = $y - $x;

echo 'Atividade 03:' . PHP_EOL;
echo $resultado;
echo $resultado2;
echo PHP_EOL;

/*
4. Escreva um programa PHP 
que armazene o valor 937.0 em uma variável “salarioMinimo”
e o valor 400.0 em uma variável “aumentoSalarial”. 
A seguir, some os dois e exiba 
o salário final como resultado.
*/

$salarioMinimo = 937.0;
$aumentoSalarial = 400.0;

echo 'Atividade 04:' . PHP_EOL;
echo $salarioMinimo + $aumentoSalarial;
echo PHP_EOL;

/*
5. Escreva um programa PHP 
que armazene o valor 100 em uma variável “laranjas” 
e o valor 5 em uma variável “cestas”. 
A seguir, exiba o resultado da divisão 
do total de laranjas pela quantidade de cestas
*/

$laranjas = 100;
$cestas = 5;

echo 'Atividade 05:' . PHP_EOL;
echo $laranjas / $cestas;
echo PHP_EOL;

/*
6. Escreva um programa PHP 
que armazene o valor 10 em uma variável “A” 
e o valor 20 em uma variável “B”. 
A seguir (utilizando apenas atribuições entre variáveis) 
troque os seus conteúdos fazendo com que 
o valor que está em “A” passe para “B” e vice-versa. 
Ao final, escrever os valores que ficaram armazenados nas variáveis.
*/


$a = 10;
$b = 20;
$auxiliar = 0;
//10
$auxiliar = $a;

$a = $b;
$b = $auxiliar;

echo 'Atividade 06:' . PHP_EOL;
echo "Valor de A : $a - Valor de B : $b";
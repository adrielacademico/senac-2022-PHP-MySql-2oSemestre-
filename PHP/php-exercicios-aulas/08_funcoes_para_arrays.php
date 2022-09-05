<?php

/**

 * 
 */

/**
 * is_array() - Verificar se uma variável é do tipo array.
 */
$variavel_simples = 0;
$variavel_do_tipo_array = [];

echo 'Função is_array()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;

var_dump(
    is_array($variavel_simples), 
    is_array($variavel_do_tipo_array)
);

/**
 * array_unshift() - Adicionar um novo elemento no início do array.
 * array_push() - Adicionar um novo elemento no final do array.
 */

$carros_antigos = ['Fusca', 'Brasilia', 'Chevete', 'Audi'];

echo PHP_EOL;
echo PHP_EOL . 'Função array_unshift() e array_push()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;

array_unshift($carros_antigos, 'Corcel');
array_push($carros_antigos, 'DelRey');
print_r($carros_antigos);

/**
 * end() - Recuperar o último elemento de um array.
*/
echo PHP_EOL;
echo PHP_EOL . 'Pegar último elemento end()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;
print_r(end($carros_antigos));

/**
 * sort() - Ordenar um array. Essa função é mais comum, porque também organiza os índices do array.
 * rsort() - Ordenar um array em ordem decrescente.
 * asort() - Ordenar um array em ordem crescente, ou seja, em ordem alfabética.
 */

echo PHP_EOL;
echo PHP_EOL . 'Ordenação: sort()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;

sort($carros_antigos);
print_r($carros_antigos);

echo PHP_EOL;
echo PHP_EOL . 'Ordenação: rsort()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;

rsort($carros_antigos);
print_r($carros_antigos);

echo PHP_EOL;
echo PHP_EOL . 'Ordenação: asort()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;

asort($carros_antigos);
print_r($carros_antigos);

/**
 * array_shift() - Remover o primeiro elemento de um array.
 * array_pop() - Remover o último elemento de um array.
 */

echo PHP_EOL;
 echo PHP_EOL . 'Função array_shift() e array_pop()' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;

array_shift($carros_antigos);
array_pop($carros_antigos);
print_r($carros_antigos);





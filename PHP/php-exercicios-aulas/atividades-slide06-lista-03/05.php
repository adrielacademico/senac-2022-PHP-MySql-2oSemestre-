<?php

/**
 * 5. Crie um programa PHP que 
 * recebe um array de inteiros predefinido 
 * e retorna as quantidades de elementos do array 
 * que são números negativos e números positivos.
 */

$numeros = [1,2,-9,0,6,8,-10,-78];
$quantidade_positivos = 0;
$quantidade_negativos = 0;

foreach($numeros as $numero){
    if($numero >= 0) {
        $quantidade_positivos++;
    } else {
        $quantidade_negativos++;
    }
}

echo "Números Positivos: $quantidade_positivos" . PHP_EOL;
echo "Números Negativos: $quantidade_negativos" . PHP_EOL;
die();

/**
 * Opção de solução guardando os valores:
 */

$continuar = true; // para ser utilzado como flag pelo laço de repetição.
$numeros = [];
$positivos = [];
$negativos = [];

while($continuar){
    echo PHP_EOL;
    $numero = trim(readline('Informe o número: '));
    $numeros[] = $numero;

    echo PHP_EOL;
    $opcao_usuario = trim(readline('Se deseja encerrar, digite 1: '));

    if($opcao_usuario == 1) {
        include('./05-teste-positivo-negativo.php');

        include('./05-exibir-positivos.php');
        include('./05-exibir-negativos.php');

        $continuar = false;
    }
}
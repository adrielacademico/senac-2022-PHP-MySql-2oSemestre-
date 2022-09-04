<?php

/**
 * 2. Faça um programa PHP que:
 * a. Leia os valores de COMPRIMENTO, LARGURA e ALTURA 
 * e apresente o valor do  * volume de uma caixa retangular. 
 * Utilize para o cálculo a fórmula 
 * VOLUME =  * COMPRIMENTO * LARGURA * ALTURA.
 */

echo 'Informe o comprimeto:' . PHP_EOL;
$comprimento = trim(fgets(STDIN));

echo 'Informe a largura:' . PHP_EOL;
$largura = trim(fgets(STDIN));

echo 'Informe a altura:' . PHP_EOL;
$altura = trim(fgets(STDIN));

$volume = $comprimento * $altura * $largura;

echo "O volume é $volume";
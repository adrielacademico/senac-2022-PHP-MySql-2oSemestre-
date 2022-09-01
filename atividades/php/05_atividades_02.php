<?php

/**
 * 1. Faça um programa PHP que: 
 * a. Leia o nome digitado pelo usuário;
 * b. Leia o sobrenome digitado pelo usuário;
 * c. Concatene (junte) o nome com o sobrenome e apresente o nome completo.
 */

 echo 'Digite o nome:' . PHP_EOL;
 $nome = trim(fgets(STDIN));

 echo 'Digite o sobrenome:' . PHP_EOL;
 $sobreNome = trim(fgets(STDIN));

 echo $nome . ' ' . $sobreNome;

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

/**
 * 3. Faça um programa PHP que: 
 * a. Obtenha o valor para a variável $ht (horas trabalhadas no mês);
 * b. Obtenha o valor para a variável $vt (valor hora trabalhada):
 * c. Obtenha o valor para a variável $pd (percentual de desconto);
 * d. Calcule o salário bruto => $sb = $ht * $vt;
 * e. Calcule o total de desconto => $td = ($pd/100)*$sb;
 * f. Calcule o salário líquido => $sl = $sb – $td;
 * g. Apresente os valores de: Horas trabalhadas, Salário Bruto, Desconto, Salário líquido.
 */

$ht = 10;
$vt = 10.0;
$pd = 5;
$sb = $ht * $vt;
$td = ($pd / 100) * $sb;
$sl = $sb - $td;
$exemplo = "Meu exemplo do var_dump";

var_dump($ht, $sb, $td, $sl, $exemplo);
echo PHP_EOL;
echo "$ht, $sb, $td, $sl, $exemplo";

/**
 * 4. Faça um programa PHP 
 * que leia os valores A, B e C. 
 * Mostre uma mensagem que informe 
 * se a soma de A com B 
 * é menor, maior ou igual a C.
 */

 $a = 20;
 $b = 20;
 $c = 30;

 $soma = $a + $b;

 /** modo 1 */
 if ($soma < $c) {
    echo "A soma de A com B é menor que C";
 }

 if ($soma > $c) {
    echo "A soma de A com B é maior que C";
 }

 if ($soma == $c) {
    echo "A soma de A com B é igual a C";
 }

 /** modo 2 - mais indicado */

 if ($soma < $c) {
    echo "A soma de A com B é menor que C";
 } elseif ($soma > $c) {
    echo "A soma de A com B é maior que C";
 } else {
    echo "A soma de A com B é igual a C";
 }

 /**
  * 5. Faça um algoritmo que 
  * leia um número na variável $num1 
  * e calcule se esse número é par ou ímpar
  */

echo 'Digite um número:' . PHP_EOL;
$num1 = trim(fgets(STDIN));

if ($num1 % 2 == 0) {
    echo "$num1 é par."; 
} else {
    echo "$num1 é ímpar."; 
}
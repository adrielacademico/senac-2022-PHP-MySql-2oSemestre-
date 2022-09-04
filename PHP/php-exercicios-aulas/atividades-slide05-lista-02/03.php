<?php
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
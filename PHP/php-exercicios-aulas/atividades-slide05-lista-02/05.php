<?php

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
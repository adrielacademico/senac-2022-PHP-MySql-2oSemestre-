<?php

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
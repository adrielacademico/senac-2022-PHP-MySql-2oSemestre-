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
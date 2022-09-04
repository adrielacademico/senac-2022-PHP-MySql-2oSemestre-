<?php

/**
 * 2. Faça um programa PHP que 
 * devolve um array de números lidos do teclado.
 */

 $continuar = true; // para ser utilzado como flag pelo laço de repetição.
 $numeros = [];

 while($continuar){
    //echo 'Digite um número: ' . PHP_EOL;
    //$num = trim(fgets(STDIN));
    $num = trim(readline('Digite um número:'));
    $numeros[] = $num;

    echo 'Se deseja encerrar, digite 1: ' . PHP_EOL;
    $opcao_usuario = trim(fgets(STDIN));

    if($opcao_usuario == 1) {
        $continuar = false;
        var_dump($numeros);
        //break; // caso não queira setar $continuar para false.
    } 
 }
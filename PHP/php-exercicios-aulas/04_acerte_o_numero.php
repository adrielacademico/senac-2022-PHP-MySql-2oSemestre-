<?php

/**
 * 1. armazenar um número secreto.
 * 2. pedir ao usuário que digite um número no teclado.
 * 3. comparar SE o número dado é igual ao número secreto.
 *  true => se igual, exibir a mensagem de sucesso e sair do programa.
 *  false => senão, exibir a mensagem 'você errou'.
 * 4. enquanto não acertar, repetir o processo.
 */

 $numero_secreto = 10;
 $teclado = null;

 while ($teclado != $numero_secreto) {

    echo "Digite um número:";
    $teclado = fgets(STDIN);

    if ($teclado == $numero_secreto) {
        echo 'sucesso!' . PHP_EOL;
    } else {
        echo 'você errou!!! Tente novamente.' . PHP_EOL;
    }
}

echo $teclado;
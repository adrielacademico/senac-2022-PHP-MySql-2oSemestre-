<?php

/**
 * 1. Utilizando o seu conhecimento em laços de repetição, 
 * crie dois arrays: 
 * listaCrescente: com uma sequência de inteiros de 0 a 100; 
 * listaDecrescente: com uma sequência de inteiros de 100 para 0;
 * Ao final, faça a impressão de cada array no terminal;
*/

$listaCrescente = [];
$listaDecrescente = [];

for($i = 0; $i <= 5; $i++) { // 0 -> 5
    $listaCrescente[] = $i;
}

for($i = 5; $i >= 0; $i--) { // 5 -> 0
    $listaDecrescente[] = $i;
    //listaDecrescente[0] => 5, 1ª loop 
    //listaDecrescente[1] => 4, 2ª loop
    //listaDecrescente[0] => 3,... 1ª loop ... 
    echo $i; //imprime i valor apenas para fins didáticos.
    sleep(1); //aguarda 1 segundo antes de iniciar o próximo loop.
}

$listaDecrescente = array_reverse($listaCrescente);

var_dump($listaCrescente, $listaDecrescente);
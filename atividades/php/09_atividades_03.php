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

// for($i = 0; $i <= 5; $i++) { // 0 -> 5
//     $listaCrescente[] = $i;
// }

// for($i = 5; $i >= 0; $i--) { // 5 -> 0
//     $listaDecrescente[] = $i;
//     //listaDecrescente[0] => 5, 1ª loop 
//     //listaDecrescente[1] => 4, 2ª loop
//     //listaDecrescente[0] => 3,... 1ª loop ... 
//     //echo $i;
//     //sleep(1);
// }

//$listaDecrescente = array_reverse($listaCrescente);

//var_dump($listaCrescente, $listaDecrescente);

/**
 * 2. Faça um programa PHP que 
 * devolve um array de números lidos do teclado.
 */

 $continuar = true;
 $numeros = [];

//  while($continuar){
//     //echo 'Digite um número: ' . PHP_EOL;
//     //$num = trim(fgets(STDIN));
//     $num = trim(readline('Digite um número:'));
//     $numeros[] = $num;

//     echo 'Se deseja encerrar, digite 1: ' . PHP_EOL;
//     $opcao_usuario = trim(fgets(STDIN));

//     if($opcao_usuario == 1) {
//         $continuar = false;
//         var_dump($numeros);
//         //break; // caso não queira setar $continuar para false.
//     } 
//  }

 /**
  * 3. Percorra o array a seguir e exiba a mensagem indicando 
  * o nome e a posição deste quando for localizado no array: 
  * [“João”, “José”, “Maria”, “Severino”, “Antônio”, “Marcos”, 
  * “Manoel”, “Filipe”, “André”, “Paulo”]; 
  * Use a linha de comando para digitar o nome;
  */

$nomes = ['João', 'José', 'Maria', 'Severino', 'Antônio', 
'Marcos', 'Manoel', 'Filipe', 'André', 'Paulo'];

$continuar = true;

 while($continuar){
    $nome_procurado = trim(readline('Digite um nome:'));
    $tamanho_do_array = count($nomes);

    for($i = 0; $i < $tamanho_do_array; $i++) {
        if(strtoupper($nome_procurado) == strtoupper($nomes[$i])) {
            echo "Nome: $nomes[$i] - Posição: $i" . PHP_EOL;
            break;
        } 
    }

    echo PHP_EOL;
    $opcao_usuario = trim(readline('Se deseja encerrar, digite 1: '));

    if($opcao_usuario == 1) {
        break;
    } 
 }
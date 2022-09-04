<?php

 /**
  * 3. Percorra o array a seguir e exiba a mensagem indicando 
  * o nome e a posição deste quando for localizado no array: 
  * [“João”, “José”, “Maria”, “Severino”, “Antônio”, “Marcos”, 
  * “Manoel”, “Filipe”, “André”, “Paulo”]; 
  * Use a linha de comando para digitar o nome;
  */

$nomes = ['João', 'José', 'Maria', 'Severino', 'Antônio', 'Marcos', 'Manoel', 'Filipe', 'André', 'Paulo'];

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
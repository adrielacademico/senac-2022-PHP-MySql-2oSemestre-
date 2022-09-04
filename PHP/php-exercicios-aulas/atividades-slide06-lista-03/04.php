<?php

/**
 * 4. Crie um array chamado “alunosDeMinhaTurma” e, 
 * com o recurso da função fgets(STDIN) ou readline(),
 * adicione os nomes de todos os seus colegas de sala. 
 * Ao final, faça a impressão dos nomes. 
 * (Será necessário usar um laço de repetição).
 */

$continuar = true; // para ser utilzado como flag pelo laço de repetição.
$alunosDeMinhaTurma = [];

while($continuar){
    echo PHP_EOL;
    $nome = trim(readline('Informe o nome do aluno: '));
    $alunosDeMinhaTurma[] = $nome;

    echo PHP_EOL;
    $opcao_usuario = trim(readline('Se deseja encerrar, digite 1: '));

    if($opcao_usuario == 1) {
        $continuar = false;
        print_r($alunosDeMinhaTurma);
        //break; // caso não queira setar $continuar para false.
    }
}
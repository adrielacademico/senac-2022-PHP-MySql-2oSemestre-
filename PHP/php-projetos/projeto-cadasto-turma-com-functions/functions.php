<?php

function limparTela() 
{
    for($i = 0; $i <= 50; $i++) {
        echo PHP_EOL; // apenas adiciona um linha em branco.
    }
}

function mensagemInicial()
{
    echo '___________________________________________________' . PHP_EOL;
    echo '|                                                 |' . PHP_EOL;
    echo "|                   PHP e MySQL                   |" . PHP_EOL;
    echo "|  Bem vindo ao matriculador de alunos do SENAC:  |" . PHP_EOL;
    echo '|_________________________________________________|' . PHP_EOL;
}

function menu()
{
    echo PHP_EOL;
    echo 'MENU - escolha uma das opções a seguir:' . PHP_EOL;
    echo '--------------------------------------------' . PHP_EOL;
    echo '[1] Adicionar novo aluno' . PHP_EOL;
    echo '[2] Imprimir listar dos alunos cadastrados' . PHP_EOL;
    echo '[3] Remover aluno posição 0 do array' . PHP_EOL;
    echo '[4] Sair do programa' . PHP_EOL;
    echo PHP_EOL;

    return trim(fgets(STDIN));
}

function mensagemGenerica(string $mensagem_do_programador)
{
    echo PHP_EOL; // apenas adiciona um linha em branco.
    echo ":: $mensagem_do_programador" . PHP_EOL;
    echo '-----------------------------------------------------------' . PHP_EOL;
}

function listarAlunos(array $turma_de_alunos)
{
    foreach($turma_de_alunos as $aluno) {
        echo 'Nome:' . $aluno['nome'] . PHP_EOL;
        echo 'Idade:' . $aluno['idade'] . PHP_EOL;
        echo '------------------------------------------------------' . PHP_EOL;
    }
}
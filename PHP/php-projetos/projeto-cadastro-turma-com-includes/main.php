<?php

$turma = [];
$aluno = [];

$sair = false;

include('./_mensagem-inicial.php');

while(!$sair) {

    include('./_menu-inicial.php');

    switch($opcao_usuario) {
        case 1 :
            include('./_cadastrar-novo-aluno.php');
            break;
        case 2 :
            include('./_imprimir-lista-de-alunos.php');
            break;
        case 3 :
            include('./_sair-do-programa.php');
            break;
        default :
            include('./_limpar-tela.php');
            echo 'Opção inválida. Por favor, tente novamente.' . PHP_EOL;
            include('./_voltar-ao-menu-inicial.php');
    }

    echo PHP_EOL;
}
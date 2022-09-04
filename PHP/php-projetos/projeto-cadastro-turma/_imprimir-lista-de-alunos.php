<?php

include('./_limpar-tela.php');

// var_dump("ops"); die();

if(count($turma) > 0) {

    $tamanho_da_turma = count($turma);

    echo PHP_EOL;
    echo ":: A turma possui $tamanho_da_turma aluno(s) matriculados:" . PHP_EOL;
    echo '--------------------------------------------------------' . PHP_EOL;

    foreach($turma as $aluno) {
        echo 'Nome:' . $aluno['nome'] . PHP_EOL;
        echo 'Idade:' . $aluno['idade'] . PHP_EOL;
        echo '------------------------------------------------------' . PHP_EOL;
    }

} else {
    echo '>> Array vazio - Não há alunos cadastrados no sistema.' . PHP_EOL ;
}

include('./_voltar-ao-menu-inicial.php');

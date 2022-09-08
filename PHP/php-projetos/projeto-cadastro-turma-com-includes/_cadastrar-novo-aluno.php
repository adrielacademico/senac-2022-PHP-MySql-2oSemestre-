<?php

include('./_limpar-tela.php');

echo PHP_EOL;
echo ":: Para cadastrar um novo aluno, informe os dados a seguir:" . PHP_EOL;
echo '-----------------------------------------------------------' . PHP_EOL;

echo  PHP_EOL;
$nome_aluno = trim(readline("Informe o nome: "));
$idade_aluno = trim(readline("Informe a idade: "));

$aluno['nome'] = $nome_aluno;
$aluno['idade'] = $idade_aluno;

$tamanho_da_turma_antes_da_adicao = count($turma);

$turma[] = $aluno; // salvando o novo aluno no array.

$tamanho_da_turma_depois_da_adicao = count($turma);

echo PHP_EOL . ">> Aguarde, salvando dados";

for($i = 0; $i <= 5; $i++) {
    sleep(1);
    echo ".";
}

echo PHP_EOL;

if($tamanho_da_turma_antes_da_adicao < $tamanho_da_turma_depois_da_adicao) {
    echo PHP_EOL . ">> Aluno cadastrado com sucesso!:" . PHP_EOL;
}

include('./_voltar-ao-menu-inicial.php');
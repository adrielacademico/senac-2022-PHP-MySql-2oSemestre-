<?php

require_once('./src/Turma.php');
require_once('./src/Output.php');
require_once('./src/CadastradorDeAlunos.php');
require_once('./src/ListaAlunosDeUmaTurma.php');
require_once('./src/ExcluirAluno.php');
require_once('./src/FabricaDeAlunos.php');

$output = new Output();
$turma = new Turma();

if(count($turma->getAlunos()) == 0) {
    $fabrica = new FabricaDeAlunos($turma, 5);
    $turma = $fabrica->run();
}

$continuar_loop = true; // iniciando a variável que será testada no while para loop do programa.

$output->limparTela();
$output->bannerInicial();
$output->teclaEnterContinue();

while($continuar_loop) { // enquanto a variável $continuar_loop for verdadeira, faça loop. Se false, saia do loop.

    $output->limparTela();
    $opcao_usuario = $output->menu();

    switch($opcao_usuario) {
        case 1 : //cadastrar aluno
            $cadastrador = new CadastradorDeAlunos();
            $turma = $cadastrador->cadastrar($turma);
            break;

        case 2 : //listar alunos
            $listagem = new ListaAlunosDeUmaTurma();
            $listagem->listar($turma);
            break;

        case 3 :
            $excluidor = new ExcluirAluno();
            $excluidor->delete($turma);
            break;

        case 4 :
            $continuar_loop = false; // setando a variável que será testada no while para loop do programa para false.
            $output->sairDoSistema();
            break;

        default :
            $output->limparTela();
            $output->mensagem('Opção inválida. Por favor, tente novamente.');
            $output->teclaEnterContinue();
    }

    echo PHP_EOL; // apenas adiciona um linha em branco.
}
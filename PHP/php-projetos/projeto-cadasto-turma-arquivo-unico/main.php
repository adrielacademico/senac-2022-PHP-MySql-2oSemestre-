<?php

$turma = [];
$aluno = [];

$continuar_loop = true; // iniciando a variável que será testada no while para loop do programa.

//Limpando a tela
for($i = 0; $i <= 50; $i++) {
    echo PHP_EOL;
}

echo '___________________________________________________' . PHP_EOL;
echo '|                                                 |' . PHP_EOL;
echo "|                   PHP e MySQL                   |" . PHP_EOL;
echo "|  Bem vindo ao matriculador de alunos do SENAC:  |" . PHP_EOL;
echo '|_________________________________________________|' . PHP_EOL;

echo PHP_EOL;
readline(':: Aperte a tecla ENTER para acessar ao menu inicial.');

while($continuar_loop) { // enquanto a variável $continuar_loop for verdadeira, faça loop. Se false, saia do loop.

    //Limpando a tela
    for($i = 0; $i <= 50; $i++) {
        echo PHP_EOL;
    }

    echo PHP_EOL;
    echo 'MENU - escolha uma das opções a seguir:' . PHP_EOL;
    echo '--------------------------------------------' . PHP_EOL;
    echo '[1] Adicionar novo aluno' . PHP_EOL;
    echo '[2] Imprimir listar dos alunos cadastrados' . PHP_EOL;
    echo '[3] Sair do programa' . PHP_EOL;
    echo PHP_EOL;
    $opcao_usuario = trim(fgets(STDIN));

    switch($opcao_usuario) {
        case 1 :

            //Limpando a tela
            for($i = 0; $i <= 50; $i++) {
                echo PHP_EOL; // aapenas diciona um linha. em branco 
            }

            //iniciando o cadastro do aluno
            echo PHP_EOL; // apenas adiciona um linha em branco.
            echo ":: Para cadastrar um novo aluno, informe os dados a seguir:" . PHP_EOL;
            echo '-----------------------------------------------------------' . PHP_EOL;

            echo  PHP_EOL; // apenas adiciona um linha em branco.
            $nome_aluno = trim(readline("Informe o nome: "));
            $idade_aluno = trim(readline("Informe a idade: "));

            $aluno['nome'] = $nome_aluno;
            $aluno['idade'] = $idade_aluno;

            //contando o tamanho do array turma antes de adicionar um novo aluno.
            $tamanho_da_turma_antes_da_adicao = count($turma);

            $turma[] = $aluno; // salvando o novo aluno no array.

            //contando o tamanho do array turma depois de adicionar um novo aluno.
            $tamanho_da_turma_depois_da_adicao = count($turma);

            echo PHP_EOL . ">> Aguarde, salvando dados";

            for($i = 0; $i <= 5; $i++) {
                sleep(1);
                echo ".";
            }

            echo PHP_EOL; // apenas adiciona um linha em branco.

            /** 
             * verifica se o tamanho do array da turma está maior após a inclusão de um novo aluno.
             * Se estiver maior, significa que um novo aluno foi adicionado ao array.
             * Se não, nenhum aluno adicionado.
            */
            if($tamanho_da_turma_antes_da_adicao < $tamanho_da_turma_depois_da_adicao) {
                echo PHP_EOL . ">> Aluno cadastrado com sucesso!:" . PHP_EOL;
            } else {
                echo PHP_EOL . ">> Nenhum novo aluno foi adicionado." . PHP_EOL; 
            }

            //Solicitando apertar a tecla ENTER para voltar ao início do loop.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            readline(':: Aperte a tecla ENTER para voltar ao menu inicial.');

            break;

        case 2 :

            //Limpando a tela
            for($i = 0; $i <= 50; $i++) {
                echo PHP_EOL; // apenas adiciona um linha em branco.
            }

            /**
             * Verifica se o array $turma está vazio, 
             * ou seja, se ele contém um número de elementos maior que zero:
             * Se Sim, imprime.
             * Se não, exibe a mensagem Array vazio.
             */
            if(count($turma) > 0) {

                $tamanho_da_turma = count($turma);
            
                echo PHP_EOL; // apenas adiciona um linha em branco.
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
            
            //Solicitando apertar a tecla ENTER para voltar ao início do loop.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            readline(':: Aperte a tecla ENTER para voltar ao menu inicial.');

            break;

        case 3 :

            //Limpando a tela
            for($i = 0; $i <= 50; $i++) {
                echo PHP_EOL; // apenas adiciona um linha em branco.
            }
            
            $continuar_loop = false; // setando a variável que será testada no while para loop do programa para false.

            //exibe uma mensagem de finalização do programa.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            echo ":: Obrigado por utilizar o nosso sistema. Saindo em...";
            for($i = 5; $i >= 0; $i--) {
                echo "$i, ";
                sleep(1);
            }
            echo "...fui!!! :) " . PHP_EOL;
            
            break;

        default :
        
            //Limpando a tela
            for($i = 0; $i <= 50; $i++) {
                echo PHP_EOL; // apenas adiciona um linha em branco.
            }
        
            echo 'Opção inválida. Por favor, tente novamente.' . PHP_EOL;

            //Solicitando apertar a tecla ENTER para voltar ao início do loop.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            readline(':: Aperte a tecla ENTER para voltar ao menu inicial.');
    }

    echo PHP_EOL; // apenas adiciona um linha em branco.
}
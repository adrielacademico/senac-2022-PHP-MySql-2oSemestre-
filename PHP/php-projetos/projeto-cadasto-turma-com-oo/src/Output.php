<?php

class Output
{
    public function limparTela() : void
    {
        for($i = 0; $i <= 50; $i++) {
            echo PHP_EOL;
        }
    }

    public function bannerInicial() : void
    {
        echo '___________________________________________________' . PHP_EOL;
        echo '|                                                 |' . PHP_EOL;
        echo "|                   PHP e MySQL                   |" . PHP_EOL;
        echo "|  Bem vindo ao matriculador de alunos do SENAC:  |" . PHP_EOL;
        echo '|_________________________________________________|' . PHP_EOL;
    }

    public function teclaEnterContinue() : void
    {
        echo PHP_EOL;
        readline(':: Aperte a tecla ENTER para acessar ao menu inicial.');
    }

    public function menu() : int
    {
        echo PHP_EOL;
        echo 'MENU - escolha uma das opções a seguir:' . PHP_EOL;
        echo '--------------------------------------------' . PHP_EOL;
        echo '[1] Adicionar novo aluno' . PHP_EOL;
        echo '[2] Imprimir listar dos alunos cadastrados' . PHP_EOL;
        echo '[3] Excluir Aluno' . PHP_EOL;
        echo '[4] Sair do programa' . PHP_EOL;
        echo PHP_EOL;
        return trim(fgets(STDIN));
    }

    public function mensagem(string $msn)
    {
        echo PHP_EOL;
        echo ":: $msn" . PHP_EOL;
        echo '-----------------------------------------------------------' . PHP_EOL;
    }

    public function prompt(string $texto_informativo)
    {
        $entrada_do_usuario = trim(readline($texto_informativo));

        return $entrada_do_usuario;
    }

    public function loading(int $segundos)
    {
        echo PHP_EOL . ">> Aguarde, processando sua solicitação.";

        for($i = 0; $i <= $segundos; $i++) {
            sleep(1);
            echo ".";
        }

        echo PHP_EOL;
    }

    public function sairDoSistema()
    {
        $this->limparTela();
    
        echo PHP_EOL;
        echo ":: Obrigado por utilizar o nosso sistema. Saindo em...";
        for($i = 5; $i >= 0; $i--) {
            echo "$i, ";
            sleep(1);
        }
        echo "...fui!!! :) " . PHP_EOL;
    }
}
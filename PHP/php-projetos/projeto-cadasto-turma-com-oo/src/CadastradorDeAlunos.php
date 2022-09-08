<?php

require_once(__DIR__.'./Output.php');
require_once(__DIR__.'../Turma.php');
require_once(__DIR__.'../Aluno.php');

class CadastradorDeAlunos 
{
    private Output $output;
    private Aluno $aluno;

    public function cadastrar(Turma $turma) : Turma
    {
        $this->output = new Output();

        $this->output->limparTela();
        $this->output->mensagem('Para cadastrar um novo aluno, informe os dados a seguir:');

        echo  PHP_EOL;

        $this->aluno = new Aluno();

        $this->aluno->id        = $this->output->prompt("Informe o id: ");
        $this->aluno->nome      = $this->output->prompt("Informe o nome: ");
        $this->aluno->matricula = $this->output->prompt("Informe a matrícula: ");

        //contando o tamanho do array turma antes de adicionar um novo aluno.
        $tamanho_antes = sizeof($turma->getAlunos());

        $turma->setAluno($this->aluno); // salvando o novo aluno.

        //contando o tamanho do array turma depois de adicionar um novo aluno.
        $tamanho_depois = count($turma->getAlunos());

        $this->output->loading(3);

        $resultado = $this->cadastroConcluido($tamanho_antes, $tamanho_depois);

        if($resultado) {
            $this->output->mensagem('>> Aluno cadastrado com sucesso!');
        } else {
            $this->output->mensagem('>> Nenhum novo aluno foi adicionado.');
        }

        $this->output->teclaEnterContinue();

        return $turma;
    }

    private function cadastroConcluido(int $turma_antes, int $turma_depois)
    {
        return $turma_antes < $turma_depois;
    }

}
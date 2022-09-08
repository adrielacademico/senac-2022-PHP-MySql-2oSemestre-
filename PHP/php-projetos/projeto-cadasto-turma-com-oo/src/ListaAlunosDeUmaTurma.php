<?php

require_once(__DIR__.'./Output.php');

class ListaAlunosDeUmaTurma 
{
    private Output $out;

    public function listar(Turma $turma)
    {
        $this->out = new Output();

        $this->out->limparTela();

        $tamanho_da_turma = count($turma->getAlunos());

        if($tamanho_da_turma > 0) {

            $this->out->mensagem("A turma possui $tamanho_da_turma aluno(s) matriculados");
        
            foreach($turma->getAlunos() as $aluno) {
                echo 'ID        :' . $aluno->id         . PHP_EOL;
                echo 'Nome      :' . $aluno->nome       . PHP_EOL;
                echo 'Matrícula :' . $aluno->matricula  . PHP_EOL;
                echo '------------------------------------------------------' . PHP_EOL;
            }
        
        } else {
            
            $this->out->mensagem(">> Array vazio - Não há alunos cadastrados no sistema.");
        }
        
        $this->out->teclaEnterContinue();
    }
}
<?php

require_once(__DIR__.'./Output.php');

class ExcluirAluno 
{
    private Output $out;

    public function delete(Turma $turma) : Turma
    {
        $this->out = new Output();

        $this->out->limparTela();

        $aluno_id = $this->out->prompt('Informe o Id do Aluno a ser deletado:');

        $tamanho_da_turma = count($turma->getAlunos());

        if($tamanho_da_turma > 0) {
        
            for($i = 0; $i < count($turma->getAlunos()); $i++) {
                if($turma->getAlunos()[$i]->id == $aluno_id) {
                    $turma->excluirAluno($i);
                }
            }

            $this->out->loading(2);

            $this->out->mensagem(">> Aluno de ID $aluno_id excluído com sucesso!");
        
        } else {
            
            $this->out->mensagem(">> Array vazio - Não há alunos cadastrados no sistema.");
        }
        
        $this->out->teclaEnterContinue();

        return $turma;
    }
}
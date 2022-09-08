<?php

class FabricaDeAlunos
{
    private Turma $turma;
    private int $qtde_alunos;

    function __construct(Turma $turma, int $qtde_alunos)
    {
        $this->turma = $turma;
        $this->qtde_alunos = $qtde_alunos;
    }

    public function run() : Turma
    {
        for($i = 1; $i <= $this->qtde_alunos; $i++) {
            $this->aluno = new Aluno();
            $this->aluno->id        = $i;
            $this->aluno->nome      = "João Dinâmico " . $i;
            $this->aluno->matricula = $i . $i + 2 . $i + 3;

            $this->turma->setAluno($this->aluno);
        }

        return  $this->turma;
    }
}
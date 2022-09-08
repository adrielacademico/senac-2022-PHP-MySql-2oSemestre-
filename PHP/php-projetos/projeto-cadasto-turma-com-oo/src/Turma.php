<?php

class Turma 
{
    public string $nome;
    public array $alunos = [];

    public function setNome(int $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setAluno(Aluno $aluno)
    {
        array_push($this->alunos, $aluno);
    }

    public function getAlunos()
    {
        return $this->alunos;
    }

    public function excluirAluno(int $indice)
    {
        unset($this->getAlunos()[$indice]);

        var_dump($this->getAlunos()); die();

        return $this->getAlunos();
    }
}
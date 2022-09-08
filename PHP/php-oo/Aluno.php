<?php

class Aluno
{
    public string $nome;
    public int $matricula;

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setMatricula(int $matricula)
    {
        $this->matricula = $matricula;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

}
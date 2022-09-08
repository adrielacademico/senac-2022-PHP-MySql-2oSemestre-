<?php

class Aluno
{
    public int $id;
    public string $nome;
    public int $matricula;

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

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
<?php

/**
 * 1. Crie uma classe ‘Pessoa’ em PHP 
 * com as seguintes características: 
 * a. Conter os os atributos/propriedades: 
 *    id, nome, cpf, data_nascimento e endereço; 
 * b. Caso necessário, crie os métodos getters e setters 
 * para os atributos da classe;
 */

 class Pessoa 
 {
    private $id; 
    private $nome; 
    private $cpf; 
    private $data_nascimento; 
    private $endereco;

    /**
     * Undocumented function
     *
     * @param integer $id
     * @param string $nome
     * @param string $cpf
     * @param string $data_nascimento
     * @param string $endereco
     */
    function __construct(int $id, string $nome, string $cpf, string $data_nascimento, string $endereco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
        $this->endereco = $endereco;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

 }
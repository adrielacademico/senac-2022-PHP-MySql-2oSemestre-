<?php

$turma = [
    [ 
        'nome' => 'Joao da sIlva',
        'idade' => 18,
        'rg' => '5556666',
        'cpf' => '010.200.256-89',
        'endereco' => ['rua' => 'do php', 'numero' => 10]
    ]
];

//var_dump($turma[0]['endereco']['rua']);

require_once ('./_includes/_for-include.php');

//var_dump($turma[0]['nome'], $turma[0]['idade'], $turma[0]['rg'], $turma[0]['cpf']);

/**
 * Resultado:
    string(13) "Joao da sIlva" //nome
    int(18) // idade
    string(7) "5556666" // rg
    string(14) "010.200.256-89" //cpf
 */


die();
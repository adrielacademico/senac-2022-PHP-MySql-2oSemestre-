<?php

require_once('./Pessoa.php');

$daniel = new Pessoa(
    1, 'Daniel', '123.456.789.10', '10/10/2010', 'Rua teste'
);

$joao = new Pessoa(
    2, 'João', '789.654.321.10', '20/10/2010', 'Rua teste 2'
);

$maria = new Pessoa(
    3, 'Maria', '888.999.666.11', '30/10/2010', 'Rua teste 3'
);

$listaDePessoas = [$daniel, $joao, $maria];

foreach($listaDePessoas as $pessoa){
    echo '----------------------------------------------' . PHP_EOL;
    echo $pessoa->getId() . PHP_EOL;
    echo $pessoa->getNome() . PHP_EOL;
    echo $pessoa->getCpf() . PHP_EOL;
    echo $pessoa->getDataNascimento() . PHP_EOL;
    echo $pessoa->getEndereco() . PHP_EOL;
}

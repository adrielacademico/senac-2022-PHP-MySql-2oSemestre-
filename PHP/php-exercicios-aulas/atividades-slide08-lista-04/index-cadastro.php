<?php

require_once('./Pessoa.php');

$continuar = true;
$listaDePessoas = [];

while($continuar)
{
    $nome = trim(readline('Informe o nome')) . PHP_EOL;
    $cpf = trim(readline('Informe o cpf')) . PHP_EOL;
    $data = trim(readline('Informe o data')) . PHP_EOL;
    $endereco = trim(readline('Informe o endereco')) . PHP_EOL;

    $pessoa = new Pessoa(1, $nome, $cpf, $data, $endereco);

    //$listaDePessoas[] = $pessoa;
    array_unshift($listaDePessoas, $pessoa);

    $opcao = trim(readline('Para sair digite 1')) . PHP_EOL;

    if($opcao == 1) {
        $continuar = false;
    }

}

foreach($listaDePessoas as $pessoa){
    echo '----------------------------------------------' . PHP_EOL;
    echo $pessoa->getId() . PHP_EOL;
    echo $pessoa->getNome() . PHP_EOL;
    echo $pessoa->getCpf() . PHP_EOL;
    echo $pessoa->getDataNascimento() . PHP_EOL;
    echo $pessoa->getEndereco() . PHP_EOL;
}

<?php

require_once('./Turma.php');
require_once('./Aluno.php');

$turma = new Turma();
$turma->codigo = 123;
$turma->nome = "PHP e MySQL";

echo "Trabalhando com a turma $turma->nome de codigo $turma->codigo" . PHP_EOL;

$aluno1 = new Aluno();
$aluno1->setNome('João Carlos');
$aluno1->setMatricula(123321);

$aluno2 = new Aluno();
$aluno2->setNome('Maria Silva');
$aluno2->setMatricula(789979);

$turma->setAluno($aluno1);
$turma->setAluno($aluno2);

foreach($turma->getAlunos() as $aluno) {
    echo '------------------------------------' . PHP_EOL;
    echo $aluno->getNome() . PHP_EOL;
    echo $aluno->getMatricula() . PHP_EOL;
    echo PHP_EOL;
}
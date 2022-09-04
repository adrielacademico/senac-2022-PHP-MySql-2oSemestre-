<?php

echo "Estamos no FOR " . PHP_EOL;

for($i = 0; $i < count($turma); $i++){
    echo "Nome: "   . $turma[$i]['nome'];
    echo "Idade: "  . $turma[$i]['idade'];
    echo "RG: "     . $turma[$i]['rg'];
    echo "CPF: "    . $turma[$i]['cpf'];
}
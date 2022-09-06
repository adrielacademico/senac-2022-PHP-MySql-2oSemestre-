<?php

function soma(int $numero1, int $numero2)
{
    $soma = $numero1 + $numero2;

    return $soma;
}

echo soma(100, 5666);

function imprime(string $text)
{
    return $text . ' está ok!';
}

echo imprime('Turma PHP');


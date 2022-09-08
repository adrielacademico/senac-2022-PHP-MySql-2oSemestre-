<?php

include('./_limpar-tela.php');
echo PHP_EOL;
echo 'MENU - escolha uma das opções a seguir:' . PHP_EOL;
echo '--------------------------------------------' . PHP_EOL;
echo '[1] Adicionar novo aluno' . PHP_EOL;
echo '[2] Imprimir listar dos alunos cadastrados' . PHP_EOL;
echo '[3] Sair do programa' . PHP_EOL;
echo PHP_EOL;
$opcao_usuario = trim(fgets(STDIN));
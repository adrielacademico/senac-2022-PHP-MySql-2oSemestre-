<?php

include('./_limpar-tela.php');

$sair = true;

echo PHP_EOL;
echo ":: Obrigado por utilizar o nosso sistema. Saindo em...";
for($i = 5; $i >= 0; $i--) {
    echo "$i, ";
    sleep(1);
}
echo "...fui!!! :) " . PHP_EOL;
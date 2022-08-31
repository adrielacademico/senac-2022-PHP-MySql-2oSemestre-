<?php

$a = 3;
$b = 3.0;
$int = 6;
#var_dump($a != $b, $int);

//if else
if ($a + $b == 6 && $b === 3) {
    #echo 'A é igual a B.';
} else {
    #echo 'bugou.... :(';
}


//while - do while

$contador = 0;

echo "######## while ########" . PHP_EOL;

while ($contador <= 10) {
    echo "--------( $contador )----------" . PHP_EOL;
    $contador = $contador + 1;
}

echo PHP_EOL;

$contador2 = 0;

echo "######## do while ########" . PHP_EOL;

do {
    echo "--------( $contador2 )----------" . PHP_EOL;
    
    $contador2 = $contador2 + 1;

} while ($contador2 <= 10);

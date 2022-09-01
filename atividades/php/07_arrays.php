<?php

/*lista turma 1*/
//$array = array();
$turma1 = ['Breno', 'Romulo', 'Filype', 'Gabriel', 'Daniel'];

//var_dump($turma1, $turma1[0]); // Breno
//echo PHP_EOL . $turma1[3]; // Gabriel

//var_dump(count($turma1));
// for($i = 0; $i < count($turma1) ; $i++){
//     sleep(1);
//     echo $turma1[$i] . " no índice $i" . PHP_EOL;
// }

// echo "**********************************" . PHP_EOL;

/*lista turma 2*/

$turma2 = [
    'Breno' => 100.5, 
    'Romulo' => 500.5, 
    'Filype' => 105.5, 
    'Gabriel' => 600.5, 
    'Daniel' => 300.5
];

//var_dump($turma, $turma["Gabriel"]);
//echo PHP_EOL . $turma["Gabriel"];

foreach($turma2 as $indice => $valor){
    sleep(1);
    //echo "O valor $valor pertence a $indice" . PHP_EOL;
    if ($indice == 'Gabriel'){
        echo "O valor $valor pertence a $indice" . PHP_EOL;
        break;
    }
    echo "---- imprimindo...." . PHP_EOL;
}

echo "*************** APENAS VALORES *******************" . PHP_EOL;

// foreach($turma2 as $indice => $valor){
//     sleep(1);
//     echo "Valor $valor" . PHP_EOL;
// }

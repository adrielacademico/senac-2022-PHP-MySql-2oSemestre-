<?php
foreach($numeros as $linha){
    if($linha >= 0) {
        $positivos[] = $linha;
    } else {
        $negativos[] = $linha;
    }
}
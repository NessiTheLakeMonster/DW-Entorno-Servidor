<?php

$num1 = 18;
$num2 = 4;
$resultado = 0;

function calcular($n1, $n2) {
    $cociente = 0;
    $resto = $n1;

    while ($resto >= $n2) {
        $resto -= $n2;
        $cociente++;
    }
}

calcular($num1, $num2);

?>
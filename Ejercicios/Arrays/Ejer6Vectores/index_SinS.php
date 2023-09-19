<?php

$vector = range(1,100);
$num = rand(1,100);

function rellenarVector(&$v) {
    for ($i=0; $i < count($v); $i++) { 
        $v[$i] = rand(1,100);
    }
}

rellenarVector($vector);
//print_r($vector); 

function aparecer($v, $n) {
    $contador = 0;
    
    foreach ($v as $value) {
        if ($value == $n) {
            $contador ++;
        }
    }
    return $contador;
}

//echo 'El ' . $num . 'se repite ' . aparecer($vector, $num);

?>
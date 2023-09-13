<?php

$vector = range(1,100);

function rellenarVector(&$v) {
    for ($i=0; $i < count($v); $i++) { 
        $v[$i] = rand(1,100);
    }
}

rellenarVector($vector);
print_r($vector); 

function aparecer($num) {
    $contador = 0;
    
    

    return $contador;
}

?>
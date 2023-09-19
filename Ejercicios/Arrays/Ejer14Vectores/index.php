<?php

$panel = array('-','-','-','-','*');
shuffle($panel);
print_r($panel);

$posicionGolpe = 0;


function comprobarGolpe(&$posicion, &$vector) {
    $enc = true;
    
    if ($vector[$posicion] == '*') {
        echo 'Has matado a la mosca';
    } else {
        if ($vector[$posicion - 1] == '*' || $vector[$posicion + 1] == '*') {
            echo 'La mosca no estaba allí pero estaba cerca';
            shuffle($vector);
        } else {
            echo 'La mosca no estaba en esa posición';
        }
        $enc = false;
    }
    return $enc;   
}

$muerta = comprobarGolpe($posicionGolpe, $panel);

while ($muerta == false) {
    // $posicionGolpe = $posicionGolpe.rand(0, count($panel) - 1);
    $muerta = comprobarGolpe($posicionGolpe, $panel);
}

?>
<?php

$panel = array('-','-','-','-','*');
shuffle($panel);
print_r($panel);

$posicionGolpe = 2;

function comprobarGolpe(&$posicion, &$vector) {
    
    switch ($vector[$posicion] == '*') {
        case true:
            echo 'Has matado a la mosca';
            break;
        case false:
            if ($vector[$posicion - 1] == '*' || $vector[$posicion + 1] == '*') {
                echo 'La mosca no estaba alli pero estaba cerca';
                shuffle($vector);
            } else {
                echo 'La mosca no estaba en esa posicion';
            }
            break;
    }
    
}

comprobarGolpe($posicionGolpe, $panel);

?>
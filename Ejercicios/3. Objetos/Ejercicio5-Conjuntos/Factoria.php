<?php

class Factoria {

    static function separarLetras($a) {
        $letras = explode(',', $a);
        return $letras;
    }

    static function crearConjunto() {
        $conjunto = [];
        for ($i=0; $i < rand(5,10); $i++) { 
            $conjunto[$i] = '-';
        }

        return $conjunto;
    }

    
}
?>
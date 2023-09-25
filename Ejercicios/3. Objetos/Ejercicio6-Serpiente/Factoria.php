<?php

class Factoria {
    static $colores = ['R','V','A'];

    static function generarSerpiente() {
        $s = new Serpiente();
        $s -> nacer();
        return $s;
    }

    static function generarMultSerpientes() {

    }

    static function generarNido() {
        
    }
}

?>
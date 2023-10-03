<?php

class Factoria {
    static $civilizacion = ['Españoles', 'Bizantinos', 'Ingleses'];
    static $rey = ['Alejandro', 'Isabel', 'Constantino'];

    static function generarCivilizacionRandom() {
        $c = new Civilizacion(self::$civilizacion[rand(0,count(self::$civilizacion)-1)],
            self::$rey[rand(0,count(self::$civilizacion)-1)],
            rand(100, 500));return $c;
    }

    static function generarCivilizacion($nombre, $rey, $almacen) {
        $c = new Civilizacion($nombre, $rey, $almacen);
        return $c;
    }

    static function generarAldeano($civilizacion) {
        $a = new Aldeano($civilizacion);
        return $a;
    }

    static function generarMina() {
        $m = new Mina('ORO',500);
        return $m;
    }
}

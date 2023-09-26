<?php

class Factoria {
    static $nombres = ['Nombre1', 'Nombre2', 'Nombre3'];
    static $raza = ['Raza1', 'Raza2', 'Raza3', 'Raza4'];
    static $color = ['Marron', 'Negro', 'Naranja'];

    static function generarAnimal() {
        $p = new Animal(self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            rand(1, 100),
            self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000));
        
        return $p;
    }

    static function generarPerro() {
        return new Perro(self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            rand(1, 100),
            self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            rand(true, false));
    }

    static function generarGato() {
        return new Gato(self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            rand(1, 100),
            self::$nombres[rand(0,count(self::$nombres)-1)], rand(1, 2000),
            rand(true, false));
    }

    static function generarElefante() {

    }

    static function generarMultAnimales($cuantos = 4) {
        $v = [];

        for ($i=0; $i < $cuantos; $i++) { 
            $aleatorio = rand(1,4);
            
            switch ($aleatorio) {
                case 1:
                    $v[] = self::generarAnimal();
                    break;
                case 2:
                    $v[] = self::generarPerro();
                    break;
                case 3:
                    $v[] = self::generarGato();
                    break;
                case 4:
                    $v[] = self::generarElefante();
                    break;
            }
        }

        return $v;
    }
}

?>
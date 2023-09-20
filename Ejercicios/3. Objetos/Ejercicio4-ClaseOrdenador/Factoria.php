<?php

class Factoria {
    // Atributos Ordenador
    private static $procesador = ['Intel i7', 'Ryzen 9', 'Intel Pentium', 'Ryzen 5'];
    private static $motherboard = ['Gigabyte', 'MSI', 'ASUS'];
    private static $grafica =  ['Nvidia GeForce', 'Intel', 'AMD'];
    private static $tipo =  ['Portatil', 'Sobremesa', 'Ultrabook'];

    // Atributos Aula
    private static $id = [201, 202, 203];
    private static $ciclo = ['DAW', 'ASIR', 'DAM', 'SMR'];
    private static $curso = ['1º', '2º'];
    private static $ordenadores = [];

    static function generarPC() {
        $pc = new Ordenador(self::$procesador[rand(0,count(self::$procesador)-1)],
        self::$motherboard[rand(0,count(self::$motherboard)-1)],
        self::$grafica[rand(0,count(self::$grafica)-1)],
        self::$tipo[rand(0,count(self::$tipo)-1)]);

        return $pc;
    }

    static function generarMultPc($n = 4) {
        $v = [];
        for ($i=0; $i < $n; $i++) { 
            $v[] = self::generarPC();
        }

        return $v;
    }

    static function generarAula() {
        $a = new Aula(self::$id[rand(0,count(self::$id)-1)],
        self::$ciclo[rand(0,count(self::$ciclo)-1)],
        self::$curso[rand(0,count(self::$curso)-1)],
        self::$ordenadores = Factoria::generarMultPc());

        return $a;
    }
}

?>
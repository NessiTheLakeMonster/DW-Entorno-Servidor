<?php

class Conjunto {

    public $conjunto = [];
    const maxLetras = 10;

    function __construct() {} // Constructor vacio

    public function addLetras($c, $l) {
        $c = Factoria::crearConjunto();

        for ($i=0; $i < count($c); $i++) { 
            $c[$i] = array_rand($l, count($l) - 1);
        }

        return $c;
    }

    

}

?>
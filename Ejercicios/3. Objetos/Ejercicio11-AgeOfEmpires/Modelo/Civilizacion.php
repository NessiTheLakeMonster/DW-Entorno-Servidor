<?php

class Civilizacion {
    public $nombre;
    public $rey;
    public $almacen;

    public function __construct($n, $r, $a) {
        $this-> nombre = $n;
        $this-> rey = $r;
        $this-> almacen = $a;
    }
}

?>
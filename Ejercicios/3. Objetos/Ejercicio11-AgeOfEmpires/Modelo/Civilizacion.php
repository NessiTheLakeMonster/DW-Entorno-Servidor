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

    // ------------------------------ Getters and Setters -------------------------
    public function getNombre() {
        return $this->nombre;
    }

    public function getRey() {
        return $this->rey;
    }

    public function getAlmacen() {
        return $this->almacen;
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }

    public function setRey($r) {
        $this->rey = $r;
    }

    public function setAlmacen($a) {
        $this->almacen = $a;
    }
    
}

?>
<?php

class Animal {
    public $nombre;
    public $raza;
    public $peso;
    public $color;

    public function __construct($n, $r, $p, $c) {
        $this->nombre = $n;
        $this->raza = $r;
        $this->peso = $p;
        $this->color = $c;
    }

    // ---------------- Getters & Setters ---------------------------------
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($value) {
        $this->nombre = $value;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($value) {
        $this->raza = $value;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($value) {
        $this->peso = $value;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($value) {
        $this->color = $value;
    }

    // ---------------- Métodos ---------------------------------

    public function vacunar() { // Método comun

    }

    public function comer() { // Metodo comun
        return $this -> peso + 1;
    }

    public function dormir() { // Metodo comun

    }

    public function hacerRuido() {
        return true;
    }

    public function hacerCaso($n) {
        $ruido = false;
        $numero = rand(1, 10);

        if ($numero <= $n) {
            $ruido = true;
        }

        return $ruido;

    }

    // --------------------------------------------------------------

    public function __toString(){
        return 'Nombre: ' . $this->nombre . ' Raza: ' . $this->raza 
        . ' Peso: ' . $this->peso . ' Color: ' . $this->color;  
    }
}

?>
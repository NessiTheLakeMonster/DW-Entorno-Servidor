<?php

class Aldeano {
    public $civilizacion;
    public $salud;

    public function __construct($civilizacion){
        $this-> salud = $this -> getSalud();
        $this->civilizacion = $civilizacion;
    }

    // -------------------- Getters & Setters ------------------------------------
    public function getSalud() {
        return $this->salud;
    }

    public function setSalud($salud){
        $this->salud = $salud;
        return $this;
    }
    // ------------------------------------------------------------------------


}

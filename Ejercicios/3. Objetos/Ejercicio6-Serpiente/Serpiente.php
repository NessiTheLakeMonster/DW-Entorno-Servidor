<?php

class Serpiente {
    public $edad;
    public $anilla;
    public $muerta = false;

    function __construct()
    {
        
    }

    // ---------------- Getters & Setters -------------------------------
    public function getEdad()
    {
        return $this->edad;
    }


    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
    // ------------------------------------------------------------------

    function nacer() {
        return $this->edad = 1;
    }

    function crecer() {
        
    }
}

?>
<?php

class Mina {
    public $tipo;
    public $items = 500;

    public $aldeanosMina;

    public function __construct($t, $i) {
        $this -> tipo = $t;
        $this -> items = $i;
    }

    // ------------------------------ Getters and Setters -------------------------

    public function getTipo() {
        return $this->tipo;
    }

    public function getItems() {
        return $this->items;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }

    public function setItems($i) {
        $this->items = $i;
    }
    //----------------------------------------------------------------------------
    
    public function addAldeano($a) {
        return $this->aldeanosMina.array_push($a);
    }

    public function extraerRecursos() {
        
    }
}

?>
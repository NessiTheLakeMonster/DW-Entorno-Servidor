<?php

class Elefante extends Animal {
    public $barrita;

    public function __construct($n, $r, $p, $c, $bar) {
        parent::__construct($n, $r, $p, $c);
        $this-> barrita = $bar;
    }

    public function getBarrita() {
        return $this->barrita;
    }

    public function setBarrita($value) {
        $this->barrita = $value;
    }

}

?>
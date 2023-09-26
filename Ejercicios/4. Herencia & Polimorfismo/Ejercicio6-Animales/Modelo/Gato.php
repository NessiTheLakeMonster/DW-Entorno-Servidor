<?php

class Gato extends Animal {
    public $maullar;

    public function __construct($n, $r, $p, $c, $miau) {
        parent::__construct($n, $r, $p, $c);
        $this-> maullar = $miau;
    }

    public function getMaullar() {
        return $this->maullar;
    }

    public function setMaullar($value) {
        $this->maullar = $value;
    }

    public function __toString() {
        return parent::__toString().' Maullar: '.$this->maullar;
    }

    public function hacerCaso($n) { 
        return parent::hacerCaso(5) . 'El gato hace caso';
    }

    public function toserBolaPelo() { //Metodo exclusivo
        return 'El gato tose una bola de pelo';
    }

    public function hacerRuido() {
        return parent::hacerRuido() . $this-> maullar = true;
    }
}

?>
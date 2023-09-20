<?php

require_once('Factoria.php');

class Coche {
    public $marca;
    public $modelo;
    public $color;
    public $matricula;

    public $velocidad;
    public $marcha;
    public $arrancado = false;

    const velocidadMax = 120;

    function __construct($ma, $mo, $c, $mat)
    {
        $this -> marca = $ma;
        $this -> modelo = $mo;
        $this -> color = $c;
        $this -> matricula = $mat;
    }

    // ---------------------------- Getters & Setters ------------------------
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    // ---------------------------------------------------------------------------------

    function encenderCoche() {
        $arrancando = true;
    }

    function __toString()
    {
        return 'Marca:' . $this -> marca . ' Modelo:' . $this-> modelo . 
        ' Color:' . $this -> color . ' Matricula:' . $this -> matricula;
    }
}

?>
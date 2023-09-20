<?php

class Ordenador {
    public $procesador;
    public $motherboard;
    public $grafica;
    public $tipo;

    function __construct($pr, $mo, $gr, $ti)
    {
        $this-> procesador = $pr;
        $this->motherboard = $mo;
        $this->grafica = $gr;
        $this->tipo = $ti;
    }

    // -------------------------- Getters & setters ---------------------------

    public function getProcesador()
    {
        return $this->procesador;
    }

    public function setProcesador($procesador)
    {
        $this->procesador = $procesador;

        return $this;
    }

    public function getMotherboard()
    {
        return $this->motherboard;
    }

    public function setMotherboard($motherboard)
    {
        $this->motherboard = $motherboard;

        return $this;
    }

    public function getGrafica()
    {
        return $this->grafica;
    }

    public function setGrafica($grafica)
    {
        $this->grafica = $grafica;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    // ------------------------------------------------------------------------

    function __toString()
    {
        return 'Procesador: ' . $this-> procesador . ' Motherboard:' . $this-> motherboard . 
        ' Grafica:' . $this->grafica . ' Tipo:' . $this->tipo;
    }
}

?>
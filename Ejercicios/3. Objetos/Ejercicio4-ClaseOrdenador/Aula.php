<?php

class Aula {
    public $id;
    public $ciclo;
    public $curso;

    public $ordenadores = []; // Array de Ordenadores

    function __construct($id, $ci, $cu, $pc)
    {
        $this->id = $id;
        $this->ciclo = $ci;
        $this->curso = $cu;
        $this->ordenadores = $pc;
    }

    // -------------------------- Getters & setters ---------------------------

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getCiclo()
    {
        return $this->ciclo;
    }

    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    public function getOrdenadores()
    {
        return $this->ordenadores;
    }

    public function setOrdenadores($ordenadores)
    {
        $this->ordenadores = $ordenadores;

        return $this;
    }

    // ----------------------------------------------------------------------


}

?>
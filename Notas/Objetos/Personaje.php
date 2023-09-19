<?php

// Por defecto los atributos son privados y los metodos publicos
class Personaje {
    private $nombre;
    private $edad;

    static $CONT = 18; // Companion object
    static $AULA = 206;

    function __construct($n, $e) // Solo hay un constructor
    {
        self::$CONT++; // Como se accede a una variable estatica a traves de un metodo
        $this -> nombre = $n;
        $this -> edad = $e;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    function __toString()
    {
        return 'Nombre: ' . $this -> nombre . ' Edad: ' . $this -> edad . ' Aula:' . self::$AULA;
    }

    static function metodoEstatico() {
        return 'Soy un metodo estatico';
    }

    /* function pasear() {
        return $this -> nombre . 'paseando';
    } */

    function __call($name, $arguments) // Para simular la sobrecarga
    {
        if ($name == 'pasear') {
            if (count($arguments) > 0) {
                return $this -> nombre . 'paseando' . $arguments[0] . 'horas';
            }
        } else {
            return $this -> nombre . 'paseando';
        }
    }
}

?>
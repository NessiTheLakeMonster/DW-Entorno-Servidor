<?

class Perro extends Animal {
    public $ladrido;

    public function __construct($n, $r, $p, $c, $guau) {
        parent::__construct($n, $r, $p, $c);
        $this-> ladrido = $guau;
    }

    public function getLadrido() {
        return $this->ladrido;
    }

    public function setLadrido($value) {
        $this->ladrido = $value;
    }

    public function hacerCaso($n) { 
        return parent::hacerCaso(9) . 'El perro hace caso';
    }

    public function sacarPaseo() {
        return 'Perro sale de paseo';
    }
}

?>
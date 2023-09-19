<?php 

class Factoria {
    static $marca = ['Fiat', 'Kia', 'Toyota', 'Ssangyong'];
    static $modelo = ['Multipla', 'Niro', 'Supra', 'Action'];
    static $color = ['Blanco', 'Rojo', 'Negro', 'Verde'];
    static $matricula = ['9687FYX', '1254LHN', '6574DKL', '6544DKL'];

    static function generarCoche() {
        $c = new Coche(self::$marca[rand(0,count(self::$marca)-1)],
            self::$modelo[rand(0,count(self::$modelo)-1)],
            self::$color[rand(0,count(self::$color)-1)],
            self::$matricula[rand(0,count(self::$matricula)-1)]);

        return $c;
    }

    static function generarMultCoches($n = 4) {
        $v = [];
        for ($i=0; $i < $n; $i++) { 
            $v[] = self::generarCoche();
        }
        return $v;
    }
}

?>
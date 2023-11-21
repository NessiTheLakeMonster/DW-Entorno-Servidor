<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Buscaminas;

/**
 * Las unitarias tests tienen que ser los más veloces en ejecutarse y eso es porque atacan código que no interactua con la base de datos, o con servicios de email, o notificaciones o cualquier otro servicio de entrada/salida que es lo que ralentiza un script.
 * Aquí haremos pruebas de lógica del programa.
 */

class pruebasUnitariasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_iniciar_tablero()
    {
        $tam = rand(1,10);
        echo 'Iniciado tablero con '.$tam;
        $b = new Buscaminas();
        $response = $b->iniciarTablero($tam);
        $this->assertEquals($tam, $response);
    }

    public function test_colocar_minas(){
        $b = new Buscaminas();
        $tam = rand(5,10);
        $response = $b->iniciarTablero($tam);

        $minas = rand(1,3);
        $b->colocarMinas($minas);
        $ocurrencias = array_count_values($b->tablero);
        print_r($ocurrencias);
        print_r($b->tablero);
    
        $this->assertEquals($minas, $ocurrencias['*']);
    }

    public function test_calcular_precios(){
        $cantidad = 10;
        $precio = 100;
        $b = new Buscaminas();
        $this->assertEquals($b->calcularPrecio($cantidad, $precio),800);
    }

}

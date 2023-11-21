<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class pruebasInsercionTest extends TestCase
{
    public function test_insertar()
    {
        $fak = \Faker\Factory::create('es_ES');
        
        $datos = [
            "DNI" => $fak->dni,
            "Nombre" => $fak->name,
            "Tfno" => $fak->phoneNumber,
            "edad" => rand(18,100)
        ];

        echo 'Insertando persona para probar inserción: ';
        print_r ($datos);

        $this->json('post', '/api/insertarpersona', $datos)
            ->assertStatus(200)
            ->assertJson([
                'mens' => 'Inserción ok',
            ]);

        $this->json('post', '/api/insertarpersona', $datos)
            ->assertStatus(404)
            ->assertJson([
                'mens' => 'Clave duplicada',
            ]);

        $this->json('delete', "/api/borrarpersona/".$datos["DNI"]);
    }

    public function test_insertar2()
    {
        $fak = \Faker\Factory::create('es_ES');
        
        $datos = [
            "DNI" => $fak->dni,
            "Nombre" => $fak->name,
            "Tfno" => $fak->phoneNumber,
            "edad" => rand(18,100)
        ];

        echo 'Insertando persona para probar inserción: ';
        print_r ($datos);

        $response = $this->post('/api/insertarpersona', $datos);
        $response->assertStatus(200);
        $response->assertJson(['mens' => 'Inserción ok']);

        $response = $this->post('/api/insertarpersona', $datos);
        $response->assertStatus(404);
        $response->assertJson(['mens' => 'Clave duplicada']);

        $this->json('delete', "/api/borrarpersona/".$datos["DNI"]);
    }
}


/**
 * Para crear tests: php artisan make:test loqueseaTest    <-- Importante que siempre acabe en Test. Por defecto los crea en 'Feature'.
 * php artisan make:test loqueseaTest --unit
 * 
 * Los test unitarios prueban lógica del programa y son los más rápidos, no se deben meter pruebas de bd o emails.
 * Los test de integración (feature) sí tendrán las pruebas de bf y mail; y cualquier otro acceso externo.
 * 
 * Para pasar los tests:
 * % php artisan test   -> Los pasa todos.
 * % ./vendor/bin/phpunit    -> Los pasa todos también.
 * % ./vendor/bin/phpunit tests/Feature/pruebasBorradoTest.php   -> Ejecuta solo los tests contenidos en esa clase.
 * % ./vendor/bin/phpunit --filter pruebasBusquedaTest     -> Ejecuta los tests contenidos en esa clase, no hace falta especificar ruta.
 * % ./vendor/bin/phpunit --filter pruebasUnitariasTest     -> Lo mismo de antes, se busca esa clase en ambas carpetas: Feature y Unit.
 * $ ./vendor/bin/phpunit --filter pruebasInsercionTest::test_insertar2   -> Pasa un test concreto de una clase de tests.
 * 
 */
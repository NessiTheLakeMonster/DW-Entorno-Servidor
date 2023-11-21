<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class pruebasBusquedaTest extends TestCase
{
    public function test_buscar_persona() {

        $fak = \Faker\Factory::create('es_ES');
        
        $datos = [
            "DNI" => $fak->dni,
            "Nombre" => $fak->name,
            "Tfno" => $fak->phoneNumber,
            "edad" => rand(18,100)
        ];

        echo 'Insertando para buscar persona: ';
        print_r ($datos);

        $this->json('post', '/api/insertarpersona', $datos);


        $this->json('get', '/api/buscarpersona/'.$datos["DNI"])
        ->assertStatus(200)
        ->assertJson(["DNI" => $datos["DNI"], "Nombre" => $datos["Nombre"], "Tfno" => $datos["Tfno"], "edad" => $datos["edad"]])
        ->assertJsonStructure([
            'DNI', 'Nombre', "Tfno", "edad"]);

        $this->json('delete', "/api/borrarpersona/".$datos["DNI"]);
    }

    public function test_buscar_persona2() {
        $fak = \Faker\Factory::create('es_ES');
        
        $datos = [
            "DNI" => $fak->dni,
            "Nombre" => $fak->name,
            "Tfno" => $fak->phoneNumber,
            "edad" => rand(18,100)
        ];

        echo 'Insertando para buscar persona: ';
        print_r ($datos);

        $this->json('post', '/api/insertarpersona', $datos);

        
        $response = $this->get('/api/buscarpersona/'.$datos["DNI"]);
        $response->assertStatus(200);
        $response->assertJson(["DNI" => $datos["DNI"], "Nombre" => $datos["Nombre"], "Tfno" => $datos["Tfno"], "edad" => $datos["edad"]]);

        $this->json('delete', "/api/borrarpersona/".$datos["DNI"]);
    }
}

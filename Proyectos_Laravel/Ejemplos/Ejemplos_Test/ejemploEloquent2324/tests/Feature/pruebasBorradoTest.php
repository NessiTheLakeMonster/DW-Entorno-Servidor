<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class pruebasBorradoTest extends TestCase
{
    public function test_borrar()
    {
        $fak = \Faker\Factory::create('es_ES');
        
        $datos = [
            "DNI" => $fak->dni,
            "Nombre" => $fak->name,
            "Tfno" => $fak->phoneNumber,
            "edad" => rand(18,100)
        ];

        echo 'Insertando para borrar persona: ';
        print_r ($datos);


        $this->json('post', '/api/insertarpersona', $datos);

        $this->json('delete', "/api/borrarpersona/".$datos["DNI"])
            ->assertStatus(200)
            ->assertJson([
                'mens' => 'Borrado',
            ]);

        $this->json('delete', "/api/borrarpersona/".$datos["DNI"])
            ->assertStatus(203)
            ->assertJson([
                'mens' => 'No encontrado',
            ]);
    }

    public function test_borrar2(){
        $fak = \Faker\Factory::create('es_ES');
        
        $datos = [
            "DNI" => $fak->dni,
            "Nombre" => $fak->name,
            "Tfno" => $fak->phoneNumber,
            "edad" => rand(18,100)
        ];

        echo 'Insertando para borrar persona: ';
        print_r ($datos);


        $this->json('post', '/api/insertarpersona', $datos);

        $response = $this->delete("/api/borrarpersona/".$datos["DNI"]);
        $response->assertStatus(200);
        $response->assertJson(['mens' => 'Borrado']);

        $response = $this->delete("/api/borrarpersona/".$datos["DNI"]);
        $response->assertStatus(203);
        $response->assertJson(['mens' => 'No encontrado']);
    }
}

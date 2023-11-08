<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profesor::factory(10)->create(); // Las genera y las almacena en la base de datos.
        Profesor::factory(3)->make();  // Las genera y las almacena en un vector pero no en la base de datos.
    }
}

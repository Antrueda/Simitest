<?php

use Illuminate\Database\Seeder;


use App\Models\sistema\SisFsoporte;

class SisFuenteSoportesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisFsoporte::create(['nombre' => 'CREAR USUARIO SISTEMA']);
        SisFsoporte::create(['nombre' => 'FICHA DE INGRESO']);
        SisFsoporte::create(['nombre' => 'VALORACIÓN PSICOSOCIAL']);
        SisFsoporte::create(['nombre' => 'CONSULTA SOCIAL EN DOMICILIO']);
    }
}
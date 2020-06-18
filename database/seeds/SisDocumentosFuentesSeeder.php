<?php

use Illuminate\Database\Seeder;

use App\Models\sistema\SisDocufuen;

class SisDocumentosFuentesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisDocufuen::create(['nombre' => 'CREAR USUARIO SISTEMA']);
        SisDocufuen::create(['nombre' => 'FICHA DE INGRESO']);
        SisDocufuen::create(['nombre' => 'VALORACIÓN PSICOSOCIAL']);
        SisDocufuen::create(['nombre' => 'CONSULTA SOCIAL EN DOMICILIO']);
    }
}
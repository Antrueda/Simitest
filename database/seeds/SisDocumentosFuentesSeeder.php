<?php

use Illuminate\Database\Seeder;

use App\Models\sistema\SisDocumentoFuente;

class SisDocumentosFuentesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisDocumentoFuente::create(['nombre' => 'CREAR USUARIO SISTEMA']);
        SisDocumentoFuente::create(['nombre' => 'FICHA DE INGRESO']);
        SisDocumentoFuente::create(['nombre' => 'VALORACIÓN PSICOSOCIAL']);
        SisDocumentoFuente::create(['nombre' => 'CONSULTA SOCIAL EN DOMICILIO']);
    }
}
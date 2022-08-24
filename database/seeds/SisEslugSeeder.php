<?php

use App\Models\Sistema\SisEslug;
use Illuminate\Database\Seeder;

class SisEslugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisEslug::create([
            's_espaluga' => 'SALA SISTEMAS',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);

        SisEslug::create([
            's_espaluga' => 'CANCHA FÚTBOL',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);

        SisEslug::create([
            's_espaluga' => 'PISCINA',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);

        SisEslug::create([
            's_espaluga' => 'COMEDOR',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);

        SisEslug::create([
            's_espaluga' => 'PATIO',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);
        SisEslug::create([
            's_espaluga' => 'DORMITORIO',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);
        SisEslug::create([
            's_espaluga' => 'SALÓN DE CLASE',
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'estusuario_id' => 1,
            'user_edita_id' => 1,
        ]);
    }
}

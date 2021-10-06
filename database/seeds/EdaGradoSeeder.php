<?php

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use Illuminate\Database\Seeder;

class EdaGradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EdaGrado::create(['id' => 1, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC1: 1º A 3º']);
        EdaGrado::create(['id' => 2, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC2: 4º Y 5º']);
        EdaGrado::create(['id' => 3, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'SEXTO']);
        EdaGrado::create(['id' => 4, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'SEPTIMO']);
        EdaGrado::create(['id' => 5, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'OCTAVO']);
        EdaGrado::create(['id' => 6, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'NOVENO']);
        EdaGrado::create(['id' => 7, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'DECIMO']);
        EdaGrado::create(['id' => 8, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'ONCE']);
    }
}

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
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC1: 1º A 3º']); // 1
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC2: 4º Y 5º']); // 2
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'SEXTO']); // 3
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'SEPTIMO']); // 4
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'OCTAVO']); // 5
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'NOVENO']); // 6
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'DECIMO']); // 7
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'ONCE']); // 8
    }
}

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
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC1: 1º A 3º','numero' => 3]); // 1
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC2: 4º Y 5º','numero' => 5]); // 2
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'SEXTO','numero' => 6]); // 3
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'SEPTIMO','numero' => 7]); // 4
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'OCTAVO','numero' => 8]); // 5
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'NOVENO','numero' => 9]); // 6
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'DECIMO','numero' => 10]); // 7
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'ONCE','numero' => 11]); // 8
    }
}

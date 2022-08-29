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
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 11','numero' => 6]); // 2
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 10','numero' => 7]); // 3
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 9','numero' => 8]); // 4
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 8','numero' => 9]); // 5
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 7','numero' => 10]); // 6
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 6','numero' => 11]); // 7
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'AC2: 4º Y 5º','numero' => 5]); // 8
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 4','numero' => 4]); // 9
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 5','numero' => 5]); // 10
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 3','numero' => 3]); // 11
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 2','numero' => 2]); // 12
        EdaGrado::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grado' => 'GRADO 1','numero' => 1]); // 13

    }
}

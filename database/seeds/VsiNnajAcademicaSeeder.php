<?php

use Illuminate\Database\Seeder;
use App\Models\sicosocial\Pivotes\VsiNnajAcademica;

class VsiNnajAcademicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * pregunta 19 4
     * @return void
     */
    public function run()
    {
        VsiNnajAcademica::create(['parametro_id' => 879, 'vsi_id' => 139, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajAcademica::create(['parametro_id' => 879, 'vsi_id' => 160, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajAcademica::create(['parametro_id' => 881, 'vsi_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajAcademica::create(['parametro_id' => 881, 'vsi_id' => 177, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajAcademica::create(['parametro_id' => 882, 'vsi_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajAcademica::create(['parametro_id' => 882, 'vsi_id' => 289, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
    }
}
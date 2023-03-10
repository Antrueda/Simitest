<?php

use App\Models\sicosocial\Pivotes\VsiRelfamAccione;
use Illuminate\Database\Seeder;

class VsiRelfamAccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VsiRelfamAccione::create(['parametro_id' => 1323, 'vsi_relfamiliar_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiRelfamAccione::create(['parametro_id' => 853, 'vsi_relfamiliar_id' => 4, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiRelfamAccione::create(['parametro_id' => 853, 'vsi_relfamiliar_id' => 20, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiRelfamAccione::create(['parametro_id' => 853, 'vsi_relfamiliar_id' => 106, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiRelfamAccione::create(['parametro_id' => 853, 'vsi_relfamiliar_id' => 199, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
    }
}

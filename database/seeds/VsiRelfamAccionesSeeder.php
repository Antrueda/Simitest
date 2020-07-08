<?php

use App\Models\sicosocial\Pivotes\VsiRelfamAcciones;
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
        VsiRelfamAcciones::create(['parametro_id' => 24, 'vsi_relfamiliar_id' => 853, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRelfamAcciones::create(['parametro_id' => 8, 'vsi_relfamiliar_id' => 853, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRelfamAcciones::create(['parametro_id' => 6, 'vsi_relfamiliar_id' => 1323, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRelfamAcciones::create(['parametro_id' => 201, 'vsi_relfamiliar_id' => 853, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRelfamAcciones::create(['parametro_id' => 108, 'vsi_relfamiliar_id' => 853, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
    }
}
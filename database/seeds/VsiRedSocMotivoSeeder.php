<?php

use Illuminate\Database\Seeder;
use App\Models\sicosocial\Pivotes\VsiRedSocMotivo;

class VsiRedSocMotivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * pregunta 7 1 4
     * @return void
     */
    public function run()
    {
        VsiRedSocMotivo::create(['parametro_id' => 32, 'vsi_redsocial_id' => 49, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedSocMotivo::create(['parametro_id' => 32, 'vsi_redsocial_id' => 113, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedSocMotivo::create(['parametro_id' => 32, 'vsi_redsocial_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedSocMotivo::create(['parametro_id' => 32, 'vsi_redsocial_id' => 160, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedSocMotivo::create(['parametro_id' => 1803, 'vsi_redsocial_id' => 278, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
    }
}
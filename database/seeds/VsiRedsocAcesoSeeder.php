<?php

use App\Models\sicosocial\Pivotes\VsiRedsocAceso;
use Illuminate\Database\Seeder;

class VsiRedsocAcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VsiRedsocAceso::create(['parametro_id' => 297, 'vsi_redsocial_id' => 10, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedsocAceso::create(['parametro_id' => 955, 'vsi_redsocial_id' => 111, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedsocAceso::create(['parametro_id' => 955, 'vsi_redsocial_id' => 110, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiRedsocAceso::create(['parametro_id' => 1804, 'vsi_redsocial_id' => 17, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
    }
}
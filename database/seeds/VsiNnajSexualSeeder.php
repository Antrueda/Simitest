<?php

use Illuminate\Database\Seeder;
use App\Models\sicosocial\Pivotes\VsiNnajSexual;


class VsiNnajSexualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Pregunta 19 2
     * @return void
     */
    public function run()
    {
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 12, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 51, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 203, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 205, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 233, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 581, 'vsi_id' => 286, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 872, 'vsi_id' => 246, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 872, 'vsi_id' => 286, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
        VsiNnajSexual::create(['parametro_id' => 874, 'vsi_id' => 98, 'user_crea_id' => 1, 'user_edita_id' => 1,]);
    }
}
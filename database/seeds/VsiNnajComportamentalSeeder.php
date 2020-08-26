<?php

use Illuminate\Database\Seeder;
use App\Models\sicosocial\Pivotes\VsiNnajComportamental;


class VsiNnajComportamentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Pregunta 19 3
     * @return void
     */
    public function run()
    {
        VsiNnajComportamental::create(['parametro_id' => 875, 'vsi_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 875, 'vsi_id' => 4, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 875, 'vsi_id' => 146, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 875, 'vsi_id' => 181, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 877, 'vsi_id' => 139, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 20, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 73, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 99, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 177, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 233, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 289, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
        VsiNnajComportamental::create(['parametro_id' => 878, 'vsi_id' => 301, 'user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1,]);
    }
}

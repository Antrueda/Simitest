<?php

use App\Models\Acciones\Grupales\AgSubtema;
use Illuminate\Database\Seeder;

class AgSubtemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgSubtema::create(["s_subtema"=>"NO APLICA","s_descripcion"=>"NO APLICA","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
    }
}

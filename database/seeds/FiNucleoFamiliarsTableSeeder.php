<?php

use App\Models\sicosocial\FiNucleoFamiliar;
use Illuminate\Database\Seeder;

class FiNucleoFamiliarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FiNucleoFamiliar::create(['i_en_uso' => '1','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
    }
}

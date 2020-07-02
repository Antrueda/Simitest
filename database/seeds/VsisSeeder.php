<?php

use App\Models\sicosocial\Vsi;
use Illuminate\Database\Seeder;

class VsisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vsi::create(['id'=>1,'sis_nnaj_id'=>3, 'dependencia_id'=>1, 'fecha'=>'2020-06-24', 'user_crea_id'=>1, 'user_edita_id'=>1, 'sis_esta_id'=>1,]);
    }
}

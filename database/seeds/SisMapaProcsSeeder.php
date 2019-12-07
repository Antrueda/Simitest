<?php

use Illuminate\Database\Seeder;

use App\Models\sistema\SisMapaProc;

class SisMapaProcsSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisMapaProc::create(['version'=>1,'sis_entidad_id'=>2,'vigencia'=>'2019-09-13','cierre'=>'2019-09-13']);
    }
}
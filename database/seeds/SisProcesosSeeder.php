<?php

use App\Models\Sistema\SisProceso;
use Illuminate\Database\Seeder;

class SisProcesosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        SisProceso::create(['sis_mapa_proc_id'=>'1','prm_proceso_id'=>'1','nombre'=>'MODELO PEDAGOGICO']);
        SisProceso::create(['sis_proceso_id'=>'1','sis_mapa_proc_id'=>'1','prm_proceso_id'=>'1','nombre'=>'OPERACIÓN AMISTAD']);
        SisProceso::create(['sis_proceso_id'=>'1','sis_mapa_proc_id'=>'1','prm_proceso_id'=>'1','nombre'=>'ACOGIDA']);
        SisProceso::create(['sis_proceso_id'=>'1','sis_mapa_proc_id'=>'1','prm_proceso_id'=>'1','nombre'=>'PERSONALIZACÓN']);
        SisProceso::create(['sis_proceso_id'=>'1','sis_mapa_proc_id'=>'1','prm_proceso_id'=>'1','nombre'=>'SOCIALIZACIÓN']);
        SisProceso::create(['sis_proceso_id'=>'1','sis_mapa_proc_id'=>'1','prm_proceso_id'=>'1','nombre'=>'AUTONOMÍA Y AUTOGOBIERNO']);
    }
}

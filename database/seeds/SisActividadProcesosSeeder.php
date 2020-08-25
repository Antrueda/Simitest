<?php

use App\Models\Sistema\SisActividadProceso;
use Illuminate\Database\Seeder;

class SisActividadProcesosSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        SisActividadProceso::create(['sis_actividad_id'=>1,'sis_proceso_id'=>2,'tiempo'=>2,'sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
        SisActividadProceso::create(['sis_actividad_id'=>3,'sis_proceso_id'=>2,'tiempo'=>2,'sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]);
    }
}

<?php

use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisServicio;
use Illuminate\Database\Seeder;

class SisEntidadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'user_edita_id' => 1];
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'NO APLICA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'COMIDA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DORMIDA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'VIVIENDA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SALUD']);

        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'NO APLICA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'IDIPRON']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'POLICIA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
    }
}

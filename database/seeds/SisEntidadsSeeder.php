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
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1];
        SisServicio::create(['s_servicio' => 'NO APLICA']);
        SisServicio::create(['s_servicio' => 'COMIDA']);
        SisServicio::create(['s_servicio' => 'DORMIDA']);
        SisServicio::create(['s_servicio' => 'VIVIENDA']);
        SisServicio::create(['s_servicio' => 'SALUD']);

        $entidadx = SisEntidad::create(['nombre' => 'NO APLICA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['nombre' => 'IDIPRON']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['nombre' => 'ICBF']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['nombre' => 'POLICIA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
    }
}

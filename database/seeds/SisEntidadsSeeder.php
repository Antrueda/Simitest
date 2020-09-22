<?php

use App\Models\Sistema\SisDepen;
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
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'EXTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'ESTÍMULO DE CORRESPONSABILIDAD']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DISTRITO JOVEN EXTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO']);
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
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS JARDIN INFANTIL DIURNO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS JARDIN INFANTIL NOCTURNO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CASA DE PENSAMIENTO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO AMAR']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO FORJAR']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO PROTEGER ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS DISTRITO JOVEN ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CONTACTO Y ATENCIÒN EN CALLE ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO DE ATENSIÒN TRANSITORIA ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS ALTA DEPENDENCIA FUNCIONAL']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS HOGAR DE PASO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS ATENCIÒN INTEGRAL A LA DIVERSIDAD SEXUAL Y DE GENEROS']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'COMEDOR COMUNITARIO ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'COMISARIA DE FAMILIA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ATENCIÒN TRANSITORIA AL MIGRANTE']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF INTERNADO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF EXTERNADO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF CENTRO DE EME']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF CENTRO DE EMERGENCIA ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'JARDIN INFANTIL ICBF ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ONG']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);

        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'UNICEF']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'DEFENSORIA DEL PUEBLO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);



        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, ];
        foreach ( SisDepen::get() as $key => $value) {
            $value->sis_servicios()->sync(
                [
                    2 => $camposmagicos,
                    3 => $camposmagicos,
                    4 => $camposmagicos,
                    5 => $camposmagicos,
                    6 => $camposmagicos,
                ]

            );
        }



    }
}

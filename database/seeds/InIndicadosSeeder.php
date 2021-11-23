<?php

use Illuminate\Database\Seeder;
use App\Models\Indicadores\Administ\InIndicado;

class InIndicadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InIndicado::create(['s_indicador' => 'Dificultad habilidades Sociales','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'Ausencia redes de apoyo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'Identificación de víctima y/o riesgo ESCNNA y afectaciones psicosociales desencadenadas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN  DE PRESUNTO ABUSO SEXUAL','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN DE AFECTACIONES PSICOSOCIALES ANTE PRESUNTO ABUSO SEXUAL','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'EVENTOS DE IMPACTO PSICOSOCIAL RELACIONADOS CON EL GÉNERO, LA IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'PRESUNTA NEGLIGENCIA DE LOS PROGENITORES Y/O CUIDADORES','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'DIFICULTADES EN RELACIONES FAMILIARES','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'PAUTAS DE CRIANZA INADECUADA','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN DE VIOLENCIA INTRAFAMILIAR','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1]);
       }
}

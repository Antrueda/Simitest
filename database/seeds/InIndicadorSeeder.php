<?php

use App\Models\Indicadores\Administ\InIndicado;
use Illuminate\Database\Seeder;


class InIndicadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InIndicado::create(['s_indicador' => 'Dificultad habilidades Sociales']);
        InIndicado::create(['s_indicador' => 'Ausencia redes de apoyo']);
        InIndicado::create(['s_indicador' => 'Identificación de víctima y/o riesgo ESCNNA y afectaciones psicosociales desencadenadas']);
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN  DE PRESUNTO ABUSO SEXUAL']);
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN DE AFECTACIONES PSICOSOCIALES ANTE PRESUNTO ABUSO SEXUAL']);
        InIndicado::create(['s_indicador' => 'EVENTOS DE IMPACTO PSICOSOCIAL RELACIONADOS CON EL GÉNERO, LA IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL ']);
        InIndicado::create(['s_indicador' => 'PRESUNTA NEGLIGENCIA DE LOS PROGENITORES Y/O CUIDADORES']);
        InIndicado::create(['s_indicador' => 'DIFICULTADES EN RELACIONES FAMILIARES']);
        InIndicado::create(['s_indicador' => 'PAUTAS DE CRIANZA INADECUADA']);
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN DE VIOLENCIA INTRAFAMILIAR']);
       }
}

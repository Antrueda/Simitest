<?php

use Illuminate\Database\Seeder;
use App\Models\Indicadores\InIndicador;

class InIndicadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InIndicador::create(['s_indicador' => 'Dificultad habilidades Sociales']);
        InIndicador::create(['s_indicador' => 'Ausencia redes de apoyo']);
        InIndicador::create(['s_indicador' => 'Identificación de víctima y/o riesgo ESCNNA y afectaciones psicosociales desencadenadas']);
        InIndicador::create(['s_indicador' => 'IDENTIFICACIÓN  DE PRESUNTO ABUSO SEXUAL']);
        InIndicador::create(['s_indicador' => 'IDENTIFICACIÓN DE AFECTACIONES PSICOSOCIALES ANTE PRESUNTO ABUSO SEXUAL']);
        InIndicador::create(['s_indicador' => 'EVENTOS DE IMPACTO PSICOSOCIAL RELACIONADOS CON EL GÉNERO, LA IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL']);
        InIndicador::create(['s_indicador' => 'PRESUNTA NEGLIGENCIA DE LOS PROGENITORES Y/O CUIDADORES']);
        InIndicador::create(['s_indicador' => 'DIFICULTADES EN RELACIONES FAMILIARES']);
        InIndicador::create(['s_indicador' => 'PAUTAS DE CRIANZA INADECUADA']);
        InIndicador::create(['s_indicador' => 'IDENTIFICACIÓN DE VIOLENCIA INTRAFAMILIAR']);
       }
}

<?php

namespace Database\Seeds\Indicadores;

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
        InIndicado::create(['s_indicador' => 'Dificultad habilidades Sociales']); // 1
        InIndicado::create(['s_indicador' => 'Ausencia redes de apoyo']); // 2
        InIndicado::create(['s_indicador' => 'Identificación de víctima y/o riesgo ESCNNA y afectaciones psicosociales desencadenadas']); // 3
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN  DE PRESUNTO ABUSO SEXUAL']); // 4
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN DE AFECTACIONES PSICOSOCIALES ANTE PRESUNTO ABUSO SEXUAL']); //5
        InIndicado::create(['s_indicador' => 'EVENTOS DE IMPACTO PSICOSOCIAL RELACIONADOS CON EL GÉNERO, LA IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL ']); //6
        InIndicado::create(['s_indicador' => 'PRESUNTA NEGLIGENCIA DE LOS PROGENITORES Y/O CUIDADORES']); // 7
        InIndicado::create(['s_indicador' => 'DIFICULTADES EN RELACIONES FAMILIARES']); // 8
        InIndicado::create(['s_indicador' => 'PAUTAS DE CRIANZA INADECUADA']); // 9
        InIndicado::create(['s_indicador' => 'IDENTIFICACIÓN DE VIOLENCIA INTRAFAMILIAR']); // 10
    }
}

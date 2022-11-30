<?php

use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdAsoComponente;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdComponente;
use Illuminate\Database\Seeder;

class LabrrdAdministraccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // componenetes
        LabrrdComponente::create(['nombre' => 'COGNITIVO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdComponente::create(['nombre' => 'ARGUMENTACIÓN', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdComponente::create(['nombre' => 'CREATIVIDAD', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdComponente::create(['nombre' => 'SOCIALIZACIÓN', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        LabrrdComponente::create(['nombre' => 'EXPRESIÓN CORPORAL', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdComponente::create(['nombre' => 'EXPRESIÓN ARTÍSTICA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdComponente::create(['nombre' => 'VISUAL – COMUNICATIVO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdComponente::create(['nombre' => 'TRABAJO COLABORATIVO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        LabrrdAsoComponente::create(['componente_id' => 1, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 2, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 3, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 4, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        LabrrdAsoComponente::create(['componente_id' => 5, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 6, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 7, 'tipo_valoracion' => 'INICIAL', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        LabrrdAsoComponente::create(['componente_id' => 1, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 2, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 3, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 4, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PERSONALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        LabrrdAsoComponente::create(['componente_id' => 5, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 6, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 7, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        LabrrdAsoComponente::create(['componente_id' => 8, 'tipo_valoracion' => 'SEGUIMIENTO', 'tipo_componente' => 'PROCESO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
    }
}

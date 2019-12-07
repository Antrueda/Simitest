<?php

use App\Models\Indicadores\InDocPregunta;
use Illuminate\Database\Seeder;

class InDocPreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = ['id' => 0, 'in_pregunta_id' => 40, 'in_base_fuente_id' => 0, 'sis_tabla_id' => 5, 'sis_campo_tabla_id' => 15, 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1, 'created_at' => '2019-12-02 18:02:36', 'updated_at' => '2019-12-02 18:02:36'];
        
        $dataxxxx['id'] = 1;
        $dataxxxx['in_base_fuente_id'] = 1;
        InDocPregunta::create($dataxxxx);
        
        $dataxxxx['id'] = 2;
        $dataxxxx['in_base_fuente_id'] = 2;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 3;
        $dataxxxx['in_base_fuente_id'] = 3;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 4;
        $dataxxxx['in_base_fuente_id'] = 4;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 5;
        $dataxxxx['in_base_fuente_id'] = 5;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 6;
        $dataxxxx['in_pregunta_id'] = 41;
        $dataxxxx['in_base_fuente_id'] = 6;
        $dataxxxx['sis_tabla_id'] = 4;
        $dataxxxx['sis_campo_tabla_id'] = 14;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 7;
        $dataxxxx['in_base_fuente_id'] = 7;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 8;
        $dataxxxx['in_base_fuente_id'] = 8;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 9;
        $dataxxxx['in_base_fuente_id'] = 9;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 10;
        $dataxxxx['in_pregunta_id'] = 49;
        $dataxxxx['in_base_fuente_id'] = 10;
        $dataxxxx['sis_tabla_id'] = 6;
        $dataxxxx['sis_campo_tabla_id'] = 16;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 11;
        $dataxxxx['in_base_fuente_id'] = 11;
        InDocPregunta::create($dataxxxx);

        $dataxxxx['id'] = 12;
        $dataxxxx['in_base_fuente_id'] = 12;
        InDocPregunta::create($dataxxxx);
    }
}

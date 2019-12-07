<?php

use App\Models\Indicadores\InActsoporte;
use Illuminate\Database\Seeder;

class InActsoportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = [
            'in_accion_gestion_id' => 1, 'sis_fsoporte_id' => 1,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1, 'created_at' => 1, 'updated_at' => 1,
        ];
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 2;
        InActsoporte::create($dataxxxx);

        $dataxxxx['in_accion_gestion_id'] = 2;
        $dataxxxx['sis_fsoporte_id'] = 3;
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 4;
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 5;
        InActsoporte::create($dataxxxx);

        $dataxxxx['in_accion_gestion_id'] = 3;
        $dataxxxx['sis_fsoporte_id'] = 11;
        InActsoporte::create($dataxxxx);

        $dataxxxx['in_accion_gestion_id'] = 4;
        $dataxxxx['sis_fsoporte_id'] = 4;
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 6;
        InActsoporte::create($dataxxxx);

        $dataxxxx['in_accion_gestion_id'] = 5;
        $dataxxxx['sis_fsoporte_id'] = 8;
        InActsoporte::create($dataxxxx);


        $dataxxxx['sis_fsoporte_id'] = 9;
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 3;
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 11;
        InActsoporte::create($dataxxxx);

        $dataxxxx['in_accion_gestion_id'] = 6;
        $dataxxxx['sis_fsoporte_id'] = 7;
        InActsoporte::create($dataxxxx);
        $dataxxxx['sis_fsoporte_id'] = 4;
        InActsoporte::create($dataxxxx);
        $dataxxxx['in_accion_gestion_id'] = 7;
        $dataxxxx['sis_fsoporte_id'] = 2;
        InActsoporte::create($dataxxxx);

        $dataxxxx['sis_fsoporte_id'] = 4;
        InActsoporte::create($dataxxxx);
        $dataxxxx['sis_fsoporte_id'] = 5;
        InActsoporte::create($dataxxxx);
        $dataxxxx['in_accion_gestion_id'] = 8;
        $dataxxxx['sis_fsoporte_id'] = 7;
        InActsoporte::create($dataxxxx);
    }
}

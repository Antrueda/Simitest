<?php

namespace database\seeds\Indicadores;

use App\Models\Indicadores\Administ\InAreaindi;
use Illuminate\Database\Seeder;

class InAreaindiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = [
            'area_id' => 6,
            'in_indicado_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ];
        InAreaindi::create($dataxxxx); // 1

        $dataxxxx['in_indicado_id'] = 2;
        InAreaindi::create($dataxxxx); // 2

        $dataxxxx['in_indicado_id'] = 3;
        InAreaindi::create($dataxxxx); // 3

        $dataxxxx['in_indicado_id'] = 4;
        InAreaindi::create($dataxxxx); // 4

        $dataxxxx['in_indicado_id'] = 5;
        InAreaindi::create($dataxxxx); // 5

        $dataxxxx['in_indicado_id'] = 6;
        InAreaindi::create($dataxxxx); // 6

        $dataxxxx['in_indicado_id'] = 7;
        InAreaindi::create($dataxxxx); // 7

        $dataxxxx['in_indicado_id'] = 8;
        InAreaindi::create($dataxxxx); // 8

        $dataxxxx['in_indicado_id'] = 9;
        InAreaindi::create($dataxxxx); // 9

        $dataxxxx['in_indicado_id'] = 10;
        InAreaindi::create($dataxxxx); // 10
    }
}

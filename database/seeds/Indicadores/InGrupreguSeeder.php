<?php

namespace Database\Seeds\Indicadores;

use App\Models\Indicadores\Administ\InGrupregu;
use Illuminate\Database\Seeder;

class InGrupreguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = [
            'in_libagrup_id' => 1, 'in_pregtcam_id' => 1, 'user_crea_id' => 1,
            'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_disparar_id'=>227
        ];
        InGrupregu::create($dataxxxx); // 1

        $dataxxxx['in_libagrup_id'] = 2;
        $dataxxxx['in_pregtcam_id'] = 2;
        InGrupregu::create($dataxxxx); // 2

        $dataxxxx['in_libagrup_id'] = 3;
        $dataxxxx['in_pregtcam_id'] = 3;
        InGrupregu::create($dataxxxx); // 3

        $dataxxxx['in_libagrup_id'] = 4;
        $dataxxxx['in_pregtcam_id'] = 4;
        InGrupregu::create($dataxxxx); // 4

        $dataxxxx['in_libagrup_id'] = 4;
        $dataxxxx['in_pregtcam_id'] = 5;
        InGrupregu::create($dataxxxx); // 5

        $dataxxxx['in_libagrup_id'] = 4;
        $dataxxxx['in_pregtcam_id'] = 6;
        InGrupregu::create($dataxxxx); // 6

        $dataxxxx['in_libagrup_id'] = 5;
        $dataxxxx['in_pregtcam_id'] = 7;
        InGrupregu::create($dataxxxx); // 7

        $dataxxxx['in_libagrup_id'] = 5;
        $dataxxxx['in_pregtcam_id'] = 8;
        InGrupregu::create($dataxxxx); // 8

        // $dataxxxx['in_libagrup_id'] = 6;
        // $dataxxxx['in_pregtcam_id'] = 7;
        // InGrupregu::create($dataxxxx); // 9

        // $dataxxxx['in_libagrup_id'] = 6;
        // $dataxxxx['in_pregtcam_id'] = 9;
        // InGrupregu::create($dataxxxx); // 10

        // $dataxxxx['in_libagrup_id'] = 7;
        // $dataxxxx['in_pregtcam_id'] = 7;
        // InGrupregu::create($dataxxxx); // 11

        // $dataxxxx['in_libagrup_id'] = 7;
        // $dataxxxx['in_pregtcam_id'] = 10;
        // InGrupregu::create($dataxxxx); // 12

        // $dataxxxx['in_libagrup_id'] = 8;
        // $dataxxxx['in_pregtcam_id'] = 11;
        // InGrupregu::create($dataxxxx); // 13

        // $dataxxxx['in_libagrup_id'] = 8;
        // $dataxxxx['in_pregtcam_id'] = 12;
        // InGrupregu::create($dataxxxx); // 14

        // $dataxxxx['in_libagrup_id'] = 9;
        // $dataxxxx['in_pregtcam_id'] = 13;
        // InGrupregu::create($dataxxxx); // 15

        // $dataxxxx['in_libagrup_id'] = 10;
        // $dataxxxx['in_pregtcam_id'] = 14;
        // InGrupregu::create($dataxxxx); // 16

        // $dataxxxx['in_libagrup_id'] = 11;
        // $dataxxxx['in_pregtcam_id'] = 15;
        // InGrupregu::create($dataxxxx); // 17

        // $dataxxxx['in_libagrup_id'] = 12;
        // $dataxxxx['in_pregtcam_id'] = 11;
        // InGrupregu::create($dataxxxx); // 18

        // $dataxxxx['in_libagrup_id'] = 12;
        // $dataxxxx['in_pregtcam_id'] = 12;
        // InGrupregu::create($dataxxxx); // 19

        // $dataxxxx['in_libagrup_id'] = 13;
        // $dataxxxx['in_pregtcam_id'] = 15;
        // InGrupregu::create($dataxxxx); // 20

        // $dataxxxx['in_libagrup_id'] = 13;
        // $dataxxxx['in_pregtcam_id'] = 16;
        // InGrupregu::create($dataxxxx); // 21

        // $dataxxxx['in_libagrup_id'] = 14;
        // $dataxxxx['in_pregtcam_id'] = 17;
        // InGrupregu::create($dataxxxx); // 22
    }
}

<?php

namespace Database\Seeds\Indicadores;

use App\Models\Indicadores\Administ\InIndiliba;
use Illuminate\Database\Seeder;

class InIndilibaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = [
            'in_linea_base_id' => 1,
            'in_areaindi_id' => 1,
            'prm_nivelxxx_id' => 938,
            'prm_categori_id' => 247,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ];
        // LINEAS BASE DEL INIDICADOR 1
        InIndiliba::create($dataxxxx); // 1

        $dataxxxx['in_linea_base_id'] = 2;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 300;
        InIndiliba::create($dataxxxx); // 2

        $dataxxxx['in_linea_base_id'] = 3;
        InIndiliba::create($dataxxxx); // 3

        // LINEAS BASE DEL INIDICADOR 2
        $dataxxxx['in_areaindi_id'] = 2;
        $dataxxxx['in_linea_base_id'] = 4;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 246;
        InIndiliba::create($dataxxxx); // 4

        $dataxxxx['in_linea_base_id'] = 5;
        $dataxxxx['prm_nivelxxx_id'] = 940;
        $dataxxxx['prm_categori_id'] = 301;
        InIndiliba::create($dataxxxx); // 5

        $dataxxxx['in_linea_base_id'] = 6;
        InIndiliba::create($dataxxxx); // 6

        // LINEAS BASE DEL INIDICADOR 3
        $dataxxxx['in_areaindi_id'] = 3;
        $dataxxxx['in_linea_base_id'] = 7;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 246;
        InIndiliba::create($dataxxxx); // 7

        $dataxxxx['in_linea_base_id'] = 8;
        InIndiliba::create($dataxxxx); // 8

        $dataxxxx['in_linea_base_id'] = 9;
        InIndiliba::create($dataxxxx); // 9

        $dataxxxx['in_linea_base_id'] = 10;
        $dataxxxx['prm_nivelxxx_id'] = 940;
        $dataxxxx['prm_categori_id'] = 301;
        InIndiliba::create($dataxxxx); // 10

        $dataxxxx['in_linea_base_id'] = 11;
        InIndiliba::create($dataxxxx); // 11

        // LINEAS BASE DEL INIDICADOR 4
        $dataxxxx['in_areaindi_id'] = 4;
        $dataxxxx['in_linea_base_id'] = 12;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 248;
        InIndiliba::create($dataxxxx); // 12

        // LINEAS BASE DEL INIDICADOR 5
        $dataxxxx['in_areaindi_id'] = 5;
        $dataxxxx['in_linea_base_id'] = 13;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 248;
        InIndiliba::create($dataxxxx); // 13

        $dataxxxx['in_linea_base_id'] = 14;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 14

        // LINEAS BASE DEL INIDICADOR 6
        $dataxxxx['in_areaindi_id'] = 6;
        $dataxxxx['in_linea_base_id'] = 15;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 248;
        InIndiliba::create($dataxxxx); // 15

        $dataxxxx['in_linea_base_id'] = 16;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 16

        $dataxxxx['in_linea_base_id'] = 17;
        $dataxxxx['prm_nivelxxx_id'] = 940;
        $dataxxxx['prm_categori_id'] = 518;
        InIndiliba::create($dataxxxx); // 17


        $dataxxxx['in_linea_base_id'] = 18;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 18

        // LINEAS BASE DEL INIDICADOR 7
        $dataxxxx['in_areaindi_id'] = 7;
        $dataxxxx['in_linea_base_id'] = 19;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 19

        $dataxxxx['in_linea_base_id'] = 20;
        $dataxxxx['prm_nivelxxx_id'] = 940;
        $dataxxxx['prm_categori_id'] = 518;
        InIndiliba::create($dataxxxx); // 20

        $dataxxxx['in_linea_base_id'] = 21;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 248;
        InIndiliba::create($dataxxxx); // 21

        // LINEAS BASE DEL INIDICADOR 8
        $dataxxxx['in_areaindi_id'] = 8;
        $dataxxxx['in_linea_base_id'] = 22;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 22

        $dataxxxx['in_linea_base_id'] = 23;
        $dataxxxx['prm_nivelxxx_id'] = 940;
        $dataxxxx['prm_categori_id'] = 840;
        InIndiliba::create($dataxxxx); // 23

        $dataxxxx['in_linea_base_id'] = 24;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 248;
        InIndiliba::create($dataxxxx); // 24

        // LINEAS BASE DEL INIDICADOR 9
        $dataxxxx['in_areaindi_id'] = 9;
        $dataxxxx['in_linea_base_id'] = 25;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 25

        $dataxxxx['in_linea_base_id'] = 26;
        $dataxxxx['prm_nivelxxx_id'] = 938;
        $dataxxxx['prm_categori_id'] = 248;
        InIndiliba::create($dataxxxx); // 26

        // LINEAS BASE DEL INIDICADOR 10
        $dataxxxx['in_areaindi_id'] = 10;
        $dataxxxx['in_linea_base_id'] = 27;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 27

        $dataxxxx['in_linea_base_id'] = 28;
        $dataxxxx['prm_nivelxxx_id'] = 939;
        $dataxxxx['prm_categori_id'] = 302;
        InIndiliba::create($dataxxxx); // 28


    }
}

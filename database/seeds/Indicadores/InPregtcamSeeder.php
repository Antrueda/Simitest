<?php

namespace database\seeds\Indicadores;

use App\Models\Indicadores\Administ\InPregtcam;
use Illuminate\Database\Seeder;

class InPregtcamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // VSI
        $dataxxxx = [
            'sis_tcampo_id' => 680, 'temacombo_id' => 417, 'user_crea_id' => 1,
            'user_edita_id' => 1, 'sis_esta_id' => 1,
        ];
        InPregtcam::create($dataxxxx); // 1

        $dataxxxx['sis_tcampo_id'] = 682;
        $dataxxxx['temacombo_id'] = 418;
        InPregtcam::create($dataxxxx); // 2

        $dataxxxx['sis_tcampo_id'] = 595;
        $dataxxxx['temacombo_id'] = 194;
        InPregtcam::create($dataxxxx); // 3

        // FI RESIDENCIA
        $dataxxxx['sis_tcampo_id'] = 383;
        $dataxxxx['temacombo_id'] = 419;
     
        InPregtcam::create($dataxxxx); // 4
        $dataxxxx['sis_tcampo_id'] = 384;
        $dataxxxx['temacombo_id'] = 145; // para prm_tipoblaci_id= 650 y para el restos es 34
        InPregtcam::create($dataxxxx); // 5

        //REDES DE APOYO ACTUALES 
        $dataxxxx['sis_tcampo_id'] = 377;
        $dataxxxx['temacombo_id'] = 88; // dispara si no hay respuesta
        InPregtcam::create($dataxxxx); // 6

        // VSI REDES SOCIALES DE APOYO
        $dataxxxx['sis_tcampo_id'] = 666;
        $dataxxxx['temacombo_id'] = 420;
        InPregtcam::create($dataxxxx); // 7

        $dataxxxx['sis_tcampo_id'] = 657;
        $dataxxxx['temacombo_id'] = 299; //dispara si no hay respuesta
        InPregtcam::create($dataxxxx); // 8

        // $dataxxxx['sis_tcampo_id'] = 559;
        // $dataxxxx['temacombo_id'] = 299; //dispara si no hay respuesta
        // InPregtcam::create($dataxxxx); // 9


    }
}

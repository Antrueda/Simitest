<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EvasionVestuariosTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('evasion_vestuarios')->delete();
        
        \DB::table('evasion_vestuarios')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:12:49',
                'created_at' => '2021-05-13 12:12:49',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '1',
                'color' => 'NEGRO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1650',
                'id' => '5',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:16:25',
                'created_at' => '2021-05-13 12:16:25',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '2',
                'color' => 'BLANCO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1646',
                'id' => '7',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:05:46',
                'created_at' => '2021-05-13 15:05:46',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '5',
                'color' => 'NEGRO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1646',
                'id' => '15',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:16:35',
                'created_at' => '2021-05-13 15:16:35',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '6',
                'color' => 'ROJA',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1646',
                'id' => '18',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:17:08',
                'created_at' => '2021-05-13 15:17:08',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '6',
                'color' => 'NEGRO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1641',
                'id' => '20',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:25:19',
                'created_at' => '2021-05-13 15:25:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '7',
                'color' => 'MORADO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1644',
                'id' => '21',
            ),
            6 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:25:37',
                'created_at' => '2021-05-13 15:25:37',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '7',
                'color' => 'BLANCO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1646',
                'id' => '22',
            ),
            7 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:09:41',
                'created_at' => '2021-05-13 12:09:41',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '3',
                'color' => 'NEGRO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1650',
                'id' => '2',
            ),
            8 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:12:29',
                'created_at' => '2021-05-13 12:12:29',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '1',
                'color' => 'BLANCO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1646',
                'id' => '4',
            ),
            9 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:13:09',
                'created_at' => '2021-05-13 12:13:09',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '1',
                'color' => 'NEGRO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1641',
                'id' => '6',
            ),
            10 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:17:05',
                'created_at' => '2021-05-13 12:17:05',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '2',
                'color' => 'NEGRO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1641',
                'id' => '9',
            ),
            11 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:05:31',
                'created_at' => '2021-05-13 15:05:31',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '5',
                'color' => 'MORADO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1644',
                'id' => '14',
            ),
            12 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:06:01',
                'created_at' => '2021-05-13 15:06:01',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '5',
                'color' => 'GRIS',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1649',
                'id' => '16',
            ),
            13 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:06:20',
                'created_at' => '2021-05-13 15:06:20',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '5',
                'color' => 'BLANCO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1641',
                'id' => '17',
            ),
            14 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:25:52',
                'created_at' => '2021-05-13 15:25:52',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '7',
                'color' => 'BEIGE',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1649',
                'id' => '23',
            ),
            15 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:26:05',
                'created_at' => '2021-05-13 15:26:05',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '7',
                'color' => 'NEGRO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1640',
                'id' => '24',
            ),
            16 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:16:49',
                'created_at' => '2021-05-13 12:16:49',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '2',
                'color' => 'GRIS',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1650',
                'id' => '8',
            ),
            17 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 13:08:57',
                'created_at' => '2021-05-13 13:08:57',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '4',
                'color' => 'NEGRO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1645',
                'id' => '10',
            ),
            18 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 13:09:46',
                'created_at' => '2021-05-13 13:09:46',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '4',
                'color' => 'AZUL',
                'material' => 'JEAN',
                'prm_vestuario_id' => '1647',
                'id' => '11',
            ),
            19 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 13:10:10',
                'created_at' => '2021-05-13 13:10:10',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '4',
                'color' => 'NEGRO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1650',
                'id' => '12',
            ),
            20 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 13:10:23',
                'created_at' => '2021-05-13 13:10:23',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '4',
                'color' => 'NEGRO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1641',
                'id' => '13',
            ),
            21 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:09:06',
                'created_at' => '2021-05-13 12:09:06',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '3',
                'color' => 'BEIGE',
                'material' => 'TELA',
                'prm_vestuario_id' => '1646',
                'id' => '1',
            ),
            22 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:10:03',
                'created_at' => '2021-05-13 12:10:03',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '3',
                'color' => 'NEGRO',
                'material' => 'TELA',
                'prm_vestuario_id' => '1641',
                'id' => '3',
            ),
            23 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 15:16:50',
                'created_at' => '2021-05-13 15:16:50',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '6',
                'color' => 'NEGRO',
                'material' => 'ALGODON',
                'prm_vestuario_id' => '1650',
                'id' => '19',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FiCsdvsisTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fi_csdvsis')->delete();
        
        \DB::table('fi_csdvsis')->insert(array (
            0 => 
            array (
                'updated_vsi' => NULL,
                'created_vsi' => NULL,
                'vsi_id' => NULL,
                'id' => '61',
                'deleted_at' => NULL,
                'updated_at' => '2021-05-27 14:13:54',
                'created_at' => '2021-05-27 14:13:54',
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'fi_datos_basico_id' => '1495',
                'updated_csd' => NULL,
                'created_csd' => NULL,
                'csd_id' => '95',
            ),
            1 => 
            array (
                'updated_vsi' => NULL,
                'created_vsi' => NULL,
                'vsi_id' => NULL,
                'id' => '81',
                'deleted_at' => NULL,
                'updated_at' => '2021-06-02 18:57:51',
                'created_at' => '2021-06-02 18:57:51',
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'fi_datos_basico_id' => '1676',
                'updated_csd' => NULL,
                'created_csd' => NULL,
                'csd_id' => '96',
            ),
            2 => 
            array (
                'updated_vsi' => NULL,
                'created_vsi' => NULL,
                'vsi_id' => NULL,
                'id' => '1',
                'deleted_at' => NULL,
                'updated_at' => '2021-05-18 18:45:50',
                'created_at' => '2021-05-18 18:45:50',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'fi_datos_basico_id' => '1398',
                'updated_csd' => NULL,
                'created_csd' => NULL,
                'csd_id' => '94',
            ),
            3 => 
            array (
                'updated_vsi' => NULL,
                'created_vsi' => NULL,
                'vsi_id' => NULL,
                'id' => '41',
                'deleted_at' => NULL,
                'updated_at' => '2021-05-27 10:33:55',
                'created_at' => '2021-05-27 10:33:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'fi_datos_basico_id' => '1493',
                'updated_csd' => NULL,
                'created_csd' => NULL,
                'csd_id' => '93',
            ),
        ));
        
        
    }
}
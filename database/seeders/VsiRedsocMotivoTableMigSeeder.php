<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VsiRedsocMotivoTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vsi_redsoc_motivo')->delete();
        
        \DB::table('vsi_redsoc_motivo')->insert(array (
            0 => 
            array (
                'sys_nc00011$' => '49',
                'sys_nc00010$' => '32',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '49',
                'parametro_id' => '32',
                'id' => '1',
            ),
            1 => 
            array (
                'sys_nc00011$' => '113',
                'sys_nc00010$' => '32',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '113',
                'parametro_id' => '32',
                'id' => '2',
            ),
            2 => 
            array (
                'sys_nc00011$' => '151',
                'sys_nc00010$' => '32',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '151',
                'parametro_id' => '32',
                'id' => '3',
            ),
            3 => 
            array (
                'sys_nc00011$' => '160',
                'sys_nc00010$' => '32',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '160',
                'parametro_id' => '32',
                'id' => '4',
            ),
            4 => 
            array (
                'sys_nc00011$' => '278',
                'sys_nc00010$' => '1803',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '278',
                'parametro_id' => '1803',
                'id' => '5',
            ),
            5 => 
            array (
                'sys_nc00011$' => '339',
                'sys_nc00010$' => '139',
                'deleted_at' => NULL,
                'updated_at' => NULL,
                'created_at' => NULL,
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'vsi_redsocial_id' => '339',
                'parametro_id' => '139',
                'id' => '6',
            ),
        ));
        
        
    }
}
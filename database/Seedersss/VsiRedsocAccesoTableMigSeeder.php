<?php



use Illuminate\Database\Seeder;

class VsiRedsocAccesoTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vsi_redsoc_acceso')->delete();
        
        \DB::table('vsi_redsoc_acceso')->insert(array (
            0 => 
            array (
                'sys_nc00011$' => '20',
                'sys_nc00010$' => '297',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '20',
                'parametro_id' => '297',
                'id' => '1',
            ),
            1 => 
            array (
                'sys_nc00011$' => '2',
                'sys_nc00010$' => '955',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '2',
                'parametro_id' => '955',
                'id' => '2',
            ),
            2 => 
            array (
                'sys_nc00011$' => '4',
                'sys_nc00010$' => '955',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '4',
                'parametro_id' => '955',
                'id' => '3',
            ),
            3 => 
            array (
                'sys_nc00011$' => '46',
                'sys_nc00010$' => '1804',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:27',
                'created_at' => '2021-04-27 12:01:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'vsi_redsocial_id' => '46',
                'parametro_id' => '1804',
                'id' => '4',
            ),
            4 => 
            array (
                'sys_nc00011$' => '343',
                'sys_nc00010$' => '1038',
                'deleted_at' => NULL,
                'updated_at' => NULL,
                'created_at' => NULL,
                'sis_esta_id' => '1',
                'user_edita_id' => '1989',
                'user_crea_id' => '1989',
                'vsi_redsocial_id' => '343',
                'parametro_id' => '1038',
                'id' => '5',
            ),
        ));
        
        
    }
}
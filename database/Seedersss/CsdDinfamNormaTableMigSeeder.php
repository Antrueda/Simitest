<?php



use Illuminate\Database\Seeder;

class CsdDinfamNormaTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('csd_dinfam_norma')->delete();
        
        \DB::table('csd_dinfam_norma')->insert(array (
            0 => 
            array (
                'sys_nc00012$' => '93',
                'sys_nc00011$' => '771',
                'deleted_at' => NULL,
                'updated_at' => NULL,
                'created_at' => NULL,
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'prm_tipofuen_id' => '2315',
                'csd_dinfamiliar_id' => '93',
                'parametro_id' => '771',
                'id' => '2',
            ),
            1 => 
            array (
                'sys_nc00012$' => '94',
                'sys_nc00011$' => '771',
                'deleted_at' => NULL,
                'updated_at' => NULL,
                'created_at' => NULL,
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'prm_tipofuen_id' => '2315',
                'csd_dinfamiliar_id' => '94',
                'parametro_id' => '771',
                'id' => '3',
            ),
            2 => 
            array (
                'sys_nc00012$' => '95',
                'sys_nc00011$' => '771',
                'deleted_at' => NULL,
                'updated_at' => NULL,
                'created_at' => NULL,
                'sis_esta_id' => '1',
                'user_edita_id' => '45',
                'user_crea_id' => '45',
                'prm_tipofuen_id' => '2315',
                'csd_dinfamiliar_id' => '95',
                'parametro_id' => '771',
                'id' => '4',
            ),
        ));
        
        
    }
}
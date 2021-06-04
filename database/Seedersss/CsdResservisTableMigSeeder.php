<?php



use Illuminate\Database\Seeder;

class CsdResservisTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('csd_resservis')->delete();
        
        \DB::table('csd_resservis')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:12:01',
                'created_at' => '2021-05-25 10:12:01',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'prm_legalxxx_id' => '227',
                'prm_servicio_id' => '420',
                'id' => '4',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:10:44',
                'created_at' => '2021-05-25 10:10:44',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'prm_legalxxx_id' => '227',
                'prm_servicio_id' => '417',
                'id' => '1',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:11:19',
                'created_at' => '2021-05-25 10:11:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'prm_legalxxx_id' => '227',
                'prm_servicio_id' => '419',
                'id' => '2',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:11:37',
                'created_at' => '2021-05-25 10:11:37',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'prm_legalxxx_id' => '228',
                'prm_servicio_id' => '418',
                'id' => '3',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:12:42',
                'created_at' => '2021-05-25 10:12:42',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'prm_legalxxx_id' => '228',
                'prm_servicio_id' => '421',
                'id' => '5',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:13:05',
                'created_at' => '2021-05-25 10:13:05',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'prm_legalxxx_id' => '227',
                'prm_servicio_id' => '422',
                'id' => '6',
            ),
        ));
        
        
    }
}
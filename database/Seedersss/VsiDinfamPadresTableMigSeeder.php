<?php



use Illuminate\Database\Seeder;

class VsiDinfamPadresTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vsi_dinfam_padres')->delete();
        
        \DB::table('vsi_dinfam_padres')->insert(array (
            0 => 
            array (
                'updated_at' => '2021-05-16 20:30:31',
                'created_at' => '2021-05-16 20:30:31',
                'sis_esta_id' => '1',
                'user_edita_id' => '1436',
                'user_crea_id' => '1436',
                'prm_separa_id' => NULL,
                'hijo' => '5',
                'ano' => '12',
                'mes' => NULL,
                'dia' => NULL,
                'prm_convive_id' => '227',
                'vsi_id' => '337',
                'id' => '1',
            ),
            1 => 
            array (
                'updated_at' => '2021-05-25 08:47:33',
                'created_at' => '2021-05-25 08:47:33',
                'sis_esta_id' => '1',
                'user_edita_id' => '1989',
                'user_crea_id' => '1989',
                'prm_separa_id' => '967',
                'hijo' => '1',
                'ano' => '17',
                'mes' => '4',
                'dia' => '4',
                'prm_convive_id' => '227',
                'vsi_id' => '348',
                'id' => '2',
            ),
        ));
        
        
    }
}
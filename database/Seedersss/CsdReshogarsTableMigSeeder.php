<?php



use Illuminate\Database\Seeder;

class CsdReshogarsTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('csd_reshogars')->delete();
        
        \DB::table('csd_reshogars')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:14:21',
                'created_at' => '2021-05-25 10:14:21',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'espaciocant' => '1',
                'prm_espacio_id' => '425',
                'id' => '1',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:14:38',
                'created_at' => '2021-05-25 10:14:38',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'espaciocant' => '1',
                'prm_espacio_id' => '456',
                'id' => '2',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-25 10:15:06',
                'created_at' => '2021-05-25 10:15:06',
                'sis_esta_id' => '1',
                'user_edita_id' => '1196',
                'user_crea_id' => '1196',
                'csd_residencia_id' => '94',
                'espaciocant' => '1',
                'prm_espacio_id' => '457',
                'id' => '3',
            ),
        ));
        
        
    }
}
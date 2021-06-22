<?php



use Illuminate\Database\Seeder;

class AgRelacionsTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ag_relacions')->delete();
        
        \DB::table('ag_relacions')->insert(array (
            0 => 
            array (
                'updated_at' => '2021-05-27 09:12:12',
                'created_at' => '2021-05-27 09:12:12',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'i_cantidad' => '6',
                'ag_recurso_id' => '61',
                'ag_actividad_id' => '2',
                'id' => '1',
            ),
            1 => 
            array (
                'updated_at' => '2021-06-01 18:23:34',
                'created_at' => '2021-06-01 18:23:34',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                'i_cantidad' => '1',
                'ag_recurso_id' => '91',
                'ag_actividad_id' => '8',
                'id' => '6',
            ),
            2 => 
            array (
                'updated_at' => '2021-06-02 11:13:00',
                'created_at' => '2021-06-02 11:13:00',
                'sis_esta_id' => '1',
                'user_edita_id' => '1436',
                'user_crea_id' => '1436',
                'i_cantidad' => '1',
                'ag_recurso_id' => '79',
                'ag_actividad_id' => '3',
                'id' => '7',
            ),
            3 => 
            array (
                'updated_at' => '2021-06-01 13:56:44',
                'created_at' => '2021-06-01 13:56:44',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                'i_cantidad' => '15',
                'ag_recurso_id' => '101',
                'ag_actividad_id' => '5',
                'id' => '2',
            ),
            4 => 
            array (
                'updated_at' => '2021-06-01 17:19:28',
                'created_at' => '2021-06-01 17:19:28',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                'i_cantidad' => '15',
                'ag_recurso_id' => '61',
                'ag_actividad_id' => '7',
                'id' => '4',
            ),
            5 => 
            array (
                'updated_at' => '2021-06-01 17:20:17',
                'created_at' => '2021-06-01 17:20:17',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                'i_cantidad' => '15',
                'ag_recurso_id' => '75',
                'ag_actividad_id' => '7',
                'id' => '5',
            ),
            6 => 
            array (
                'updated_at' => '2021-06-01 15:05:41',
                'created_at' => '2021-06-01 15:05:41',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                'i_cantidad' => '1',
                'ag_recurso_id' => '148',
                'ag_actividad_id' => '6',
                'id' => '3',
            ),
            7 => 
            array (
                'updated_at' => '2021-06-03 10:58:17',
                'created_at' => '2021-06-03 10:58:17',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'i_cantidad' => '1',
                'ag_recurso_id' => '82',
                'ag_actividad_id' => '10',
                'id' => '8',
            ),
        ));
        
        
    }
}
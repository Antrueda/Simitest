<?php



use Illuminate\Database\Seeder;

class AgCarguedocsTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ag_carguedocs')->delete();
        
        \DB::table('ag_carguedocs')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-01 15:12:30',
                'created_at' => '2021-06-01 15:12:30',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                's_ruta' => 'Archivos/talleres/soportes/talleres_2021_06_01_15_06_30.pdf',
                'i_prm_documento_id' => '2507',
                'ag_actividad_id' => '6',
                'id' => '2',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-03 11:01:39',
                'created_at' => '2021-06-03 11:01:39',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                's_ruta' => 'Archivos/talleres/soportes/talleres_2021_06_03_11_06_39.pdf',
                'i_prm_documento_id' => '2507',
                'ag_actividad_id' => '10',
                'id' => '6',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-01 17:20:45',
                'created_at' => '2021-06-01 17:20:45',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                's_ruta' => 'Archivos/talleres/soportes/talleres_2021_06_01_17_06_45.pdf',
                'i_prm_documento_id' => '2507',
                'ag_actividad_id' => '7',
                'id' => '3',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-01 18:37:41',
                'created_at' => '2021-06-01 18:37:41',
                'sis_esta_id' => '1',
                'user_edita_id' => '2132',
                'user_crea_id' => '2132',
                's_ruta' => 'Archivos/talleres/soportes/talleres_2021_06_01_18_06_41.pdf',
                'i_prm_documento_id' => '2507',
                'ag_actividad_id' => '8',
                'id' => '4',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-06-02 11:14:37',
                'created_at' => '2021-06-02 11:14:37',
                'sis_esta_id' => '1',
                'user_edita_id' => '1436',
                'user_crea_id' => '1436',
                's_ruta' => 'Archivos/talleres/soportes/talleres_2021_06_02_11_06_36.pdf',
                'i_prm_documento_id' => '2508',
                'ag_actividad_id' => '3',
                'id' => '5',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-27 09:16:00',
                'created_at' => '2021-05-27 09:16:00',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                's_ruta' => 'Archivos/talleres/soportes/talleres_2021_05_27_09_05_00.pdf',
                'i_prm_documento_id' => '2507',
                'ag_actividad_id' => '2',
                'id' => '1',
            ),
        ));
        
        
    }
}
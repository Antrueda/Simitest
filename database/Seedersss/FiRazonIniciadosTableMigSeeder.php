<?php



use Illuminate\Database\Seeder;

class FiRazonIniciadosTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fi_razon_iniciados')->delete();
        
        \DB::table('fi_razon_iniciados')->insert(array (
            0 => 
            array (
                'updated_at' => '2021-05-20 22:57:15',
                'created_at' => '2021-05-20 22:57:15',
                'sis_esta_id' => '1',
                'user_edita_id' => '2090',
                'user_crea_id' => '2090',
                'i_prm_iniciado_id' => '673',
                'fi_situacion_especial_id' => '429',
                'id' => '3',
            ),
            1 => 
            array (
                'updated_at' => '2021-05-18 15:24:30',
                'created_at' => '2021-05-18 15:24:30',
                'sis_esta_id' => '1',
                'user_edita_id' => '1559',
                'user_crea_id' => '1559',
                'i_prm_iniciado_id' => '335',
                'fi_situacion_especial_id' => '412',
                'id' => '1',
            ),
            2 => 
            array (
                'updated_at' => '2021-05-18 15:24:30',
                'created_at' => '2021-05-18 15:24:30',
                'sis_esta_id' => '1',
                'user_edita_id' => '1559',
                'user_crea_id' => '1559',
                'i_prm_iniciado_id' => '665',
                'fi_situacion_especial_id' => '412',
                'id' => '2',
            ),
        ));
        
        
    }
}
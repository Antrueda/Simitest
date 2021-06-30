<?php



use Illuminate\Database\Seeder;

class FiVictimaEscnnasTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fi_victima_escnnas')->delete();
        
        \DB::table('fi_victima_escnnas')->insert(array (
            0 => 
            array (
                'fi_situacion_especial_id' => '429',
                'id' => '1',
                'updated_at' => '2021-05-20 22:57:15',
                'created_at' => '2021-05-20 22:57:15',
                'sis_esta_id' => '1',
                'user_edita_id' => '2090',
                'user_crea_id' => '2090',
                'i_prm_victima_escnna_id' => '659',
            ),
        ));
        
        
    }
}
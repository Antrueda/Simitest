<?php



use Illuminate\Database\Seeder;

class EvasionParentescosTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('evasion_parentescos')->delete();
        
        \DB::table('evasion_parentescos')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:14:41',
                'created_at' => '2021-05-13 12:14:41',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '1',
                's_telefono' => '3132495777',
                'direccion_familiar' => 'FACATATIVA',
                'segundo_nombre' => NULL,
                'primer_nombre' => 'HEIDY',
                'segundo_apellido' => NULL,
                'primer_apellido' => 'SALVO',
                'prm_parentezco_id' => '771',
                'id' => '2',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:11:12',
                'created_at' => '2021-05-13 12:11:12',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '3',
                's_telefono' => '3046760549',
                'direccion_familiar' => 'VALLEDUPAR',
                'segundo_nombre' => NULL,
                'primer_nombre' => 'MARTIN',
                'segundo_apellido' => NULL,
                'primer_apellido' => 'OSORIO',
                'prm_parentezco_id' => '770',
                'id' => '1',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 12:18:46',
                'created_at' => '2021-05-13 12:18:46',
                'sis_esta_id' => '1',
                'user_edita_id' => '398',
                'user_crea_id' => '398',
                'reporte_evasion_id' => '2',
                's_telefono' => '3132952143',
                'direccion_familiar' => 'BOGOTA',
                'segundo_nombre' => NULL,
                'primer_nombre' => 'ERIKA',
                'segundo_apellido' => NULL,
                'primer_apellido' => 'ACOSTA',
                'prm_parentezco_id' => '793',
                'id' => '3',
            ),
        ));
        
        
    }
}
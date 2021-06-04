<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreasTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'sys_nc00012$' => 'educacion',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:55',
                'created_at' => '2021-04-27 11:59:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'EDUCACION',
                'id' => '1',
            ),
            1 => 
            array (
                'sys_nc00012$' => 'emprender',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:55',
                'created_at' => '2021-04-27 11:59:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'EMPRENDER',
                'id' => '2',
            ),
            2 => 
            array (
                'sys_nc00012$' => 'emprender ac',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:55',
                'created_at' => '2021-04-27 11:59:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'EMPRENDER AC',
                'id' => '3',
            ),
            3 => 
            array (
                'sys_nc00012$' => 'espiritualidad',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:55',
                'created_at' => '2021-04-27 11:59:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'ESPIRITUALIDAD',
                'id' => '4',
            ),
            4 => 
            array (
                'sys_nc00012$' => 'salud',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:55',
                'created_at' => '2021-04-27 11:59:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'SALUD',
                'id' => '5',
            ),
            5 => 
            array (
                'sys_nc00012$' => 'sicosocial',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:55',
                'created_at' => '2021-04-27 11:59:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'SICOSOCIAL',
                'id' => '6',
            ),
            6 => 
            array (
                'sys_nc00012$' => 'sociolegal',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:56',
                'created_at' => '2021-04-27 11:59:56',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'SL',
                'nombre' => 'SOCIOLEGAL',
                'id' => '7',
            ),
            7 => 
            array (
                'sys_nc00012$' => 'transversales',
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 11:59:56',
                'created_at' => '2021-04-27 11:59:56',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => NULL,
                'descripcion' => NULL,
                'contexto' => 'BA',
                'nombre' => 'TRANSVERSALES',
                'id' => '8',
            ),
        ));
        
        
    }
}
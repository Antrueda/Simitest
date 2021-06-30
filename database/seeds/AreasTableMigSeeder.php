<?php

use App\Models\Indicadores\Area;
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
        


           Area::create([
               
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
                'id' => '1']);
            
           Area::create([
              
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
                'id' => '2']);
            
           Area::create([
               
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
                'id' => '3']);
            
           Area::create([
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
                'id' => '4']);
            
           Area::create([
              
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
                'id' => '5']);
            
           Area::create([
               
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
                'id' => '6']);
            
           Area::create([
                
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
                'id' => '7']);
            
           Area::create([
               
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
                'id' => '8']);
        
        
        
    }
}
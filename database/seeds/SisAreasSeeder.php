<?php

use App\Models\Indicadores\Area;
use App\Models\User;
use Illuminate\Database\Seeder;

class SisAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1];


        Area::create(['id' => 1, 'nombre' => 'EDUCACION', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //1
        Area::create(['id' => 2, 'nombre' => 'EMPRENDER', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //2
        Area::create(['id' => 3, 'nombre' => 'EMPRENDER AC', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //3
        Area::create(['id' => 4, 'nombre' => 'ESPIRITUALIDAD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //4
        Area::create(['id' => 5, 'nombre' => 'SALUD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //5
        Area::create(['id' => 6, 'nombre' => 'SICOSOCIAL', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //6
        Area::create(['id' => 7, 'nombre' => 'SOCIOLEGAL', 'contexto' => 'SL', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //7
        Area::create(['id' => 8, 'nombre' => 'TRANSVERSALES', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //8

        $super =User::where('id',1)->first();
        $super->areas()->sync([
            6 => $camposmagicos,
            7 => $camposmagicos,
            8 => $camposmagicos,
          ]);
          $super =User::where('id',2)->first();
          $super->areas()->sync([
            6 => $camposmagicos,
            7 => $camposmagicos,
            8 => $camposmagicos,
          ]);

          $super =User::where('id',3)->first();
          $super->areas()->sync([
            6 => $camposmagicos,
            7 => $camposmagicos,
            8 => $camposmagicos,
          ]);


          $super =User::where('id',10)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);

          $super =User::where('id',11)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);
          $super =User::where('id',12)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);
          $super =User::where('id',13)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);
          $super =User::where('id',14)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);

          $super =User::where('id',15)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);

          $super =User::where('id',16)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);

          $super =User::where('id',17)->first();
          $super->areas()->sync([
             8 => $camposmagicos,
          ]);
          $super =User::where('id',904)->first();
          $super->areas()->sync([
            6 => $camposmagicos,
            7 => $camposmagicos,
            8 => $camposmagicos,
          ]);




    }
}

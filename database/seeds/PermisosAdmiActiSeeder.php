<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosAdmiActiSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $leerxxxx = 'Permiso que permite ver el contenido para: ';
        $crearxxx = 'Permiso que permite crear registro para: ';
        $editarxx = 'Permiso que permite editar registro para: ';
        $borrarxx = 'Permiso que permite inactivar registro para: ';
        $moduloxx = 'Permiso que habilita el contenido del: ';
        $activarx = 'Permiso que permite activar registro para: ';

        /** Módulo administración planillas de asistencia (diaria y semanal) */
        // $permisox = 'planasds';
        // $compleme = 'Módulo administración planillas de asistencia';
        // Permission::create([
        //     'name' => $permisox . '-admimodu',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $moduloxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        /** Módulo administración de actividades */
        $permisox = 'adacmodu';
        $compleme = 'Módulo administración de actividades';
        Permission::create([
            'name' => $permisox . '-moduloxx',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        // //permisos para el crud de tipos de actividad
        // $permisox = 'admitiac';
        // $compleme = 'Tipos de actividad';
        // Permission::create([
        //     'name' => $permisox . '-leerxxxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $leerxxxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-crearxxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $crearxxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-editarxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $editarxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-borrarxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $borrarxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-activarx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $activarx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // // permisos para el crud de actividades
        // $permisox = 'admiacti';
        // $compleme = 'Actividades';
        // Permission::create([
        //     'name' => $permisox . '-leerxxxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $leerxxxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-crearxxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $crearxxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-editarxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $editarxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-borrarxx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $borrarxx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);

        // Permission::create([
        //     'name' => $permisox . '-activarx',
        //     'sis_pestania_id' => 1,
        //     'descripcion' => $activarx . $compleme,
        //     'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        // ]);




          //permisos para el crud de tipos de actividad
          $permisox = 'aasdtiac';
          $compleme = 'Tipos de actividad Asistencia Diaria';
          Permission::create([
              'name' => $permisox . '-leerxxxx',
              'sis_pestania_id' => 1,
              'descripcion' => $leerxxxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-crearxxx',
              'sis_pestania_id' => 1,
              'descripcion' => $crearxxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-editarxx',
              'sis_pestania_id' => 1,
              'descripcion' => $editarxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-borrarxx',
              'sis_pestania_id' => 1,
              'descripcion' => $borrarxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-activarx',
              'sis_pestania_id' => 1,
              'descripcion' => $activarx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          // permisos para el crud de actividades
          $permisox = 'aasdacti'; 
          $compleme = 'Actividades Diarias';
          Permission::create([
              'name' => $permisox . '-leerxxxx',
              'sis_pestania_id' => 1,
              'descripcion' => $leerxxxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-crearxxx',
              'sis_pestania_id' => 1,
              'descripcion' => $crearxxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-editarxx',
              'sis_pestania_id' => 1,
              'descripcion' => $editarxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-borrarxx',
              'sis_pestania_id' => 1,
              'descripcion' => $borrarxx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
  
          Permission::create([
              'name' => $permisox . '-activarx',
              'sis_pestania_id' => 1,
              'descripcion' => $activarx . $compleme,
              'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
          ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosPlanillasAsistenciaSemanalDiariaSeeder extends Seeder
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

        /** Módulo planillas de asistencia (diaria y semanal) */
        $permisox = 'planasis';
        $compleme = 'Módulo planillas de asistencia (diaria y semanal)';
        Permission::create([
            'name' => $permisox . '-moduloxx',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        /** Módulo Planilla de Asistencia Semanal */
        $permisox = 'assemodu';
        $compleme = 'Módulo planilla de asistencia semanal';
        Permission::create([
            'name' => $permisox . '-moduloxx',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        /** Módulo Planilla de Asistencia Diaria */
        $permisox = 'diarmodu';
        $compleme = 'Módulo planilla de asistencia diaria';
        Permission::create([
            'name' => $permisox . '-moduloxx',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);


        //permisos para el crud de Asistencia Semanal
        $permisox = 'asissema';
        $compleme = 'Planilla de asistencia semanal';
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

        //permisos para el crud de Asistencia Diaria
        $permisox = 'diariaxx';
        $compleme = 'Planilla de asistencia Diaria';
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


         //permisos para el crud de Agregar los asistentes a la asistencia diaria
         $permisox = 'nnajasdi';
         $compleme = 'Agregar los asistentes a la asistencia diaria';
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

         //permisos para el crud de Agregar las actividades a nnaj a la asistencia diaria
         $permisox = 'nnajacti';
         $compleme = 'Agregar las actividades a nnaj a la asistencia diaria';
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


          //permisos para el crud de Dependencias de asistencias diarias 
          $permisox = 'aasdepen';
          $compleme = 'Dependencia de  Asistencia Diaria';
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

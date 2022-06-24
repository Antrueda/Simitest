<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosMTallerSeeder extends Seeder
{
    use EstructuraBaseTrait;
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
        $moduloxx = 'Permiso que habilita el contenido del Módulo: ';
        $activarx = 'Permiso que permite activar registro para: ';
        $asignarx = 'Permiso que permite asignar registro para: ';
        /** Módulo Matricula */
        $permisox = 'cursosmodulosm';
        $compleme = 'Administración de Matriculas Talleres';
        Permission::create([
            'name' => $permisox . '-modulo',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        $permisox = 'formatomodulo';
        $compleme = 'Administración de Matriculas Talleres';
        Permission::create([
            'name' => $permisox . '-modulo',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        


        //permisos para el crud de Matricula NNAJ
        $permisox = 'cursos';
        $compleme = 'Permisos para Cursos';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
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


        // permisos para los contactos del acta de encuentro
        $permisox = 'modulos';
        $compleme = 'Permisos para Modulos';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
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


        // permisos para las asistencias del acta de encuentro
        $permisox = 'moduloasigna';
        $compleme = 'Permisos para Asignar Modulo';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
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

        // permisos para crear contacto unico en la asistencia del acta de encuentro
        $permisox = 'uniasigna';
        $compleme = 'Permisos para asignar unidad';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
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
        /** Módulo Prueba Diagnóstica */
     // permisos para los contactos del acta de encuentro
     $permisox = 'denomina';
     $compleme = 'Permisos para Unidad';
     Permission::create([
         'name' => $permisox . '-leer',
         'sis_pestania_id' => 1,
         'descripcion' => $leerxxxx . $compleme,
         'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
     ]);

     Permission::create([
         'name' => $permisox . '-crear',
         'sis_pestania_id' => 1,
         'descripcion' => $crearxxx . $compleme,
         'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
     ]);

     Permission::create([
         'name' => $permisox . '-editar',
         'sis_pestania_id' => 1,
         'descripcion' => $editarxx . $compleme,
         'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
     ]);

     Permission::create([
         'name' => $permisox . '-borrar',
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
       // permisos para los contactos del acta de encuentro
       $permisox = 'matricurso';
       $compleme = 'Permisos para Matricula Talleres';
       Permission::create([
           'name' => $permisox . '-leer',
           'sis_pestania_id' => 1,
           'descripcion' => $leerxxxx . $compleme,
           'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
       ]);

       Permission::create([
           'name' => $permisox . '-crear',
           'sis_pestania_id' => 1,
           'descripcion' => $crearxxx . $compleme,
           'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
       ]);

       Permission::create([
           'name' => $permisox . '-editar',
           'sis_pestania_id' => 1,
           'descripcion' => $editarxx . $compleme,
           'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
       ]);

       Permission::create([
           'name' => $permisox . '-borrar',
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
         // permisos para los contactos del acta de encuentro
         $permisox = 'formatov';
         $compleme = 'Permisos para Valoracion de Competencias';
         Permission::create([
             'name' => $permisox . '-leer',
             'sis_pestania_id' => 1,
             'descripcion' => $leerxxxx . $compleme,
             'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
         ]);
 
         Permission::create([
             'name' => $permisox . '-crear',
             'sis_pestania_id' => 1,
             'descripcion' => $crearxxx . $compleme,
             'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
         ]);
 
         Permission::create([
             'name' => $permisox . '-editar',
             'sis_pestania_id' => 1,
             'descripcion' => $editarxx . $compleme,
             'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
         ]);
 
         Permission::create([
             'name' => $permisox . '-borrar',
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
      // permisos para los contactos del acta de encuentro
      $permisox = 'valorcomp';
      $compleme = 'Permisos para Formato Valor de competencias';
      Permission::create([
          'name' => $permisox . '-leer',
          'sis_pestania_id' => 1,
          'descripcion' => $leerxxxx . $compleme,
          'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
      ]);

      Permission::create([
          'name' => $permisox . '-crear',
          'sis_pestania_id' => 1,
          'descripcion' => $crearxxx . $compleme,
          'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
      ]);

      Permission::create([
          'name' => $permisox . '-editar',
          'sis_pestania_id' => 1,
          'descripcion' => $editarxx . $compleme,
          'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
      ]);

      Permission::create([
          'name' => $permisox . '-borrar',
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
 
      $permisox = 'ventrevista';
      $compleme = 'Permisos para VALORACIÓN TERAPIA OCUPACIONAL ENTREVISTA SEMIESTRUCTURADA';
      Permission::create([
          'name' => $permisox . '-leer',
          'sis_pestania_id' => 1,
          'descripcion' => $leerxxxx . $compleme,
          'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
      ]);

      Permission::create([
          'name' => $permisox . '-crear',
          'sis_pestania_id' => 1,
          'descripcion' => $crearxxx . $compleme,
          'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
      ]);

      Permission::create([
          'name' => $permisox . '-editar',
          'sis_pestania_id' => 1,
          'descripcion' => $editarxx . $compleme,
          'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
      ]);

      Permission::create([
          'name' => $permisox . '-borrar',
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

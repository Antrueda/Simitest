<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosCuestionarioDastSeeder extends Seeder
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

        //formulario cliente cuestionario dast
        $permisox = 'cuesdast';
        $compleme = 'Cuestionario DAST';
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

        /** Módulo administraccion perfil vocacional */
        $permisox = 'adastmod';
        $compleme = 'Módulo administraccion cuestionario dast';
        Permission::create([
            'name' => $permisox . '-moduloxx',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);


        //permisos administraccion acciones cuestionario dast
        $permisox = 'adastacc';
        $compleme = 'cuestionario dast acciones';
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

        //permisos administraccion acciones cuestionario resultados - puntaje - grado problema
        $permisox = 'adastres';
        $compleme = 'cuestionario dast resultados (puntaje - grado problema)';
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


        //permisos administraccion cuestionario dast - preguntas
        $permisox = 'adastpre';
        $compleme = 'cuestionario dast preguntas';
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

        // permisos seguimiento cuestionario dast
        $permisox = 'dastsegu';
        $compleme = 'seguimientos cuestionario dast';
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

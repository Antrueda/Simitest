<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosAyudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// permisos que van por el frontend
        Permission::create([
            'name' => 'ayudline-moduloxx',
            'descripcion' => 'Permiso que permite mostrar el módulo de: Gestion Ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayuduser-leerxxxx',
            'descripcion' => 'Permiso que le permite al usuario buscar y leer ayudas',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-leerxxxx',
            'descripcion' => 'Permiso que permite leer una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-crearxxx',
            'descripcion' => 'Permiso que permite crear una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);


        Permission::create([
            'name' => 'ayudadmi-editarxx',
            'descripcion' => 'Permiso que permite editar una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => 'ayudadmi-borrarxx',
            'descripcion' => 'Permiso que permite inactivar una ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-cambiarxx',
            'descripcion' => 'Permiso que permite cambiar la visibilidad de una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-activarx',
            'descripcion' => 'Permiso que permite activar una ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);

    }
}


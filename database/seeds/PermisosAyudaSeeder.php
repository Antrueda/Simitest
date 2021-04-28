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
            'DESCRIPCION' => 'Permiso que permite mostrar el módulo de: Gestion Ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayuduser-leerxxxx',
            'DESCRIPCION' => 'Permiso que le permite al usuario buscar y leer ayudas',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-leerxxxx',
            'DESCRIPCION' => 'Permiso que permite leer una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-crearxxx',
            'DESCRIPCION' => 'Permiso que permite crear una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);


        Permission::create([
            'name' => 'ayudadmi-editarxx',
            'DESCRIPCION' => 'Permiso que permite editar una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);

        Permission::create([
            'name' => 'ayudadmi-borrarxx',
            'DESCRIPCION' => 'Permiso que permite inactivar una ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-cambiarxx',
            'DESCRIPCION' => 'Permiso que permite cambiar la visibilidad de una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayudadmi-activarx',
            'DESCRIPCION' => 'Permiso que permite activar una ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);

    }
}


<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class AyudaPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

         Permission::create([
            'name' => 'ayuda-modulo',
            'descripcion' => 'Permiso que permite ver el menu de: Gestion Ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-crear',
            'descripcion' => 'Permiso que permite crear una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-editar',
            'descripcion' => 'Permiso que permite editar una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-leer',
            'descripcion' => 'Permiso que permite leer una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-eliminar',
            'descripcion' => 'Permiso que permite eliminar una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-cambiar',
            'descripcion' => 'Permiso que permite cambiar la visibilidad de una pagina de ayuda',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
    }
}


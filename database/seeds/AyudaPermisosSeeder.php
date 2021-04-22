<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
            'DESCRIPCION' => 'Permiso que permite ver el menu de: Gestion Ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-crear',
            'DESCRIPCION' => 'Permiso que permite crear una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-editar',
            'DESCRIPCION' => 'Permiso que permite editar una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-leer',
            'DESCRIPCION' => 'Permiso que permite leer una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-eliminar',
            'DESCRIPCION' => 'Permiso que permite eliminar una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'ayuda-cambiar',
            'DESCRIPCION' => 'Permiso que permite cambiar la visibilidad de una pagina de ayuda',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);

        $rolsadmin = Role::findByName('SUPER-ADMINISTRADOR');
        $rolsadmin->givePermissionTo(['ayuda-modulo', 'ayuda-crear', 'ayuda-editar', 'ayuda-leer', 'ayuda-eliminar', 'ayuda-cambiar']);

        $roladmin = Role::findByName('ADMINISTRADOR');
        $roladmin->givePermissionTo(['ayuda-modulo', 'ayuda-crear', 'ayuda-editar', 'ayuda-leer', 'ayuda-eliminar', 'ayuda-cambiar']);
    }
}


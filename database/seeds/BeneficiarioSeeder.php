<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Limpia cache de permisos
        app()['cache']->forget('spatie.permission.cache');
        // Permisos de tipo atencion
        Permission::create([
            'name' => 'beneficiario-modulo',
            'DESCRIPCION' => 'Permiso que permite ver el menu de: Gestion beneficiario - ficha de ingreso.',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'beneficiario-editar',
            'DESCRIPCION' => 'Permiso que permite editar una pagina de beneficiario - ficha de ingreso.',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'beneficiario-leer',
            'DESCRIPCION' => 'Permiso que permite leer una pagina de beneficiario - ficha de ingreso.',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);

        $role = Role::find(1);
        $role->givePermissionTo([
            'beneficiario-modulo', 'beneficiario-editar', 'beneficiario-leer'
        ]);

        $role_dos = Role::find(2);
        $role_dos->givePermissionTo([
            'beneficiario-modulo', 'beneficiario-editar', 'beneficiario-leer'
        ]);
    }
}

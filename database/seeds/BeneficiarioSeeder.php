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
            'descripcion' => 'Permiso que permite ver el menu de: Gestion beneficiario - ficha de ingreso.',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'beneficiario-editar',
            'descripcion' => 'Permiso que permite editar una pagina de beneficiario - ficha de ingreso.',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'beneficiario-leer',
            'descripcion' => 'Permiso que permite leer una pagina de beneficiario - ficha de ingreso.',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
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

<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class InvalorInicialPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'indiagnostico-modulo',
            'DESCRIPCION' => 'Permiso que permite ver el módulo de: ValorInicial',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-leer',
            'DESCRIPCION' => 'Permiso que permite leer el módulo de: ValorInicial',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-crear',
            'DESCRIPCION' => 'Permiso que permite crear el módulo de: ValorInicial',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-editar',
            'DESCRIPCION' => 'Permiso que permite editar el módulo de: ValorInicial',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-borrar',
            'DESCRIPCION' => 'Permiso que permite borrar el módulo de: ValorInicial',
            'SIS_PESTANIA_ID' => 1,
            'USER_CREA_ID' => 1,
            'USER_EDITA_ID' => 1,
            'SIS_ESTA_ID' => 1
        ]);
        $rolsadmin = Role::findByName('SUPER-ADMINISTRADOR');
        $rolsadmin->givePermissionTo([
            'indiagnostico-modulo',
            'indiagnostico-crear',
            'indiagnostico-editar',
            'indiagnostico-leer',
            'indiagnostico-borrar'
        ]);
    }

    
}

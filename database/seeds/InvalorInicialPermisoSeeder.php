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
            'descripcion' => 'Permiso que permite ver el módulo de: ValorInicial',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-leer',
            'descripcion' => 'Permiso que permite leer el módulo de: ValorInicial',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-crear',
            'descripcion' => 'Permiso que permite crear el módulo de: ValorInicial',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-editar',
            'descripcion' => 'Permiso que permite editar el módulo de: ValorInicial',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'indiagnostico-borrar',
            'descripcion' => 'Permiso que permite borrar el módulo de: ValorInicial',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
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

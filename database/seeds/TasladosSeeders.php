<?php

use App\Models\Permissionext;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TasladosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getPermisos()
    {
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslado-leer', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslado-crear', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslado-editar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslado-borrar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslado-activarx', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslannaj-leer', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslannaj-crear', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslannaj-editar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'traslannaj-borrar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivoe-leer', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivoe-crear', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivoe-editar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivoe-borrar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivose-leer', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivose-crear', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivose-editar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivose-borrar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivouni-leer', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivouni-crear', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivouni-editar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivouni-borrar', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'motivoadmin-modulo', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        

        $role = Role::find(1);
        $role->givePermissionTo([
            'traslado-leer',
            'traslado-crear',
            'traslado-editar',
            'traslado-borrar',
            'traslado-activarx',
            'traslannaj-leer',
            'traslannaj-crear',
            'traslannaj-editar',
            'traslannaj-borrar',
            'motivoe-leer',
            'motivoe-crear',
            'motivoe-editar',
            'motivoe-borrar',
            'motivouni-leer',
            'motivouni-crear',
            'motivouni-editar',
            'motivouni-borrar',
            'motivose-leer',
            'motivose-crear',
            'motivose-editar',
            'motivose-borrar',
            'motivoadmin-modulo',
            
        ]);
    }
}

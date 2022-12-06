<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisoFiUpinnajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create([
            'name' => 'fiupinna-listaxxx',
            'descripcion' => 'Permiso que pemite mostrar las dependencia que tiene asociadas el nnaj',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        Permission::create([
            'name' => 'fiupinna-listnnaj',
            'descripcion' => 'Permiso que pemite mostrar los nnaj que se le va activar o inactivar la upi',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        

        Permission::create([
            'name' => 'fiupinna-activarx',
            'descripcion' => 'Permiso que permite ativar las dependencia que tiene asociadas el nnaj',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => 'fiupinna-inactiva',
            'descripcion' => 'Permiso que permite inactivar las dependencia que tiene asociadas el nnaj',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);

// PERMISOS PARA LOS SERVICIOS

        Permission::create([
            'name' => 'nnajdese-listaxxx',
            'descripcion' => 'Permiso que pemite mostrar la lista de los servicios que tiene asociados la dependencia',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
        
        Permission::create([
            'name' => 'nnajdese-activarx',
            'descripcion' => 'Permiso que permite ativar los servicios que tiene asociados la dependencia',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => 'nnajdese-inactiva',
            'descripcion' => 'Permiso que permite inactivar los servicios que tiene asociados la dependencia',
            'sis_pestania_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1
        ]);
    }
}

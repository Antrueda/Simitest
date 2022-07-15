<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosAdmiCuestionarioLimiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $leerxxxx = 'Permiso que permite ver el contenido para: ';
        $crearxxx = 'Permiso que permite crear registro para: ';
        $editarxx = 'Permiso que permite editar registro para: ';
        $borrarxx = 'Permiso que permite inactivar registro para: ';
        $moduloxx = 'Permiso que habilita el contenido del: ';
        $activarx = 'Permiso que permite activar registro para: ';

        

        /** Módulo cuestionario Limite   */
        $permisox = 'cgihlimite';
        $compleme = 'Cuestionario Limite';
        Permission::create([
            'name' => $permisox . '-leerxxxx',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crearxxx',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editarxx',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrarxx',
            'sis_pestania_id' => 1,
            'descripcion' => $borrarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-activarx',
            'sis_pestania_id' => 1,
            'descripcion' => $activarx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);
        
      
 
    }
}

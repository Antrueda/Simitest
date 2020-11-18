<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesYPermisosUbicacionSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        $listaxxx = 'Permiso que permite ver el contenido para: ';

        $descripc = [
            'leer' => $listaxxx,
            'crear' => 'Permiso que permite crear registro para: ',
            'editar' => 'Permiso que permite editar registro para: ',
            'borrar' => 'Permiso que permite inactivar registro para: ',
            'descarga'=>'Permiso que permite la descarga de archivos para: ',
            'factorxx' => 'Permioso que permite ver los: ',
            'metaxxxx' => 'Permioso que permite ver las: ',
            'psicologo' => 'Permioso que permite ver contenido de psicologo: ',
            'social' => 'Permioso que permite ver contenido de trabajador social: ',
            'modulo' => 'Permioso que permite ver el menu de: ',
            'admin' => 'Permiso para administrar: ',
            'area-admin' => 'Permiso para administrar: ',
            'tipo-admin' => 'Permiso para administrar: ',
            'sub-tipo-admin' => 'Permiso para administrar: ',
            'activarx' => 'Permiso que permite activar registro para: '
        ];
        foreach ($dataxxxx['permisos'] as $value) {
            Permission::create([
                'name' => $dataxxxx['permisox'] . '-' . $value,
                'sis_pestania_id' => $dataxxxx['pestania'],
                'descripcion' => $descripc[$value] . $dataxxxx['compleme'],
                'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
            ]);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Restablecer roles y permisos en caché
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        require_once('Ubicacion.php');// ubicaciones: pais, departamentos, municipios, localidades, upzs y barrios

        Role::find(1)->givePermissionTo(['ubicacio-modulo',
            'paisxxxx-leer', 'paisxxxx-crear', 'paisxxxx-editar', 'paisxxxx-borrar',  'paisxxxx-activarx',
            'departam-leer', 'departam-crear', 'departam-editar', 'departam-borrar',  'departam-activarx',
            'municipi-leer', 'municipi-crear', 'municipi-editar', 'municipi-borrar',  'municipi-activarx',
            'localida-leer', 'localida-crear', 'localida-editar', 'localida-borrar',  'localida-activarx',
            'upzxxxxx-leer', 'upzxxxxx-crear', 'upzxxxxx-editar', 'upzxxxxx-borrar',  'upzxxxxx-activarx',
            'barrioxx-leer', 'barrioxx-crear', 'barrioxx-editar', 'barrioxx-borrar',  'barrioxx-activarx',
            'localupz-leer', 'localupz-crear', 'localupz-editar', 'localupz-borrar',  'localupz-activarx',
            'barriupz-leer', 'barriupz-crear', 'barriupz-editar', 'barriupz-borrar',  'barriupz-activarx',
            ]);


    }
}

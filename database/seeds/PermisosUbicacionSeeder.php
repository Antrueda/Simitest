<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosUbicacionSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        $listaxxx = 'Permiso que permite ver el contenido para: ';

         $descripc = [
            'leer' => $listaxxx,
            'crear' => 'Permiso que permite crear registro para: ',
            'editar' => 'Permiso que permite editar registro para: ',
            'borrar' => 'Permiso que permite inactivar registro para: ',
            'descarga' => 'Permiso que permite la descarga de archivos para: ',
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
        /** Módulo ubicaciones */
        $this->getPermisos(['permisox' => 'ubicacio', 'permisos' => ['modulo'], 'compleme' => 'Módulo de ubicaciones', 'pestania' => 1]);

        //permisos para el crud de paises
        $this->getPermisos(['permisox' => 'paisxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'administracion paises', 'pestania' => 1]);
        //permisos para el crud de departmentos
        $this->getPermisos(['permisox' => 'departam', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'administracion departamentos', 'pestania' => 1]);
        //permisos para el crud de municipios
        $this->getPermisos(['permisox' => 'municipi', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'administracion municipios', 'pestania' => 1]);
        //permisos para el crud de localidades
        $this->getPermisos(['permisox' => 'localida', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'administracion localidades', 'pestania' => 1]);
        //permisos para el crud de unir un upz con una localiad
        $this->getPermisos(['permisox' => 'localupz', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'unir localidad con upz', 'pestania' => 1]);
        //permisos para el crud de upzs
        $this->getPermisos(['permisox' => 'upzxxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'administracion upzs', 'pestania' => 1]);
        //permisos para el crud de unir una upz con un barrio
        $this->getPermisos(['permisox' => 'barriupz', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'unir upz con barrio', 'pestania' => 1]);
        //permisos para el crud de barrios
        $this->getPermisos(['permisox' => 'barrioxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'administracion barrios', 'pestania' => 1]);
    }
}

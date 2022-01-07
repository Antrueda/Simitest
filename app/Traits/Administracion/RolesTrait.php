<?php

namespace App\Traits\Administracion;

use App\Models\Permissionext;
use App\Models\Roleext;
use App\Traits\DatatableTrait;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait RolesTrait
{
    use DatatableTrait;
    public function getRoles($request)
    {
        $dataxxxx =  Roleext::select([
            'roles.id',
            'roles.name',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'roles.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtGeneral($dataxxxx, $request);
    }

    public function getPermisos($request)
    {
        $notinxxx =  Role::select([
            'role_has_permissions.permission_id',
        ])
            ->join('role_has_permissions', 'roles.id', '=', 'role_has_permissions.role_id')
            ->where('roles.id', $request->padrexxx)->get();
        $dataxxxx =  Permissionext::select([
            'permissions.id',
            'permissions.name',
            'permissions.descripcion',
            'sis_pestanias.titupest',
            'sis_menus.s_menu',
            'sis_docfuens.nombre',
        ])
            ->join('sis_pestanias', 'permissions.sis_pestania_id', '=', 'sis_pestanias.id')
            // ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
            ->join('sis_menus', 'sis_pestanias.sis_menu_id', '=', 'sis_menus.id')
            ->join('sis_docfuens', 'sis_menus.sis_docfuen_id', '=', 'sis_docfuens.id')

            ->whereNotIn('permissions.id', $notinxxx);
        return $this->getDtPermisoRol($dataxxxx, $request);
    }
    public function getPermisosRol($request)
    {
        $dataxxxx =  Role::select([
            'permissions.id',
            'permissions.name',
            'permissions.descripcion',
            'sis_pestanias.titupest',
            'sis_menus.s_menu',
            'sis_docfuens.nombre',
        ])

            ->join('role_has_permissions', 'roles.id', '=', 'role_has_permissions.role_id')
            ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
            ->join('sis_pestanias', 'permissions.sis_pestania_id', '=', 'sis_pestanias.id')
            ->join('sis_menus', 'sis_pestanias.sis_menu_id', '=', 'sis_menus.id')
            ->join('sis_docfuens', 'sis_menus.sis_docfuen_id', '=', 'sis_docfuens.id')
            ->where('roles.id', $request->padrexxx);
        return $this->getDtPermisoRol($dataxxxx, $request);
    }
}

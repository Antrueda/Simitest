<?php

namespace App\Helpers\Usuarios;

use App\Helpers\DatatableHelper;
use App\Models\Sistema\SisDepeUsua;
use App\Models\User;
use App\Models\Usuario\RolUsuario;
use App\Models\Usuario\SisAreaUsua;

class UsuarioApi
{
    public static function getUsuarios($request)
    {
        $dataxxxx = User::select(
			['id',
			's_primer_nombre',
			's_segundo_nombre',
			's_primer_apellido',
			's_segundo_apellido',
			'sis_esta_id'
		]);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }

    public static function getUsuarioArea($request)
    {
        $dataxxxx = SisAreaUsua::select(['area_user.id','areas.nombre','area_user.sis_esta_id','sis_estas.s_estado'])
        ->join('areas','area_user.area_id','=','areas.id')
        ->join('sis_estas','area_user.sis_esta_id','=','sis_estas.id')
        ->where('area_user.user_id',$request->padrexxx);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }

    public static function getDependenciaUser($request)
    {
        $dataxxxx = SisDepeUsua::select([
            'sis_depen_user.id',
            'sis_depens.nombre as dependenica',
            'sis_depen_user.sis_esta_id',
            'sis_estas.s_estado',
            'parametros.nombre'
            ])

            ->join('sis_depens','sis_depen_user.sis_depen_id','=','sis_depens.id')
            ->join('sis_estas', 'sis_depen_user.sis_esta_id', '=', 'sis_estas.id')
             ->join('parametros','sis_depen_user.i_prm_responsable_id','=','parametros.id')
            ->where('sis_depen_user.user_id',$request->padrexxx);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }

    public static function getUsuarioRoles($request)
    {
        $dataxxxx = RolUsuario::select([
            'model_has_roles.id',
            'roles.name',
            'model_has_roles.sis_esta_id',
            'sis_estas.s_estado',
            ])
            ->join('roles','model_has_roles.role_id','=','roles.id')
            ->join('sis_estas', 'model_has_roles.sis_esta_id', '=', 'sis_estas.id')
            ->where('model_has_roles.model_id',$request->padrexxx);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }
}

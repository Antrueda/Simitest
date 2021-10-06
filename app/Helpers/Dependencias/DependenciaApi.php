<?php

namespace App\Helpers\Dependencias;

use App\Helpers\DatatableHelper;
use App\Models\Sistema\SisServicio;
use App\Models\User;

class DependenciaApi
{


    public static function getServiciosDependencia($request)
    {
        $dataxxxx = SisServicio::select([
            'sis_depeservs.id',
            'sis_servicios.s_servicio',
            'sis_depeservs.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_depeservs', 'sis_servicios.id', '=', 'sis_depeservs.sis_servicio_id')
            ->join('sis_estas', 'sis_depeservs.sis_esta_id', '=', 'sis_estas.id')
            ->where('sis_depeservs.sis_depen_id', $request->padrexxx);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }
    public static function getDependenciaUser($request)
    {
        $dataxxxx = User::select([
            'sis_depen_user.id',
            'users.name',
            'users.s_documento',
            'sis_depen_user.sis_esta_id',
            'sis_estas.s_estado',
            'parametros.nombre'
            ])

            ->join('sis_depen_user','users.id','=','sis_depen_user.user_id')
            ->join('sis_estas', 'sis_depen_user.sis_esta_id', '=', 'sis_estas.id')
             ->join('parametros','sis_depen_user.i_prm_responsable_id','=','parametros.id')
            ->where('sis_depen_user.sis_depen_id',$request->padrexxx);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }
}

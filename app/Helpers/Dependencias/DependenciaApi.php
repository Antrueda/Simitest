<?php

namespace App\Helpers\Dependencias;

use App\Helpers\DatatableHelper;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisServicio;
use App\Models\User;

class DependenciaApi
{
    public static function getDependencias($request)
    {
        $paciente = SisDepen::select([
            'sis_depens.id',
            'sis_depens.nombre',
            'parametros.nombre as i_prm_sexo_id',
            'sis_depens.s_direccion',
            'sis_depens.sis_esta_id',
            'sis_localidads.s_localidad as sis_localidad_id',
            'sis_barrios.s_barrio as sis_barrio_id',
            'sis_depens.s_telefono',
            'sis_estas.s_estado',
            'sis_depens.s_correo', 'sis_depens.sis_esta_id'
        ])
            ->join('parametros', 'sis_depens.i_prm_sexo_id', '=', 'parametros.id')
            ->join('sis_upzbarris', 'sis_depens.sis_upzbarri_id', '=', 'sis_upzbarris.id')
            ->join('sis_localupzs', 'sis_upzbarris.sis_localupz_id', '=', 'sis_localupzs.id')
            ->join('sis_localidads', 'sis_localupzs.sis_localidad_id', '=', 'sis_localidads.id')
            ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
            ->join('sis_estas', 'sis_depens.sis_esta_id', '=', 'sis_estas.id');
        return DatatableHelper::getDtGeneral($paciente, $request);
    }

    public static function getServiciosDependencia($request)
    {
        $dataxxxx = SisServicio::select([
            'sis_depen_sis_servicio.id',
            'sis_servicios.s_servicio',
            'sis_depen_sis_servicio.sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_depen_sis_servicio', 'sis_servicios.id', '=', 'sis_depen_sis_servicio.sis_servicio_id')
            ->join('sis_estas', 'sis_depen_sis_servicio.sis_esta_id', '=', 'sis_estas.id')
            ->where('sis_depen_sis_servicio.sis_depen_id', $request->padrexxx);
        return DatatableHelper::getDtGeneral($dataxxxx, $request);
    }
    public static function getDependenciaUser($request)
    {
        $dataxxxx = User::select([
            'sis_depen_user.id',
            'users.name',
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

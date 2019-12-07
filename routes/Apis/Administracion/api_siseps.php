<?php

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisEntidadSalud;
use App\Models\sistema\SisEps;
use App\Models\sistema\SisServicio;
use App\Models\User;
use Illuminate\Http\Request;



Route::get('sis/eps', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(SisEntidadSalud::select([
            'sis_entidad_saluds.id',
            'sis_entidad_saluds.s_nombre_entidad as s_eps',
            'parametros.nombre as i_prm_teps_id',])
            ->join('parametros','sis_entidad_saluds.i_prm_tentidad_id','=','parametros.id')
            ->where('sis_entidad_saluds.estado', 1))
        ->addColumn('btns', 'administracion/eps/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

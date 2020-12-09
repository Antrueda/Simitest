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
            'sis_enprsas.s_enprsa',
            'parametros.nombre as i_prm_teps_id',])
            ->join('parametros','sis_entidad_saluds.i_prm_tentidad_id','=','parametros.id')
            ->join('sis_enprsas','sis_entidad_saluds.sis_enprsa_id','=','sis_enprsas.id')
            ->where('sis_entidad_saluds.sis_esta_id', 1))
        ->addColumn('btns', 'administracion/eps/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

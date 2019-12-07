<?php

use App\Models\sistema\SisFsoporte;
use Illuminate\Http\Request;

Route::get('sis/fsoporte', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(SisFsoporte::select([
            'sis_fsoportes.id',
            'sis_fsoportes.nombre',
            'sis_actividads.nombre as sis_actividad_id'])
            ->join('sis_actividads','sis_fsoportes.sis_actividad_id','=','sis_actividads.id')
            ->where('sis_fsoportes.activo', 1))
        ->addColumn('btns', 'administracion/fsoporte/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

<?php

use App\Models\Indicadores\Area;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisServicio;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('sis/cargo', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			SisCargo::select(['id', 's_cargo', 'sis_esta_id'])
		)
		->addColumn('btns', 'administracion/cargo/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});


Route::get('sis/dependencia', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(SisDependencia::select([
            'sis_dependencias.id',
            'sis_dependencias.nombre',
            'parametros.nombre as i_prm_sexo_id', 
            'sis_dependencias.s_direccion', 
            'sis_localidads.s_localidad as sis_localidad_id', 
            'sis_barrios.s_barrio as sis_barrio_id', 
            'sis_dependencias.s_telefono', 
            'sis_dependencias.s_correo','sis_dependencias.sis_esta_id'])
            ->join('parametros','sis_dependencias.i_prm_sexo_id','=','parametros.id')
            ->join('sis_localidads','sis_dependencias.sis_localidad_id','=','sis_localidads.id')
            ->join('sis_barrios','sis_dependencias.sis_barrio_id','=','sis_barrios.id')
            ->where('sis_dependencias.sis_esta_id', 1))
        ->addColumn('btns', 'administracion/dependencia/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('sis/user', function (Request $request) {
    if (!$request->ajax()) return redirect('/'); 
    return datatables()
        ->eloquent(User::select([
            'users.id',
            'users.name',
            'parametros.nombre'
            ])            
            ->join('sis_dependencia_user','users.id','=','sis_dependencia_user.user_id')
             ->join('parametros','sis_dependencia_user.i_prm_responsable_id','=','parametros.id')
            ->where('sis_dependencia_user.sis_dependencia_id',$request->dependen)
            )
        ->addColumn('btns', 'administracion/dependencia/botones/botonelim')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('sis/servicio', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(SisServicio::select([
            'sis_servicios.id',
            'sis_servicios.s_servicio as sis_servicio_id',
            'sis_dependencias.nombre as sis_dependencia_id', 
            'sis_servicios.sis_esta_id'])
            ->join('sis_dependencia_sis_servicio','sis_servicios.id','=','sis_dependencia_sis_servicio.sis_servicio_id')
            ->join('sis_dependencias','sis_dependencia_sis_servicio.sis_dependencia_id','=','sis_dependencias.id')
            ->where('sis_dependencia_sis_servicio.sis_dependencia_id',$request->all()['sis_dependencia_id'])
        )
        ->addColumn('btns', 'administracion/dependencia/botones/botonelim')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('sis/sisesta', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(SisEsta::select(['id','s_estado','i_estado'])) 
        ->addColumn('btns', $request->botonesx)
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('sis/areauser', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    $consulta=User::select(['areas.id','areas.nombre','area_user.sis_esta_id','sis_estas.s_estado','area_user.id as userarea'])
    ->join('area_user','users.id','=','area_user.user_id')
    ->join('areas','area_user.area_id','=','areas.id')
    ->join('sis_estas','area_user.sis_esta_id','=','sis_estas.id')
    ->where('users.id',$request->userxxxx);
    return datatables()
        ->eloquent($consulta) 
        ->addColumn('btns', $request->botonesx)
        ->addColumn('s_estado', $request->estadoxx)
        ->rawColumns(['btns','s_estado'])
        ->toJson();
});
Route::get('sis/sisareas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    $userxxxx=User::where('id',$request->userxxxx)->first();
    $notinxxx=[];
    foreach($userxxxx->areas as $areasxxx){
        if(!in_array($areasxxx->id,$notinxxx))
            $notinxxx[]=$areasxxx->id;
    }
    return datatables()
        ->eloquent(Area::select(['areas.id','areas.nombre','sis_estas.s_estado','areas.sis_esta_id'])
        ->join('sis_estas','areas.sis_esta_id','=','sis_estas.id')
        ->whereNotIn('areas.id',$notinxxx)
        ) 
        ->addColumn('btns', $request->botonesx)
        ->addColumn('s_estado', $request->estadoxx)
        ->rawColumns(['btns','s_estado'])
        
        
        ->toJson();
});




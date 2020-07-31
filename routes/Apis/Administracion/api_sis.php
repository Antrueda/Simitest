<?php

use App\Helpers\Dependencias\DependenciaApi;
use App\Models\Indicadores\Area;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisServicio;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('sis/cargo', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			SisCargo::select(['id', 's_cargo', 'sis_esta_id','itiestan','itiegabe'])
		)
		->addColumn('btns', 'administracion/cargo/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});


Route::get('sis/dependencia', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return DependenciaApi::getDependencias($request);
});

Route::get('sis/user', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return DependenciaApi::getDependenciaUser($request);
});

Route::get('sis/servicio', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return DependenciaApi::getServiciosDependencia($request);

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




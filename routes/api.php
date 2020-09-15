<?php

use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Http\Request;

use App\Models\fichaobservacion\FosDatosBasico;
use Spatie\Permission\Models\Permission;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('vsi/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(
            FiDatosBasico::select(
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.s_apodo',
                'nnaj_sexos.s_nombre_identitario',
                'fi_datos_basicos.id',
                'fi_datos_basicos.sis_nnaj_id',
                'fi_datos_basicos.sis_esta_id'
            )
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
        )
        ->addColumn('botones', 'Sicosocial/botones')
        ->rawColumns(['botones'])
        ->toJson();
});

Route::get('csd/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(FiDatosBasico::select(
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.s_apodo',
            'nnaj_sexos.s_nombre_identitario',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id'))
        ->addColumn('botones', 'Domicilio/botones')
        ->rawColumns(['botones'])
        ->toJson();
});

Route::get('ai/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(FiDatosBasico::select(
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.s_apodo',
            'nnaj_sexos.s_nombre_identitario',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id'))
        ->addColumn('botones', 'Acciones/Individuales/botones')
        ->rawColumns(['botones'])
        ->toJson();
});

Route::get('mitigacion/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(FiDatosBasico::select(
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.s_apodo',
            'nnaj_sexos.s_nombre_identitario',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id'))
        ->addColumn('botones', 'Salud/Mitigacion/Botones')
        ->rawColumns(['botones'])
        ->toJson();
});

Route::get('fi/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(FiDatosBasico::where('sis_esta_id', 1))
        ->addColumn('btns', 'FichaIngreso/botones')
        ->rawColumns(['btns'])
        ->toJson();
});
Route::get('fi/FiCompfamiliar', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');

    return datatables()
        ->eloquent(
            FiDatosBasico::join('fi_compfamis', 'fi_datos_basicos.fi_nucleo_familiar_id', '=', 'fi_compfamis.fi_nucleo_familiar_id')
                ->where('fi_datos_basicos.sis_nnaj_id', $request->sis_nnaj_id)
                ->where('fi_datos_basicos.sis_esta_id', 1)
        )
        ->addColumn('btns', 'FichaIngreso/composicion/botones')
        ->rawColumns(['btns'])
        ->toJson();
});



Route::get('is/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(
            FiDatosBasico::select(
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.s_apodo',
            'nnaj_sexos.s_nombre_identitario',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')

            )
        ->addColumn('btns', 'intervencion/botones')
        ->rawColumns(['btns'])
        ->toJson();
});
Route::get('fos/nnajs', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(FiDatosBasico::select(
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.s_apodo',
            'nnaj_sexos.s_nombre_identitario',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id'))
        ->addColumn('btns', 'FichaObservacion/botones')
        ->rawColumns(['btns'])
        ->toJson();
});
Route::get('permisos/permiso', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(Permission::where('sis_esta_id', 1))
        ->addColumn('btns', 'permiso/botones')
        ->rawColumns(['btns'])
        ->toJson();
});



Route::get('fos/fichaobservacion', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    $actualxx = FosDatosBasico::select(
        'fos_datos_basicos.id',
        'fos_datos_basicos.sis_nnaj_id',
        'fos_datos_basicos.d_fecha_diligencia',
        'sis_depens.nombre as s_upi',
        'areas.nombre as s_area',
        'fos_tses.nombre as s_tipo',
        'fos_stses.nombre as s_sub',
        'fos_datos_basicos.sis_esta_id'
    )
        ->join('sis_depens', 'fos_datos_basicos.sis_depen_id', '=', 'sis_depens.id')
        ->join('areas', 'fos_datos_basicos.area_id', '=', 'areas.id')
        ->join('fos_tses', 'fos_datos_basicos.fos_tse_id', '=', 'fos_tses.id')
        ->join('fos_stses', 'fos_datos_basicos.fos_stse_id', '=', 'fos_stses.id')
        ->where('fos_datos_basicos.sis_esta_id', 1)->where('fos_datos_basicos.sis_nnaj_id', $request->all()['nnajxxxx']);

    return datatables()
        ->eloquent($actualxx)
        ->addColumn('btns', 'FichaObservacion/botones/botones')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('fi/actividad', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');
    return datatables()
        ->eloquent(FiDatosBasico::where('sis_esta_id', 1))
        ->addColumn('btns', 'Indicadores/Admin/Acciongestion/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});


include_once('Apis/Indicadores/api_in.php');
include_once('Apis/Acciones/api_acciones.php');
include_once('Apis/apis_api.php');

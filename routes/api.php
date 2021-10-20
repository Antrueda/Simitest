<?php

use App\Traits\Fos\FosTrait;
use Illuminate\Http\Request;
use App\Models\Sistema\SisDepeUsua;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\Parametro;

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
            'tipodocumento.nombre as tipodocumento',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_sexos.s_nombre_identitario',
            'nnaj_nacimis.d_nacimiento',
            'sexos.nombre as sexos',
            'fi_datos_basicos.s_apodo',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('parametros as tipodocumento', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocumento.id')
            ->join('parametros as sexos', 'nnaj_sexos.prm_sexo_id', '=', 'sexos.id')

            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->where('sis_nnajs.prm_escomfam_id',227)

            //->groupBy('fi_datos_basicos.id')

            //->where('fi_datos_basicos.sis_nnaj_id',1)

            )

        ->addColumn('botones', 'Acciones/Individuales/botones')
        ->addColumn('upiservicio', 'Acciones/Individuales/upiservicio')
        ->rawColumns(['botones','upiservicio'])
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

// Route::get('fi/familiar/estrategia/{id}', 'FichaIngreso\\FiFamBeneficiario@estrategia') ;

Route::get('fi/familiar/estrategia', function (Request $request) {
    if (!$request->ajax())
        return redirect('/');

        $estrategia = [];
        switch ($request->estrateg) {
            case 650:
                $estrategia =  Parametro::find(235)->Combo;
                break;
            case 651:
                $estrategia =  Parametro::find(651)->Combo;
                break;
            case 445:
                $estrategia =  Parametro::find(445)->Combo;
                break;
            default:
                $estrategia =  Parametro::find(2503)->Combo;
                break;
        }
        return response()->json($estrategia);
});


include_once('Apis/Indicadores/api_in.php');
include_once('Apis/Acciones/api_acciones.php');
include_once('Apis/apis_api.php');

/* Rutas Administración Intervención */
Route::get('tipoatencion/listar', 'Administracion\Intervencion\TipoAtencionController@listarAtencionActivos');
Route::get('intarea/listar/{atencion}', 'Administracion\Intervencion\AreaAjusteController@listarAreaAjusteActivas');
Route::get('intsubarea/listar/{area}', 'Administracion\Intervencion\SubareaAjusteController@listarSubareaAjusteActivas');

Route::get('fi/familiar/servicio/{id}', 'FichaIngreso\\FiFamBeneficiario@servicio') ;
Route::get('fi/familiar/departam/{id}', 'FichaIngreso\\FiFamBeneficiario@departam') ;
Route::get('fi/familiar/municipi/{id}', 'FichaIngreso\\FiFamBeneficiario@municipi') ;
Route::get('fi/familiar/neciayud/{id}', 'FichaIngreso\\FiFamBeneficiario@neciayud') ;
Route::get('fi/familiar/upz/{id}', 'FichaIngreso\\FiFamBeneficiario@upz') ;
Route::get('fi/familiar/barrio/{id}', 'FichaIngreso\\FiFamBeneficiario@barrio') ;
Route::get('fi/familiar/etnia/{id}', 'FichaIngreso\\FiFamBeneficiario@pobletnia') ;


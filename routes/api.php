<?php

use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJusticiaRestaurativa;
use Illuminate\Http\Request;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\FiSalud;
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
                  ->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'sis_esta_id')
                          ->where('sis_esta_id', 1))
                  ->addColumn('botones', 'Sicosocial/botones')
                  ->rawColumns(['botones'])
                  ->toJson();
});

Route::get('csd/nnajs', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'sis_esta_id')
                          ->where('sis_esta_id', 1))
                  ->addColumn('botones', 'Domicilio/botones')
                  ->rawColumns(['botones'])
                  ->toJson();
});

Route::get('ai/nnajs', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'sis_esta_id')
                          ->where('sis_esta_id', 1))
                  ->addColumn('botones', 'Acciones/Individuales/botones')
                  ->rawColumns(['botones'])
                  ->toJson();
});

Route::get('mitigacion/nnajs', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'sis_esta_id')
                          ->where('sis_esta_id', 1))
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
Route::get('fi/ficomposicionfamiliar', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');

  return datatables()
                  ->eloquent(
                          FiDatosBasico::join('fi_composicion_famis', 'fi_datos_basicos.fi_nucleo_familiar_id', '=', 'fi_composicion_famis.fi_nucleo_familiar_id')
                          ->where('fi_datos_basicos.sis_nnaj_id', $request->sis_nnaj_id)
                          ->where('fi_datos_basicos.sis_esta_id', 1)
                  )
                  ->addColumn('btns', 'FichaIngreso/composicion/botones')
                  ->rawColumns(['btns'])
                  ->toJson();
});
Route::get('fi/firedapoyoantecedente', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  $redapoyo = FiRedApoyoAntecedente::select(
                          'fi_red_apoyo_antecedentes.id', 'sis_entidads.nombre', 'fi_red_apoyo_antecedentes.s_servicio', 'fi_red_apoyo_antecedentes.i_tiempo', 'tiempo.nombre as tipotiem', 'anio.nombre as anioxxxx', 'fi_red_apoyo_antecedentes.sis_nnaj_id', 'fi_red_apoyo_antecedentes.sis_esta_id'
                  )
                  ->join('sis_entidads', 'fi_red_apoyo_antecedentes.sis_entidad_id', '=', 'sis_entidads.id')
                  ->join('parametros as tiempo', 'fi_red_apoyo_antecedentes.i_prm_tiempo_id', '=', 'tiempo.id')
                  ->join('parametros as anio', 'fi_red_apoyo_antecedentes.i_prm_anio_prestacion_id', '=', 'anio.id')
                  ->where('fi_red_apoyo_antecedentes.sis_esta_id', 1)->where('fi_red_apoyo_antecedentes.sis_nnaj_id', $request->all()['nnajxxxx']);
  return datatables()
                  ->eloquent($redapoyo)
                  ->addColumn('btns', 'FichaIngreso/redantecedentes/botones')
                  ->rawColumns(['btns'])
                  ->toJson();
});
Route::get('fi/firedapoyoactual', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  //   
  $actualxx = FiRedApoyoActual::select(
                  'fi_red_apoyo_actuals.id', 'fi_red_apoyo_actuals.sis_nnaj_id', 'red.nombre as redxxxxx', 'fi_red_apoyo_actuals.s_nombre_persona', 'fi_red_apoyo_actuals.s_servicio', 'fi_red_apoyo_actuals.s_telefono', 'fi_red_apoyo_actuals.s_direccion', 'fi_red_apoyo_actuals.sis_esta_id'
          )
          ->join('parametros as red', 'fi_red_apoyo_actuals.i_prm_tipo_red_id', '=', 'red.id')
          ->where(function($queryxxx) use($request) {
    $queryxxx->where('fi_red_apoyo_actuals.sis_esta_id', 1)->where('fi_red_apoyo_actuals.sis_nnaj_id', $request->all()['nnajxxxx']);
  });

  return datatables()
                  ->eloquent($actualxx)
                  ->addColumn('btns', 'FichaIngreso/redactual/botones')
                  ->rawColumns(['btns'])
                  ->toJson();
});

Route::get('is/nnajs', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'sis_esta_id')
                          ->where('sis_esta_id', 1))
                  ->addColumn('btns', 'intervencion/botones')
                  ->rawColumns(['btns'])
                  ->toJson();
});
Route::get('fos/nnajs', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'sis_esta_id')
                          ->where('sis_esta_id', 1))
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

Route::get('fi/fijrfamiliar', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiJusticiaRestaurativa::select(
                                  'fi_proceso_familias.id', 'fi_justicia_restaurativas.sis_nnaj_id', 'fi_proceso_familias.sis_esta_id', 'fi_composicion_famis.s_primer_nombre', 'fi_composicion_famis.s_segundo_nombre', 'fi_composicion_famis.s_primer_apellido', 'fi_composicion_famis.s_segundo_apellido', 'fi_proceso_familias.s_proceso', 'vigente.nombre as vigente', 'fi_proceso_familias.i_numero_veces', 'fi_proceso_familias.s_motivo', 'fi_proceso_familias.i_hace_cuanto', 'tiempo.nombre as tiempo'
                          )
                          ->join('fi_proceso_familias', 'fi_justicia_restaurativas.id', '=', 'fi_proceso_familias.fi_justicia_restaurativa_id')
                          ->join('parametros as vigente', 'fi_proceso_familias.i_prm_vigente_id', '=', 'vigente.id')
                          ->join('parametros as tiempo', 'fi_proceso_familias.i_prm_tipo_tiempo_id', '=', 'tiempo.id')
                          ->join('fi_composicion_famis', 'fi_proceso_familias.fi_composicion_fami_id', '=', 'fi_composicion_famis.id')
                          ->join('fi_datos_basicos', 'fi_composicion_famis.fi_nucleo_familiar_id', '=', 'fi_datos_basicos.fi_nucleo_familiar_id')
                          ->where('fi_datos_basicos.sis_esta_id', 1)
                          ->where('fi_justicia_restaurativas.sis_esta_id', 1)
                          ->where('fi_datos_basicos.sis_nnaj_id', $request->sis_nnaj_id)
                  )
                  ->addColumn('btns', 'FichaIngreso/justicia/datatable/botones')
                  ->rawColumns(['btns'])
                  ->toJson();
});

Route::get('fi/fisaludenfermedad', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiSalud::select(
                                  'fi_enfermedades_familias.id', 'fi_saluds.sis_nnaj_id', 'fi_enfermedades_familias.sis_esta_id', 'fi_composicion_famis.s_primer_nombre', 'fi_composicion_famis.s_segundo_nombre', 'fi_composicion_famis.s_primer_apellido', 'fi_composicion_famis.s_segundo_apellido', 'fi_enfermedades_familias.s_tipo_enfermedad', 'medicina.nombre as medicina', 'fi_enfermedades_familias.s_medicamento', 'tratamiento.nombre as tratamiento'
                          )
                          ->join('fi_enfermedades_familias', 'fi_saluds.id', '=', 'fi_enfermedades_familias.fi_salud_id')
                          ->join('parametros as medicina', 'fi_enfermedades_familias.i_prm_recibe_medicina_id', '=', 'medicina.id')
                          ->join('parametros as tratamiento', 'fi_enfermedades_familias.i_prm_rec_tratamiento_id', '=', 'tratamiento.id')
                          ->join('fi_composicion_famis', 'fi_enfermedades_familias.fi_composicion_fami_id', '=', 'fi_composicion_famis.id')
                          ->join('fi_datos_basicos', 'fi_composicion_famis.fi_nucleo_familiar_id', '=', 'fi_datos_basicos.fi_nucleo_familiar_id')
                          ->where('fi_saluds.sis_esta_id', 1)->where('fi_datos_basicos.sis_nnaj_id', $request->sis_nnaj_id))
                  ->addColumn('btns', 'FichaIngreso/salud/datatable/botones')
                  ->rawColumns(['btns'])
                  ->toJson();
});

Route::get('fi/fisustanciaconsumida', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');
  return datatables()
                  ->eloquent(FiConsumoSpa::select(
                                  'fi_sustancia_consumidas.id', 'fi_consumo_spas.sis_nnaj_id', 'fi_sustancia_consumidas.sis_esta_id', 'sustancia.nombre as sustancia', 'fi_sustancia_consumidas.i_edad_uso', 'consume.nombre as consume'
                          )
                          ->join('fi_sustancia_consumidas', 'fi_consumo_spas.id', '=', 'fi_sustancia_consumidas.fi_consumo_spa_id')
                          ->join('parametros as sustancia', 'fi_sustancia_consumidas.i_prm_sustancia_id', '=', 'sustancia.id')
                          ->join('parametros as consume', 'fi_sustancia_consumidas.i_prm_consume_id', '=', 'consume.id')
                          ->where('fi_consumo_spas.sis_esta_id', 1)->where('fi_consumo_spas.sis_nnaj_id', $request->sis_nnaj_id))
                  ->addColumn('btns', 'FichaIngreso/consumo/datatable/botones')
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
        'sis_dependencias.nombre as s_upi', 
        'areas.nombre as s_area', 
        'fos_tses.nombre as s_tipo', 
        'fos_stses.nombre as s_sub', 
        'fos_datos_basicos.sis_esta_id'
    )
    ->join('sis_dependencias', 'fos_datos_basicos.sis_dependencia_id', '=', 'sis_dependencias.id')
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
Route::get('fi/razonarichivo', function (Request $request) {
  if (!$request->ajax())
    return redirect('/');

  $document = \App\Models\fichaIngreso\FiRazone::select(['fi_documentos_anexas.id', 'fi_razones.sis_nnaj_id', 'fi_documentos_anexas.fi_razone_id',
              'fi_documentos_anexas.sis_esta_id', 'parametros.nombre'])
          ->join('fi_documentos_anexas', 'fi_razones.id', '=', 'fi_documentos_anexas.fi_razone_id')
          ->join('parametros', 'fi_documentos_anexas.i_prm_documento_id', '=', 'parametros.id')
          ->where('fi_documentos_anexas.sis_esta_id', 1)
          ->where('fi_razones.sis_nnaj_id', $request->all()['nnajxxxx'])
  ;
  return datatables()
                  ->eloquent($document)
                  ->addColumn('btns', $request->all()['botonesx'])
                  ->rawColumns(['btns'])
                  ->toJson();
});

include_once('Apis/Indicadores/api_in.php');
include_once('Apis/Acciones/api_acciones.php');
include_once('Apis/apis_api.php');

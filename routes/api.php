<?php

use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJusticiaRestaurativa;
use Illuminate\Http\Request;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\FiSalud;

use App\Models\intervencion\IsDatosBasico;
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
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'activo')
			->where('activo', 1))
		->addColumn('botones', 'Sicosocial/botones')
		->rawColumns(['botones'])
		->toJson();
});

Route::get('csd/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'activo')
			->where('activo', 1))
		->addColumn('botones', 'Domicilio/botones')
		->rawColumns(['botones'])
		->toJson();
});

Route::get('ai/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'activo')
			->where('activo', 1))
		->addColumn('botones', 'Acciones/Individuales/botones')
		->rawColumns(['botones'])
		->toJson();
});

Route::get('mitigacion/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'activo')
			->where('activo', 1))
		->addColumn('botones', 'Salud/Mitigacion/Botones')
		->rawColumns(['botones'])
		->toJson();
});

Route::get('fi/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::where('activo', 1))
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
				->where('fi_datos_basicos.activo', 1)
		)
		->addColumn('btns', 'FichaIngreso/composicion/botones')
		->rawColumns(['btns'])
		->toJson();
});
Route::get('fi/firedapoyoantecedente', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$redapoyo = FiRedApoyoAntecedente::select(
		'fi_red_apoyo_antecedentes.id',
		'sis_entidads.nombre',
		'fi_red_apoyo_antecedentes.s_servicio',
		'fi_red_apoyo_antecedentes.i_tiempo',
		'tiempo.nombre as tipotiem',
		'anio.nombre as anioxxxx',
		'fi_red_apoyo_antecedentes.sis_nnaj_id',
		'fi_red_apoyo_antecedentes.activo'
	)
		->join('sis_entidads', 'fi_red_apoyo_antecedentes.sis_entidad_id', '=', 'sis_entidads.id')
		->join('parametros as tiempo', 'fi_red_apoyo_antecedentes.i_prm_tiempo_id', '=', 'tiempo.id')
		->join('parametros as anio', 'fi_red_apoyo_antecedentes.i_prm_anio_prestacion_id', '=', 'anio.id')
		->where('fi_red_apoyo_antecedentes.activo', 1)->where('fi_red_apoyo_antecedentes.sis_nnaj_id', $request->all()['nnajxxxx']);
	return datatables()
		->eloquent($redapoyo)
		->addColumn('btns', 'FichaIngreso/redantecedentes/botones')
		->rawColumns(['btns'])
		->toJson();
});
Route::get('fi/firedapoyoactual', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	//   
	$actualxx = FiRedApoyoActual::select(
		'fi_red_apoyo_actuals.id',
		'fi_red_apoyo_actuals.sis_nnaj_id',
		'red.nombre as redxxxxx',
		'fi_red_apoyo_actuals.s_nombre_persona',
		'fi_red_apoyo_actuals.s_servicio',
		'fi_red_apoyo_actuals.s_telefono',
		'fi_red_apoyo_actuals.s_direccion',
		'fi_red_apoyo_actuals.activo'
	)
		->join('parametros as red', 'fi_red_apoyo_actuals.i_prm_tipo_red_id', '=', 'red.id')
		->where('fi_red_apoyo_actuals.activo', 1)->where('fi_red_apoyo_actuals.sis_nnaj_id', $request->all()['nnajxxxx']);

	return datatables()
		->eloquent($actualxx)
		->addColumn('btns', 'FichaIngreso/redactual/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('is/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'activo')
			->where('activo', 1))
		->addColumn('btns', 'intervencion/botones')
		->rawColumns(['btns'])
		->toJson();
});
Route::get('fos/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::select('s_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido', 's_apodo', 's_nombre_identitario', 'id', 'sis_nnaj_id', 'activo')
			->where('activo', 1))
		->addColumn('btns', 'FichaObservacion/botones')
		->rawColumns(['btns'])
		->toJson();
});
Route::get('permisos/permiso', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(Permission::where('activo', 1))
		->addColumn('btns', 'permiso/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('fi/fijrfamiliar', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiJusticiaRestaurativa::select(
				'fi_proceso_familias.id',
				'fi_justicia_restaurativas.sis_nnaj_id',
				'fi_proceso_familias.activo',
				'fi_composicion_famis.s_primer_nombre',
				'fi_composicion_famis.s_segundo_nombre',
				'fi_composicion_famis.s_primer_apellido',
				'fi_composicion_famis.s_segundo_apellido',
				'fi_proceso_familias.s_proceso',
				'vigente.nombre as vigente',
				'fi_proceso_familias.i_numero_veces',
				'fi_proceso_familias.s_motivo',
				'fi_proceso_familias.i_hace_cuanto',
				'tiempo.nombre as tiempo'
			)
			->join('fi_proceso_familias', 'fi_justicia_restaurativas.id', '=', 'fi_proceso_familias.fi_justicia_restaurativa_id')
			->join('parametros as vigente', 'fi_proceso_familias.i_prm_vigente_id', '=', 'vigente.id')
			->join('parametros as tiempo', 'fi_proceso_familias.i_prm_tipo_tiempo_id', '=', 'tiempo.id')
			->join('fi_composicion_famis', 'fi_proceso_familias.fi_composicion_fami_id', '=', 'fi_composicion_famis.id')
			->join('fi_datos_basicos', 'fi_composicion_famis.fi_nucleo_familiar_id', '=', 'fi_datos_basicos.fi_nucleo_familiar_id')
			->where('fi_datos_basicos.activo', 1)
			->where('fi_justicia_restaurativas.activo', 1)
			->where('fi_datos_basicos.sis_nnaj_id', $request->sis_nnaj_id)
		)
		
		->addColumn('btns', 'FichaIngreso/justicia/datatable/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('fi/fisaludenfermedad', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiSalud::select(
				'fi_enfermedades_familias.id',
				'fi_composicion_famis.sis_nnaj_id',
				'fi_saluds.sis_nnaj_id',
				'fi_enfermedades_familias.activo',
				'fi_composicion_famis.s_primer_nombre',
				'fi_composicion_famis.s_segundo_nombre',
				'fi_composicion_famis.s_primer_apellido',
				'fi_composicion_famis.s_segundo_apellido',
				'fi_enfermedades_familias.s_tipo_enfermedad',
				'medicina.nombre as medicina',
				'fi_enfermedades_familias.s_medicamento',
				'tratamiento.nombre as tratamiento'
			)

			->join('fi_enfermedades_familias', 'fi_saluds.id', '=', 'fi_enfermedades_familias.fi_salud_id')
			->join('parametros as medicina', 'fi_enfermedades_familias.i_prm_recibe_medicina_id', '=', 'medicina.id')
			->join('parametros as tratamiento', 'fi_enfermedades_familias.i_prm_rec_tratamiento_id', '=', 'tratamiento.id')
			->join('fi_composicion_famis', 'fi_enfermedades_familias.fi_composicion_fami_id', '=', 'fi_composicion_famis.id')
			->where('fi_saluds.activo', 1)->where('fi_saluds.sis_nnaj_id', $request->sis_nnaj_id))
		->addColumn('btns', 'FichaIngreso/salud/datatable/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('fi/fisustanciaconsumida', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiConsumoSpa::select(
				'fi_sustancia_consumidas.id',
				'fi_consumo_spas.sis_nnaj_id',
				'fi_sustancia_consumidas.activo',
				'sustancia.nombre as sustancia',
				'fi_sustancia_consumidas.i_edad_uso',
				'consume.nombre as consume'
			)
			->join('fi_sustancia_consumidas', 'fi_consumo_spas.id', '=', 'fi_sustancia_consumidas.fi_consumo_spa_id')
			->join('parametros as sustancia', 'fi_sustancia_consumidas.i_prm_sustancia_id', '=', 'sustancia.id')
			->join('parametros as consume', 'fi_sustancia_consumidas.i_prm_consume_id', '=', 'consume.id')
			->where('fi_consumo_spas.activo', 1)->where('fi_consumo_spas.sis_nnaj_id', $request->sis_nnaj_id))
		->addColumn('btns', 'FichaIngreso/consumo/datatable/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('is/intervencion', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	//   
	$actualxx = IsDatosBasico::select(
		'is_datos_basicos.id',
		'is_datos_basicos.sis_nnaj_id',
		'is_datos_basicos.sis_nnaj_id',
		'tipoaten.nombre as tipoxxxx',
		'is_datos_basicos.d_fecha_diligencia',
		'sis_dependencias.nombre',
		'users.s_primer_nombre',
		'is_datos_basicos.activo'
	)
		->join('sis_dependencias', 'is_datos_basicos.sis_dependencia_id', '=', 'sis_dependencias.id')
		->join('users', 'is_datos_basicos.i_primer_responsable', '=', 'users.id')
		->join('parametros as tipoaten', 'is_datos_basicos.i_prm_tipo_atencion_id', '=', 'tipoaten.id')
		->where('is_datos_basicos.activo', 1)->where('is_datos_basicos.sis_nnaj_id', $request->all()['nnajxxxx']);

	return datatables()
		->eloquent($actualxx)
		->addColumn('btns', 'intervencion/botones/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('fos/fichaobservacion', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	//   
	$actualxx = FosDatosBasico::select(
		'fos_datos_basicos.id',
		'fos_datos_basicos.sis_nnaj_id',
		'fos_datos_basicos.sis_nnaj_id',
		'fos_datos_basicos.d_fecha_diligencia',
		'sis_dependencias.nombre',
		'areas.nombre',
		'ag_temas.s_tema',
		'ag_tallers.s_taller',
		'fos_datos_basicos.activo'
	)
		->join('sis_dependencias', 'fos_datos_basicos.sis_dependencia_id', '=', 'sis_dependencias.id')
		->join('areas', 'fos_datos_basicos.area_id', '=', 'areas.id')
		->join('ag_temas', 'fos_datos_basicos.tema_id', '=', 'ag_temas.id')
		->join('ag_tallers', 'fos_datos_basicos.taller_id', '=', 'ag_tallers.id')
		->where('fos_datos_basicos.activo', 1)->where('fos_datos_basicos.sis_nnaj_id', $request->all()['nnajxxxx']);

	return datatables()
		->eloquent($actualxx)
		->addColumn('btns', 'FichaObservacion/botones/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('fi/actividad', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::where('activo', 1))
		->addColumn('btns', 'Indicadores/Admin/Acciongestion/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

include_once('Apis/Indicadores/api_in.php');
include_once('Apis/Acciones/api_acciones.php');
include_once('Apis/apis_api.php');

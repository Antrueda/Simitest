<?php

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLineaBase;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InPregunta;
use App\Models\Indicadores\InValidacion;
use Illuminate\Http\Request;

Route::get('indicadores/indicador', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InIndicador::select(['in_indicadors.id', 'in_indicadors.s_indicador', 'areas.nombre', 'in_indicadors.activo'])
				->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
		)
		->addColumn('btns', 'Indicadores/Admin/indicador/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/documentos', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InBaseFuente::select([
				'in_base_fuentes.id',  'sis_documento_fuentes.nombre', 'in_linea_bases.s_linea_base', 'in_indicadors.s_indicador'
			])
				->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
				->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
				->join('sis_documento_fuentes', 'in_base_fuentes.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')
		)
		->addColumn('btns', 'Indicadores/Admin/Docindicador/Datatable/botones')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/preguntas', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InPregunta::select(['id', 's_pregunta', 'activo'])
		)
		->addColumn('btns', 'Indicadores/Admin/Preguntas/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/respuestas', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(

			InBaseFuente::select([
				'in_doc_preguntas.id',  'sis_documento_fuentes.nombre', 'in_linea_bases.s_linea_base',
				'in_indicadors.s_indicador', 'in_preguntas.s_pregunta'
			])
				->join('in_doc_preguntas', 'in_base_fuentes.id', '=', 'in_doc_preguntas.in_base_fuente_id')
				->join('in_preguntas', 'in_doc_preguntas.in_pregunta_id', '=', 'in_preguntas.id')
				->join('in_fuentes', 'in_base_fuentes.in_fuente_id', '=', 'in_fuentes.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
				->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
				->join('sis_documento_fuentes', 'in_base_fuentes.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')

		)
		->addColumn('btns', 'Indicadores/Admin/Respuesta/Datatable/botones')
		->rawColumns(['btns'])
		->toJson();
});


Route::get('indicadores/lineabase', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InLineaBase::select(
				'id',
				's_linea_base',
				'activo'
			)
		)
		->addColumn('btns', 'Indicadores/Admin/Lineabase/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});


Route::get('indicadores/basefuente', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InIndicador::select([
				'in_indicadors.id',
				'areas.nombre as area', 'in_indicadors.s_indicador',
				'in_indicadors.activo'
			])
				->join('areas', 'in_indicadors.area_id', '=', 'areas.id')
		)
		->addColumn('btns', 'Indicadores/Admin/BaseFuente/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/basedocumen', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InFuente::select([
				'in_fuentes.id',
				'in_linea_bases.s_linea_base',
				'in_fuentes.activo',
				'in_indicadors.s_indicador'
			])
				->join('in_indicadors', 'in_fuentes.in_indicador_id', '=', 'in_indicadors.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
		)
		->addColumn('btns', 'Indicadores/Admin/Basedocumen/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/validacion', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InValidacion::select([
				'in_validacions.id',
				'in_preguntas.s_pregunta',
				'in_validacions.activo',
				'sis_tablas.s_descripcion as s_tabla',
				'sis_campo_tablas.s_descripcion as s_campo',
				'in_linea_bases.s_linea_base'
			])
				->join('in_preguntas', 'in_validacions.in_pregunta_id', '=', 'in_preguntas.id')
				->join('in_fuentes', 'in_validacions.in_fuente_id', '=', 'in_fuentes.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
				->join('sis_tablas', 'in_validacions.sis_tabla_id', '=', 'sis_tablas.id')
				->join('sis_campo_tablas', 'in_validacions.sis_campo_tabla_id', '=', 'sis_campo_tablas.id')
		)
		->addColumn('btns', 'Indicadores/Admin/Validacion/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/acciongestion', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InAccionGestion::select([
				'in_accion_gestions.id',
				'sis_actividads.nombre as sis_actividad_id',
				'in_accion_gestions.i_porcentaje',
				'in_accion_gestions.i_tiempo',
				'parametros.nombre  as i_prm_ttiempo_id',
				'sis_fsoportes.nombre as sis_fsoporte_id',
				'sis_documento_fuentes.nombre as sis_documento_fuente_id',
				'in_accion_gestions.activo'
			])
				->join('sis_documento_fuentes', 'in_accion_gestions.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')
				->join('sis_fsoportes', 'in_accion_gestions.sis_fsoporte_id', '=', 'sis_fsoportes.id')
				->join('parametros', 'in_accion_gestions.i_prm_ttiempo_id', '=', 'parametros.id')
				->join('sis_actividads', 'in_accion_gestions.sis_actividad_id', '=', 'sis_actividads.id')

		)
		->addColumn('btns', 'Indicadores/Admin/Acciongestion/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/nnajs', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(FiDatosBasico::where('activo', 1))
		->addColumn('btns', 'Indicadores/Dashboard/Individual/datatable/botones')
		->rawColumns(['btns'])
		->toJson();
});


Route::get('indicadores/docpreguntas', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(InDocPregunta::select([
			'in_doc_preguntas.id', 'in_preguntas.s_pregunta', 'sis_tablas.s_descripcion as s_tabla', 'sis_campo_tablas.s_descripcion as s_campo'
		])
			->join('in_preguntas', 'in_doc_preguntas.in_pregunta_id', '=', 'in_preguntas.id')
			->join('sis_tablas', 'in_doc_preguntas.sis_tabla_id', '=', 'sis_tablas.id')
			->join('sis_campo_tablas', 'in_doc_preguntas.sis_campo_tabla_id', '=', 'sis_campo_tablas.id')
			->where('in_doc_preguntas.activo', 1)->where('in_doc_preguntas.in_base_fuente_id', $request->in_fuente_id))
		->addColumn('btns', 'Indicadores/Admin/DocIndicador/botones/botonesdoc')
		->rawColumns(['btns'])
		->toJson();
});



Route::get('indicadores/valoracion', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InLineabaseNnaj::select([
				'sis_nnajs.id',
				'sis_nnajs.activo',
				'fi_datos_basicos.s_primer_nombre',
				'fi_datos_basicos.s_segundo_nombre',
				'fi_datos_basicos.s_primer_apellido',
				'fi_datos_basicos.s_segundo_apellido',
			])
				->join('sis_nnajs', 'in_lineabase_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
				->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
				->where('i_prm_linea_base_id', 227)
				->groupBy('sis_nnajs.id')
				->groupBy('fi_datos_basicos.s_primer_nombre')
				->groupBy('fi_datos_basicos.s_segundo_nombre')
				->groupBy('fi_datos_basicos.s_primer_apellido')
				->groupBy('fi_datos_basicos.s_segundo_apellido')
		)
		->addColumn('btns', 'Indicadores/Admin/Valoracion/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/acciongestion', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InLineabaseNnaj::select([
				'sis_nnajs.id',
				'sis_nnajs.activo',
				'fi_datos_basicos.s_primer_nombre',
				'fi_datos_basicos.s_segundo_nombre',
				'fi_datos_basicos.s_primer_apellido',
				'fi_datos_basicos.s_segundo_apellido',
			])
				->join('sis_nnajs', 'in_lineabase_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
				->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
				->where('i_prm_linea_base_id', 227)
				->groupBy('sis_nnajs.id')
				->groupBy('fi_datos_basicos.s_primer_nombre')
				->groupBy('fi_datos_basicos.s_segundo_nombre')
				->groupBy('fi_datos_basicos.s_primer_apellido')
				->groupBy('fi_datos_basicos.s_segundo_apellido')
		)
		->addColumn('btns', 'Indicadores/Admin/Acciongestion/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});





Route::get('indicadores/basennaj', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InLineabaseNnaj::select([
				'in_lineabase_nnajs.id',
				'in_lineabase_nnajs.activo',
				'in_linea_bases.s_linea_base',
			])
				->join('in_fuentes', 'in_lineabase_nnajs.in_fuente_id', '=', 'in_fuentes.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
		)
		->addColumn('btns', 'Indicadores/Admin/Valoracion/botones/botonesbas')
		->rawColumns(['btns'])
		->toJson();
});
Route::get('indicadores/basennajag', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InLineabaseNnaj::select([
				'in_lineabase_nnajs.id',
				'in_lineabase_nnajs.activo',
				'in_linea_bases.s_linea_base',
				'in_lineabase_nnajs.sis_nnaj_id',
			])
				->join('in_fuentes', 'in_lineabase_nnajs.in_fuente_id', '=', 'in_fuentes.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
				->where('sis_nnaj_id', $request->all()['nnajxxxx'])
		)
		->addColumn('btns', 'Indicadores/Admin/Acciongestion/botones/botonesact')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/baseactividades', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InAccionGestion::select([
				'in_accion_gestions.id',
				'in_accion_gestions.in_lineabase_nnaj_id',
				'in_accion_gestions.activo',
				'sis_actividads.nombre',
				'in_lineabase_nnajs.sis_nnaj_id',
			])
				->join('in_lineabase_nnajs', 'in_accion_gestions.in_lineabase_nnaj_id', '=', 'in_lineabase_nnajs.id')
				->join('sis_actividads', 'in_accion_gestions.sis_actividad_id', '=', 'sis_actividads.id')
				->join('sis_documento_fuentes', 'sis_actividads.sis_documento_fuente_id', '=', 'sis_documento_fuentes.id')
				->where('in_lineabase_nnajs.sis_nnaj_id', $request->all()['nnajxxxx'])
				->where('in_lineabase_nnajs.in_fuente_id', $request->all()['basexxxx'])
		)
		->addColumn('btns', 'Indicadores/Admin/Acciongestion/Actividad/botones/botonesact')
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/actfuente', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(
			InActsoporte::select([
				'in_actsoportes.id',
				'in_actsoportes.activo',
				'sis_fsoportes.nombre',
				'in_lineabase_nnajs.sis_nnaj_id',
				'in_accion_gestions.in_lineabase_nnaj_id',
				'in_actsoportes.in_accion_gestion_id',
			])
				->join('in_accion_gestions', 'in_actsoportes.in_accion_gestion_id', '=', 'in_accion_gestions.id')
				->join('in_lineabase_nnajs','in_accion_gestions.in_lineabase_nnaj_id','=','in_lineabase_nnajs.id')
				->join('sis_fsoportes', 'in_actsoportes.sis_fsoporte_id', '=', 'sis_fsoportes.id')
				->where('in_actsoportes.in_accion_gestion_id', $request->all()['activida'])
		)
		->addColumn('btns', 'Indicadores/Admin/Acciongestion/Fuentes/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});


Route::get('indicadores/nnajlineabase', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$dataxxxx=$request->all();

	return datatables()
		->eloquent(
			InLineabaseNnaj::select([
				'sis_nnajs.id',
				'sis_nnajs.activo',
				'fi_datos_basicos.s_primer_nombre',
				'fi_datos_basicos.s_segundo_nombre',
				'fi_datos_basicos.s_primer_apellido',
				'fi_datos_basicos.s_segundo_apellido',
			])
				->join('sis_nnajs', 'in_lineabase_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
				->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
				->where('i_prm_linea_base_id', 227)
				->groupBy('sis_nnajs.id')
				->groupBy('fi_datos_basicos.s_primer_nombre')
				->groupBy('fi_datos_basicos.s_segundo_nombre')
				->groupBy('fi_datos_basicos.s_primer_apellido')
				->groupBy('fi_datos_basicos.s_segundo_apellido')
		)
		->addColumn('btns', $dataxxxx['botonesx'])
		->rawColumns(['btns'])
		->toJson();
});

Route::get('indicadores/diagnostico', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$dataxxxx=$request->all();
	return datatables()
		->eloquent(
			InLineabaseNnaj::select([
				'in_lineabase_nnajs.id',
				'in_lineabase_nnajs.activo',
				'in_linea_bases.s_linea_base',
				'in_lineabase_nnajs.sis_nnaj_id',
			])
				->join('in_fuentes', 'in_lineabase_nnajs.in_fuente_id', '=', 'in_fuentes.id')
				->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
		)
		->addColumn('btns', $dataxxxx['botonesx'])
		->rawColumns(['btns'])
		->toJson();
});

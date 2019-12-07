<?php

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgContexto;
use App\Models\Acciones\Grupales\AgConvenio;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use Illuminate\Http\Request;

Route::get('agr/talleres', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgTaller::select(['id', 's_taller', 's_descripcion', 'activo'])
            ->where('ag_tallers.activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agtaller/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('agr/temas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgTema::select(['ag_temas.id', 'ag_temas.s_tema',  'ag_temas.activo', 'areas.nombre'])
        ->join('areas','ag_temas.area_id','=','areas.id')
            ->where('ag_temas.activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agtema/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/contextos', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgContexto::select(['id', 's_contexto', 's_descripcion', 'activo'])
            ->where('activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agcontexto/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/recursos', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgRecurso::select(['ag_recursos.id', 'ag_recursos.s_recurso', 'ag_recursos.activo', 'parametros.nombre as trecurso', 'parametros.nombre as umedidax'])
            ->join('parametros','ag_recursos.i_prm_trecurso_id','=','parametros.id')
            ->where('ag_recursos.activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agrecurso/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/convenios', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgConvenio::select(['ag_convenios.id', 'ag_convenios.s_convenio', 'parametros.nombre as i_prm_tconvenio_id', 'parametros.nombre as i_prm_entidad_id', 'ag_convenios.s_descripcion', 'ag_convenios.i_nconvenio', 'ag_convenios.d_subscrip', 'ag_convenios.d_terminac', 'ag_convenios.activo'])
            ->join('parametros','ag_convenios.i_prm_tconvenio_id','=','parametros.id')
            ->where('ag_convenios.activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agconvenio/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/subtemas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgSubtema::select(['ag_subtemas.id', 'ag_subtemas.s_subtema', 'ag_tallers.s_taller as ag_taller_id', 'ag_subtemas.s_descripcion', 'ag_subtemas.activo'])
            ->join('ag_tallers','ag_subtemas.ag_taller_id','=','ag_tallers.id')
            ->where('ag_subtemas.activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agsubtema/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/actividades', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgActividad::select(['ag_actividads.id', 'ag_actividads.d_registro', 'sis_dependencias.nombre as sis_deporigen_id', 'ag_actividads.activo'])
            ->join('sis_dependencias','ag_actividads.sis_deporigen_id','=','sis_dependencias.id')
            ->where('ag_actividads.activo', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agactividad/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/responsables', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgResponsable::select(['parametros.nombre as i_prm_responsable_id', 
        'users.s_primer_nombre as nombre1', 
        'users.s_segundo_nombre as nombre2', 
        'users.s_primer_apellido as apellido1', 
        'users.s_segundo_apellido as apellido2', 
        'users.s_documento as documento1',
        'ag_actividads.id',])
            ->join('ag_actividads','ag_responsables.ag_actividad_id','=','ag_actividads.id') 
            ->join('parametros','ag_responsables.i_prm_responsable_id','=','parametros.id')
            ->join('users','ag_responsables.user_id','=','users.id')
            ->where('ag_responsables.activo', 1)
            ->where('ag_responsables.ag_actividad_id', $request->all()['ag_actividad_id']))
        ->addColumn('btns', 'Acciones/Grupales/Agactividad/botones/botonelim')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/asistentes', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgAsistente::select(['fi_datos_basicos.s_primer_nombre as nombre11', 
        'fi_datos_basicos.s_segundo_nombre as nombre22', 
        'fi_datos_basicos.s_primer_apellido as apellido11', 
        'fi_datos_basicos.s_segundo_apellido as apellido22', 
        'fi_datos_basicos.s_documento as documento2',
        'ag_actividads.id',])
        ->join('ag_actividads','ag_asistentes.ag_actividad_id','=','ag_actividads.id')
        ->join('fi_datos_basicos','ag_asistentes.fi_dato_basico_id','=','fi_datos_basicos.id')
            ->where('ag_asistentes.activo', 1)
            ->where('ag_asistentes.ag_actividad_id', $request->all()['ag_actividad_id']))
        ->addColumn('btns', 'Acciones/Grupales/Agactividad/botones/botonelim')
        ->rawColumns(['btns'])
        ->toJson();
});
 
Route::get('ag/relaciones', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgRelacion::select(['ag_relacions.i_cantidad as cantidad', 
        'ag_recursos.s_recurso as recursox', 
        'parametros.nombre as trecurso', 
        'parametros.nombre as umedidax',
        'ag_actividads.id',])
        ->join('ag_actividads','ag_relacions.ag_actividad_id','=','ag_actividads.id')
        ->join('ag_recursos','ag_relacions.ag_recurso_id','=','ag_recursos.id')
        ->join('parametros','ag_recursos.i_prm_trecurso_id','=','parametros.id')
            ->where('ag_relacions.activo', 1)
            ->where('ag_relacions.ag_actividad_id', $request->all()['ag_actividad_id']))
        ->addColumn('btns', 'Acciones/Grupales/Agactividad/botones/botonelim')
        ->rawColumns(['btns'])
        ->toJson();
});
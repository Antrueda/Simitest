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
use App\Models\Indicadores\Area;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisEslug;
use App\Models\Tema;
use Illuminate\Http\Request;

Route::get('agr/talleres', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgTaller::select([
            'ag_tallers.id', 'ag_tallers.s_taller', 'ag_tallers.s_descripcion',
            'ag_tallers.sis_esta_id', 'ag_tallers.ag_tema_id', 'sis_estas.s_estado'
        ])
            ->join('ag_temas', 'ag_tallers.ag_tema_id', '=', 'ag_temas.id')
            ->join('sis_estas', 'ag_tallers.sis_esta_id', '=', 'sis_estas.id'))
        ->addColumn('btns', 'Acciones/Grupales/Agtaller/botones/botonesapi')
        ->addColumn('s_estado', $request->estadoxx)
        ->rawColumns(['btns', 's_estado'])
        ->toJson();
});

Route::get('agr/temas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgTema::select(['ag_temas.id', 'ag_temas.s_tema',  'ag_temas.sis_esta_id', 'areas.nombre'])
            ->join('areas', 'ag_temas.area_id', '=', 'areas.id')
            ->where('ag_temas.sis_esta_id', 1))

        ->addColumn('btns', 'Acciones/Grupales/Agtema/botones/botonesapi',2)
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('agr/ttemas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgTema::select(['ag_temas.id', 'ag_temas.s_tema',  'ag_temas.sis_esta_id', 'areas.nombre'])
            ->join('areas', 'ag_temas.area_id', '=', 'areas.id')
            ->where('ag_temas.sis_esta_id', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agttema/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/contextos', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgContexto::select(['id', 's_contexto', 's_descripcion', 'sis_esta_id'])
            ->where('sis_esta_id', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agcontexto/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/recursos', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgRecurso::select(['ag_recursos.id', 'ag_recursos.s_recurso', 'ag_recursos.sis_esta_id', 'parametros.nombre as trecurso', 'parametros.nombre as umedidax'])
            ->join('parametros', 'ag_recursos.i_prm_trecurso_id', '=', 'parametros.id')
            ->where('ag_recursos.sis_esta_id', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agrecurso/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/convenios', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgConvenio::select(['ag_convenios.id', 'ag_convenios.s_convenio', 'parametros.nombre as i_prm_tconvenio_id', 'parametros.nombre as i_prm_entidad_id', 'ag_convenios.s_descripcion', 'ag_convenios.i_nconvenio', 'ag_convenios.d_subscrip', 'ag_convenios.d_terminac', 'ag_convenios.sis_esta_id'])
            ->join('parametros', 'ag_convenios.i_prm_tconvenio_id', '=', 'parametros.id')
            ->where('ag_convenios.sis_esta_id', 1))
        ->addColumn('btns', 'Acciones/Grupales/Agconvenio/botones/botonesapi')
        ->rawColumns(['btns'])
        ->toJson();
});

Route::get('ag/subtemas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(
            AgSubtema::select([
                'ag_subtemas.id', 'ag_subtemas.s_subtema', 'ag_tallers.s_taller',
                'ag_subtemas.s_descripcion', 'ag_subtemas.sis_esta_id', 'ag_subtemas.ag_taller_id', 'sis_estas.s_estado'
            ])
                ->join('ag_tallers', 'ag_subtemas.ag_taller_id', '=', 'ag_tallers.id')
                ->join('sis_estas', 'ag_subtemas.sis_esta_id', '=', 'sis_estas.id')
        )
        ->addColumn('btns', $request->botonesx)
        ->addColumn('s_estado', $request->estadoxx)
        ->rawColumns(['btns', 's_estado'])
        ->toJson();
});







Route::get('ag/relaciones', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgRelacion::select([
            'ag_relacions.i_cantidad as cantidad',
            'ag_recursos.s_recurso as recursox',
            'parametros.nombre as trecurso',
            'parametros.nombre as umedidax',
            'ag_actividads.id',
        ])
            ->join('ag_actividads', 'ag_relacions.ag_actividad_id', '=', 'ag_actividads.id')
            ->join('ag_recursos', 'ag_relacions.ag_recurso_id', '=', 'ag_recursos.id')
            ->join('parametros', 'ag_recursos.i_prm_trecurso_id', '=', 'parametros.id')
            ->where('ag_relacions.sis_esta_id', 1)
            ->where('ag_relacions.ag_actividad_id', $request->all()['ag_actividad_id']))
        ->addColumn('btns', 'Acciones/Grupales/Agactividad/botones/botonelim')
        ->rawColumns(['btns'])
        ->toJson();
});



Route::get('ag/formativas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    $respusta = [
        'dataxxxx' => [],
        'comboxxx' => ''
    ];
    if ($request->valuexxx > 0)
        switch ($request->casosxxx) {
            case 'area_id':
                $respusta['dataxxxx'] = Area::combo_temas(['cabecera' => true, 'ajaxxxxx' => true, 'areaxxxx' => $request->valuexxx]);
                $respusta['comboxxx'] = 'ag_tema_id';
                break;
            case 'ag_tema_id':
                $respusta['dataxxxx'] = AgTema::combo_talleres(['cabecera' => true, 'ajaxxxxx' => true, 'agtemaid' => $request->valuexxx]);
                $respusta['comboxxx'] = 'ag_taller_id';
                break;
            case 'ag_taller_id':
                $agtaller = AgTaller::combo_subtemas(['cabecera' => true, 'ajaxxxxx' => true, 'agtaller' => $request->valuexxx]);
                if (count($agtaller) == 1) {
                    $agtaller[0] = ['valuexxx' => 1, 'optionxx' => 'N/A'];
                }
                $respusta['dataxxxx'] = $agtaller;
                $respusta['comboxxx'] = 'ag_sttema_id';
                break;
        }
    return response()->json($respusta);
});

Route::get('agr/tematalleres', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(AgTema::select(['ag_temas.id', 'ag_temas.s_tema',  'ag_temas.sis_esta_id', 'areas.nombre'])
            ->join('areas', 'ag_temas.area_id', '=', 'areas.id')
            ->where('ag_temas.sis_esta_id', 1))
        ->addColumn('btns', $request->botonesx)
        ->rawColumns(['btns'])
        ->toJson();
});


Route::get('agr/tallersubtemas', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(
            AgTaller::select([
                'ag_tallers.id', 'ag_tallers.s_taller',  'ag_tallers.sis_esta_id',
                'ag_temas.s_tema', 'sis_estas.s_estado'
            ])
                ->join('ag_temas', 'ag_tallers.ag_tema_id', '=', 'ag_temas.id')
                ->join('sis_estas', 'ag_tallers.sis_esta_id', '=', 'sis_estas.id')
        )
        ->addColumn('s_estado', $request->estadoxx)
        ->addColumn('btns', $request->botonesx)
        ->rawColumns(['btns', 's_estado'])
        ->toJson();
});
Route::get('agr/espaluga', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(
            SisEslug::select([
                'sis_eslugs.id', 'sis_eslugs.s_espaluga',  'sis_eslugs.sis_esta_id',
                'sis_estas.s_estado'
            ])

                ->join('sis_estas', 'sis_eslugs.sis_esta_id', '=', 'sis_estas.id')
                ->whereNotIn('sis_eslugs.id',[1])
        )
        ->addColumn('s_estado', $request->estadoxx)
        ->addColumn('btns', $request->botonesx)
        ->rawColumns(['btns', 's_estado'])
        ->toJson();
});

Route::get('agr/dependencias', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return datatables()
        ->eloquent(
            SisDepen::select([
                'sis_depens.id', 'sis_depens.nombre',  'sis_depens.sis_esta_id',
                'sis_estas.s_estado'
            ])

                ->join('sis_estas', 'sis_depens.sis_esta_id', '=', 'sis_estas.id')
                ->where('sis_depens.sis_esta_id',1)
        )
        ->addColumn('s_estado', $request->estadoxx)
        ->addColumn('btns', $request->botonesx)
        ->rawColumns(['btns', 's_estado'])
        ->toJson();
});

Route::get('ag/espacios', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    $respusta = [
        'dataxxxx' => [['valuexxx' => 1, 'optionxx' => 'N/A']],
        'readonly' => true, 'campoxxx' => 's_prm_espac', 'comboxxx' => 'i_prm_lugar_id'
    ];


       $respusta['dataxxxx'] = SisDepen::getLugares(['cabecera'=>true,'esajaxxx'=>true,
        'padrexxx'=>$request->padrexxx]);

        $cantidad=count($respusta['dataxxxx']);
        if($cantidad==1){
            $respusta['dataxxxx']=[['valuexxx' => 1, 'optionxx' => 'N/A']];
        }

    if ($request->padrexxx == 1) {

        $respusta['readonly'] = false;
    }
    return response()->json($respusta);
});

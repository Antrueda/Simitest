<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\EvasionParentescoRequest;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\Pivotes\EvasionParentesco;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Traits\Acciones\SalidaTrait;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Controlador para administrar las violencias de las siguientes preguntas:
 *
 * 12.1 ¿Presenta algún tipo de violencia? y
 * 12.1 A Ha ejercido algún tipo de presunta violencia durante la actividad en conflicto con la ley?
 *
 * siempre y cuando la respuesta sea SI
 */
class PresaberController extends Controller
{
    use SalidaTrait;

    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'evasionpar';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'REPORTE DE EVASIÓN';
        $this->opciones['routxxxx'] = 'evasionpar';
        $this->opciones['slotxxxx'] = 'evasionpar';
        $this->opciones['tituloxx'] = "FAMILIARES";
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Acciones.';
        $this->opciones['carpetax'] = 'Individuales.Evasion';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
            $this->opciones['parentez'] = Tema::comboAsc(66,true, false);
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['aievasion.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A REPORTE DE EVASIÓN', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function getListado(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getParentesco($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['parametx'] = [$dataxxxx['padrexxx']->sis_nnaj_id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablatodos']
        ];
        $this->opciones['botoform'][0]['routingx'][1]=[$dataxxxx['padrexxx']->sis_nnaj_id,$dataxxxx['padrexxx']->id];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $familiar = EvasionParentesco::where('reporte_evasion_id', $dataxxxx['padrexxx']->id)->get();
            if(count($familiar)<2){
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                'titulist' => 'REPRESENTANTE LEGAL',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route('evasionpar.listodox', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        // ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA NACIMIENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    // ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'sis_nnajs.id'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                ],



                'tablaxxx' => 'datatable',
                'permisox' => 'evasionpar',
                'routxxxx' => 'ficomposicion',
                'parametr' => $dataxxxx['padrexxx']->sis_nnaj_id,
            ],

        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListodo(Request $request, AiReporteEvasion $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->sis_nnaj_id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getTodoComFami($request);
        }
    }


    public function create(AiReporteEvasion $padrexxx)
    {


        $this->opciones['rutaxxxx']=route('evasionpar'.'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'familiar'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
        ->route('evasionpar.editar', [$dataxxxx['padrexxx']->id,EvasionParentesco::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(EvasionParentescoRequest $request,AiReporteEvasion $padrexxx)
    {
        $request->request->add(['reporte_evasion_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' =>1]);
        return $this->grabar(['requestx'=>$request, 'infoxxxx'=>'Familiar agregado con éxito','padrexxx'=>$padrexxx,'modeloxx'=>'']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(AiReporteEvasion $padrexxx, EvasionParentesco $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'familiar'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(AiReporteEvasion $padrexxx, EvasionParentesco $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => ['editar', 'familiar'],
            'padrexxx' => $padrexxx]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(EvasionParentescoRequest $request, AiReporteEvasion $padrexxx, EvasionParentesco $modeloxx )
    {
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Familiar actualizado con éxito','padrexxx'=>$padrexxx,'modeloxx'=>$modeloxx]);
    }

    public function inactivate(AiReporteEvasion $padrexxx,EvasionParentesco $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$padrexxx]);
    }
    public function destroy(AiReporteEvasion $padrexxx,EvasionParentesco $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('aievasion.editar', [$padrexxx->sis_nnaj_id,$padrexxx->id, ])
            ->with('info', 'Familiar inactivado correctamente');
    }
}

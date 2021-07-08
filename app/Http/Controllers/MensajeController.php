<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Alertas\AlertasCrearRequest;
use App\Http\Requests\Alertas\AlertasEditarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mensajes;
use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;
use App\Traits\Alertas\AlertasTrait;

class MensajeController extends Controller
{
    use AlertasTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'mensajes';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'MENSAJES';
        $this->opciones['routxxxx'] = 'mensajes';
        $this->opciones['slotxxxx'] = 'mensajes';
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Mensajes.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Mensajes';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';

        $this->opciones['tituloxx'] = "MENSAJES";
        $this->opciones['fechcrea'] ='';
        $this->opciones['fechedit'] ='';
        $this->opciones['usercrea'] ='';
        $this->opciones['useredit'] ='';



        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A MENSAJES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index()
    {


        // $respuest = Http::get('http://localhost:8085/areas')->json();
        // // echo '<pre>';
        // // print_r($respuest);

        // ddd($respuest);

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'MENSAJES', ////////
                'titulist' => 'LISTA DE MENSAJES',////////
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'].'.mensajes',$this->opciones['parametr']), //////
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TITULO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DESCRIPCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
                    ['data' => 'titulo', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 'descripcion', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'mensajedatatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx=[$this->opciones['routxxxx']];
            $request->botonesx= $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx='layouts.components.botones.estadosx';
            return $this->getMensajes($request);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.js.js']
        ];

        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['servicio'] = ['' => 'Seleccione'];
        $this->opciones['motivoxx']=  ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        $estadoid = 0;
        $this->opciones['aniosxxx'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            // estado mensajes
            $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
            $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['motivoxx']=  [$dataxxxx['modeloxx']->estusuario_id => $dataxxxx['modeloxx']->estusuario->estado];
            //$dataxxxx['modeloxx']->estusuario_id =
            $this->opciones['perfilxx'] = 'sinperfi';
            $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }

        }


        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }
    public function store(AlertasCrearRequest $request)
    {
        return $this->grabar([
            'requestx'=>$request,
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [Mensajes::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Mensajes $objetoxx)
    {
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $objetoxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensajes $objetoxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $objetoxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mensajes $objetoxx
     * @return \Illuminate\Http\Response
     */


    public function update(AlertasEditarRequest $request, Mensajes $objetoxx)
    {
        return $this->grabar(['requestx'=>$request,'modeloxx'=> $objetoxx,'menssage'=>'Mensaje actualizado con éxito'] );
    }

    public function inactivate(Mensajes $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$objetoxx]);
    }


    public function destroy(Request $request, Mensajes $objetoxx)
    {

        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Mensaje inactivado');
    }


    public function activate(Mensajes $modeloxx)
    {
        $this->opciones['parametr'] = [$modeloxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-activarx')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.activarx', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['activar','activar'],'padrexxx'=>$modeloxx]);
    }


    public function activar(Request $request, Mensajes $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Mensaje activado');
    }

    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2498])
            );
        }
    }

}



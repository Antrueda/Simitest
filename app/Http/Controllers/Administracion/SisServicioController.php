<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\SisServicioCrearRequest;
use App\Http\Requests\Sistema\SisServicioEditarRequest;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisServicio;
use App\Traits\Administracion\SistemaTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisServicioController extends Controller
{
    use SistemaTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'servicio';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'SERVICIOS';
        $this->opciones['routxxxx'] = 'servicio';
        $this->opciones['slotxxxx'] = 'servicio';
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Administracion.Servicios.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Servicio';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';

        $this->opciones['tituloxx'] = "SERVICIOS";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A SERVICIOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index()
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO SERVICIO',
                'titulist' => 'LISTA DE SERVICIOS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', []),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
                    ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableservicios',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getListado(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getServiciosTait($request); //Por UPI

        }

    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {
        return redirect()
        ->route($this->opciones['routxxxx'].'.editar', [SisServicio::transaccion($dataxxxx, $objetoxx)->id])
        ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['tituloxx']='SERVICIO';
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);

        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
            $this->opciones['pestpadr'] = 2;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

            return $this->view(['modeloxx'=>'','accionxx'=>['crear','formulario']]);
    }
    public function store(SisServicioCrearRequest $request)
    {

        return $this->grabar($request->all(), '', 'Datos básicos creados con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SisServicio $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(SisServicio $objetoxx)
    {
        return $this->view(['modeloxx'=>$objetoxx,'accionxx'=>['ver','formulario']]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SisServicio $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(SisServicio $objetoxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx'=>$objetoxx,'accionxx'=>['editar','formulario']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SisServicio $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(SisServicioEditarRequest $request,  SisServicio $objetoxx)
    {

        return $this->grabar($request->all(), $objetoxx, 'Datos básicos actualizados con exito');
    }

    public function inactivate(SisServicio $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx'=>$objetoxx,'accionxx'=>['destroy','destroy']]);
    }


    public function destroy(Request $request, SisServicio $objetoxx)
    {

        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Servicio inactivada correctamente');
    }
}

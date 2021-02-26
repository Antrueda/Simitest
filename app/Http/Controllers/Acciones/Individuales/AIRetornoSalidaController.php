<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\AIRetornoSalidaRequest;
use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Sistema\SisDepen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sistema\SisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Acciones\SalidaTrait;

class AIRetornoSalidaController extends Controller
{
    use SalidaTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'airetornosalida';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'RETORNO DE SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL';
        $this->opciones['routxxxx'] = 'airetornosalida';
        $this->opciones['slotxxxx'] = 'airetornosalida';
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['rutacarp'] = 'Acciones.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Individuales.RetornoSalida';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['ampmxxxx'] = Tema::combo(5, false, false);
        $this->opciones['document'] = Tema::combo(3, true, false);
        $this->opciones['parentez'] = Tema::combo(66, false, false);
        $this->opciones['condicix'] = Tema::combo(308, false, false);
        $this->opciones['parentez'] = Tema::combo(66, true, false);

        $this->opciones['tituloxx'] = "RETORNO DE SALIDAS Y PERMISOS CON ACUDIENTE Y/O REPRESENTANTE LEGAL";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A RETORNOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'REGISTRAR RETORNO',
                'titulist' => 'LISTA DE RETORNOS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexxx->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'FECHA DE RETORNO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'HORA DE RETORNO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'OBSERVACIÓN', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                    ],[

                        ['td' => 'FUNCIONARIO(A) / CONTRATISTA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                       ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'ai_retosalis.id'],
                    ['data' => 'fecha', 'name' => 'ai_retosalis.fecha'],
                    ['data' => 'hora_retorno', 'name' => 'ai_retosalis.hora_retorno'],
                    ['data' => 'name', 'name' => 'users.name'],
                    ['data' => 'observaciones', 'name' => 'ai_retosalis.observaciones'],
                    ['data' => 'upi', 'name' => 'upi.nombre as upi'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$padrexxx->id],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getListado(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {

            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getRetorno($request);
        }
    }

    private function grabar($dataxxxx)
    {
        $usuariox = AiRetornoSalida::transaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id, $usuariox->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
        ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->sis_nnaj_id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['dependen'] = SisDepen::combo(true, false);
        $this->opciones['usuarioz'] = User::comboCargo(true, false);
        $this->opciones['respoupi'] = $dataxxxx['padrexxx']->sis_nnaj->Responsable[0];
        $this->opciones['vercrear'] = false;
        $parametr = 0;
        if ($dataxxxx['modeloxx'] != '') {
            
            $this->opciones['vercrear'] = true;
            $parametr = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;
            $dataxxxx['modeloxx']->prm_condicion_id =  $dataxxxx['modeloxx']->condicion->prm_condicion_id;
            $dataxxxx['modeloxx']->prm_orientado_id =  $dataxxxx['modeloxx']->condicion->prm_orientado_id;
            $dataxxxx['modeloxx']->prm_enfermerd_id =  $dataxxxx['modeloxx']->condicion->prm_enfermerd_id;
            $dataxxxx['modeloxx']->prm_brotes_id =  $dataxxxx['modeloxx']->condicion->prm_brotes_id;
            $dataxxxx['modeloxx']->prm_laceracio_id =  $dataxxxx['modeloxx']->condicion->prm_laceracio_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $dataxxxx['padrexxx']->sis_nnaj_id],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx)
    {
        $salidax = AiSalidaMenores::select('sis_nnaj_id')->where('sis_nnaj_id', $padrexxx->id)->first();
        if ($salidax==null) {
            return redirect()
                ->route('aisalidamenores', [$padrexxx->id])
                ->with('info', 'No hay ninguna salida registrada');
        }
        $this->opciones['rutaxxxx'] = route('airetornosalida.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }
    public function store(AIRetornoSalidaRequest $request, SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Datos de retorno creada con exito', 'modeloxx' => '', 'padrexxx' => $padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function show(SisNnaj $padrexxx, AiRetornoSalida $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $modeloxx
     * @return \Illuminate\Http\Response
     */
    public function edit(SisNnaj $padrexxx, AiRetornoSalida $modeloxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id, $modeloxx->id]],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $padrexxx
     * @return \Illuminate\Http\Response
     */
    public function update(AIRetornoSalidaRequest $request, SisNnaj $padrexxx,  AiRetornoSalida $modeloxx)
    {
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Datos de retorno actualizados con exito', 'modeloxx' => $modeloxx, 'padrexxx' => $padrexxx]);
    }

    public function inactivate(SisNnaj $padrexxx,AiRetornoSalida $modeloxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx->fi_datos_basico]);
    }


    public function destroy(Request $request, AiRetornoSalida $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj->id])
            ->with('info', 'Retorno inactivada correctamente');
    }
}

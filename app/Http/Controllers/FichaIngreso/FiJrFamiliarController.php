<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiJrFamiliarCrearRequest;
use App\Http\Requests\FichaIngreso\FiJrFamiliarEditarRequest;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\FichaIngreso\FiJrFamiliar;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiJrFamiliarController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'fijrfamiliar';
        $this->opciones['routxxxx'] = 'fijrfamiliar';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Justicia';
        $this->opciones['slotxxxx'] = 'fijusticia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "JUSTICIA RESTAURATIVA FAMILIAR";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
            $this->opciones['botoform'] = [
                [
                    'mostrars' => true, 'accionxx' => '', 'routingx' => ['fijusticia.editar', []],
                    'formhref' => 2, 'tituloxx' => "VOLVER A JUSTICIA RESTAURATIVA", 'clasexxx' => 'btn btn-sm btn-primary'
                ],
            ];
    }

    private function view($dataxxxx)
    {
        $this->opciones['botoform'][0]['routingx'][1]=[$dataxxxx['padrexxx']->sis_nnaj_id,$dataxxxx['padrexxx']->id];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$this->opciones['usuariox']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.familiar'],

        ];

        $this->opciones['vigentex'] = Tema::combo(424, true, false); // Anterior combo 23
        $this->opciones['compfami'] = FiCompfami::comboNoNNaj($dataxxxx['padrexxx'], true, false);
        $this->opciones['motivoxx'] = Tema::combo(362, true, false);
        $this->opciones['tiempoxx'] = Tema::combo(4, true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';

        $this->opciones['aniosxxx'] = '';
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiJustrest $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'familiar' ], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $jrfamili=FiJrFamiliar::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'].'.editar', [$jrfamili->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiJrFamiliarCrearRequest $request,FiJustrest $padrexxx)
    {
        $dataxxxx=$request->all();
        $dataxxxx['fi_justrest_id']=$padrexxx->id;
        return $this->grabar($dataxxxx, '', 'Composicion familiar creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiCompfami  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(FiJrFamiliar $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'familiar' ], 'padrexxx' => $modeloxx->fi_justrest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiJrFamiliar $modeloxx)
    {
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'familiar' ], 'padrexxx' => $modeloxx->fi_justrest]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiJrFamiliarEditarRequest $request,  FiJrFamiliar $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Composicion familiar actualizada con éxito');
    }

    public function inactivate(FiJrFamiliar $modeloxx)
    {

        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy' ], 'padrexxx' => $modeloxx->fi_justrest->sis_nnaj->fi_datos_basico]);
    }


    public function destroy(Request $request, FiJrFamiliar $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('fijusticia.editar', [$modeloxx->fi_justrest->sis_nnaj_id,$modeloxx->fi_justrest_id])
            ->with('info', 'Componente inactivado correctamente');
    }
}

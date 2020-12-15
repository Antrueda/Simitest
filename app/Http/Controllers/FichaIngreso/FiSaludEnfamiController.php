<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiEnfermedadesFamiliaCrearRequest;
use App\Http\Requests\FichaIngreso\FiEnfermedadesFamiliaUpdateRequest;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiEnfermedadesFamilia;

use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiSaludEnfamiController extends Controller
{
    private $opciones;
    use FiTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fisalenf';
        $this->opciones['routxxxx'] = 'fisalenf';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Salud';
        $this->opciones['slotxxxx'] = 'fisalud';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "DIAGNÓSTICO INTEGRANTE FAMILIAR";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['condicio'] = Tema::combo(23, true, false);

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fisalud.nuevo', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A SALUD', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
    }
    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getDiagnostico($request);
        }
    }

    private function view($dataxxxx)
    {
        $this->opciones['condnoap'] = Tema::combo(25, true, false);
        $this->opciones['disabled']='disabled';
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $archivox=($dataxxxx['padrexxx']->prm_estrateg_id == 2323) ? 'caminando' : 'js';
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.'.$archivox],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.general'],
        ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['botoform'][0]['routingx'][1] = $this->opciones['parametr'];
        $this->opciones['compfami'] = FiCompfami::comboNoNNaj($dataxxxx['padrexxx'], true, false);
        $this->opciones['servicio'] = ['' => 'seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['disabled']=$dataxxxx['modeloxx']->i_prm_recibe_medicina_id==227?'':'disabled';
            $this->opciones['parametr'][1]=$dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR DIGNOSTICADO',
                'titulist' => 'LISTA DE DIAGNOSTICADOS',
                'dataxxxx' => [],
                'vercrear' => true,
                'urlxxxxx' => route('fisalenf.listaxxx', $this->opciones['parametr'][0]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'FAMILIAR', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 4],

                        ['td' => 'TIPO ENFERMEDAD', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'RECIBE MEDICAMENTO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MEDICAMENTO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'RECIBIÓ TRATAMIENTO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [


                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],

                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_enfermedades_familias.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],

                    ['data' => 's_tipo_enfermedad', 'name' => 'fi_enfermedades_familias.s_tipo_enfermedad'],
                    ['data' => 'medicina', 'name' => 'parametros.nombre as medicina'],
                    ['data' => 's_medicamento', 'name' => 'fi_enfermedades_familias.s_medicamento'],
                    ['data' => 'tratamiento', 'name' => 'parametros.nombre as tratamiento'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'fisalenf',
                'routxxxx' => 'fisalenf',
                'parametr' => $this->opciones['parametr'][0],
            ],

        ];

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear','enfermedad'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fisalenf.editar', [$padrexxx->id, FiEnfermedadesFamilia::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiEnfermedadesFamiliaCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Enfermedad creada con exito', $padrexxx);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiEnfermedadesFamilia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiEnfermedadesFamilia $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar','enfermedad'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiEnfermedadesFamilia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiEnfermedadesFamiliaUpdateRequest $request,  FiDatosBasico $padrexxx, FiEnfermedadesFamilia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Enfermedad actualizada con exito', $padrexxx);
    }

    public function show(FiDatosBasico $padrexxx, FiEnfermedadesFamilia $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver','enfermedad'], 'padrexxx' => $padrexxx]);
    }

    public function inactivate(FiDatosBasico $padrexxx,FiEnfermedadesFamilia $modeloxx)
    {
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


    public function destroy(FiDatosBasico $padrexxx,FiEnfermedadesFamilia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('fisalud.editar', [$padrexxx->id,$modeloxx->fi_salud_id])
            ->with('info', 'Componenete familiar inactivado correctamente');
    }
}

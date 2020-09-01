<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiComposicionFamiCrearRequest;
use App\Http\Requests\FichaIngreso\FiComposicionFamiUpdateRequest;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class FiComposicionFamiController extends Controller
{

    private $opciones;
    use FiTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'ficomposicion';
        $this->opciones['routxxxx'] = 'ficomposicion';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Composicion';
        $this->opciones['slotxxxx'] = 'ficomposicion';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['parentes'] = Tema::combo(66, true, false);
        $this->opciones['tipotele'] = Tema::combo(44, true, false);
        $this->opciones['vinculad'] = Tema::combo(287, true, false);
        $this->opciones['convivex'] = Tema::combo(23, true, false);
        $this->opciones['ocupacio'] = Tema::combo(156, true, false);
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['nacicomp'] = '';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => "VOLVER A COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR", 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(FiDatosBasico $padrexxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        /** informacion que se va a mostrar en la vista */
        // $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['pestpara'][0] = [$padrexxx->id];
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR COMPONENTE FAMILIAR',
                'titulist' => 'LISTA DE COMPONENTES FAMILIARES',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_composicion_famis.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_composicion_famis.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_composicion_famis.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_composicion_famis.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_composicion_famis.s_segundo_apellido'],
                    ['data' => 's_documento', 'name' => 'fi_composicion_famis.s_documento'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['parametr'],
            ],

        ];
        $this->opciones['accionxx'] = 'index';
        $this->opciones['usuariox'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->nnaj_nfamili_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getCompoFami($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['botoform'][0]['routingx'][1]=$dataxxxx['padrexxx']->id;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['pais_idx'] = SisPai::combo(true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['aniosxxx'] = '';
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1]=$dataxxxx['modeloxx']->id;
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $fechaxxx = explode('-', $dataxxxx['modeloxx']->d_nacimiento);
            $this->opciones['aniosxxx'] = Carbon::createFromDate($fechaxxx[0], $fechaxxx[1], $fechaxxx[2])->age;
            $dataxxxx['modeloxx']->sis_pai_id=$dataxxxx['modeloxx']->sis_municipio->sis_departamento->sis_pais_id;

            $this->opciones['departam'] = SisDepartamento::combo($dataxxxx['modeloxx']->sis_pai_id, false);
            $dataxxxx['modeloxx']->sis_departamento_id=$dataxxxx['modeloxx']->sis_municipio->sis_departamento_id;
            $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->sis_departamento_id, false);

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
    public function create(FiDatosBasico $padrexxx)
    {
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        return $this->view(['modeloxx' => '', 'accionxx'=>['crear','formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        $dataxxxx['nnaj_nfamili_id'] = $padrexxx->nnaj_nfamili_id;
        return redirect()
            ->route('ficomposicion.editar', [$padrexxx->id, FiComposicionFami::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiComposicionFamiCrearRequest $request, FiDatosBasico $padrexxx)
    {
        return $this->grabar($request->all(), '', 'Composicion familiar creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiComposicionFami  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiComposicionFami $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx'=>['ver','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiComposicionFami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,FiComposicionFami $modeloxx)
    {
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx'=>['editar','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiComposicionFami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiComposicionFamiUpdateRequest $request, FiDatosBasico $padrexxx, $modeloxx)
    {
        return $this->grabar($request->all(), FiComposicionFami::where('id', $modeloxx)->first(), 'Composicion familiar actualizada con exito', $padrexxx);
    }

    public function inactivate(FiDatosBasico $padrexxx,FiComposicionFami $modeloxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => 'Destroy','padrexxx'=>$padrexxx]);
    }
    public function destroy(FiDatosBasico $padrexxx,FiComposicionFami $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [$padrexxx->id])
            ->with('info', 'Componenete familiar inactivado correctamente');
    }
}

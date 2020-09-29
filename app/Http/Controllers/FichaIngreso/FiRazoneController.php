<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneCrearRequest;
use App\Http\Requests\FichaIngreso\FiRazoneUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;

class FiRazoneController extends Controller
{
    use FiTrait;
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'firazones';
        $this->opciones['routxxxx'] = 'firazones';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Razones';
        $this->opciones['slotxxxx'] = 'firazones';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "RAZONES PARA ENTRAR AL IDIPRON";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['readonly'] = '';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['docanexa'] = Tema::combo(155, false, false);
        $this->opciones['estaingr'] = Tema::combo(303, true, false);
    }
    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = ['fiarchiv'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getArchivosTrait($request);
        }
    }

    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'],
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';



        $this->opciones['usuarios'] = User::combo(true, false);

        $this->opciones['estadoxx'] = 'ACTIVO';

        $dependen = [];
        foreach ($dataxxxx['padrexxx']->sis_nnaj->nnaj_upis as $key => $value) {
            if ($value->prm_principa_id = 227) {
                $dependen = $value;
            }
        }

        foreach ($dependen->sis_depen->getDepeUsua as $key => $value) {
            if ($value->i_prm_responsable_id == 227) {
                $dependen = $value;
            }
        }

        if(!isset($dependen->user->id)){
            return redirect()
            ->route('fidatbas.editar', [
                $dataxxxx['padrexxx']->id
            ])
            ->with('info', 'La upi al NNAJ no tiene un responsable, por favor comunicarse con el administrador del sistema');
        }
        $this->opciones['depedile'] = [];
        $this->opciones['usuarioz'] = [$dependen->user->id=>$dependen->user->name];
        $this->opciones['deperesp'] = User::getAreasUser(['cabecera'=>true,'esajaxxx'=>false]);
        $this->opciones['cargodil'] = '';
        $this->opciones['cargores'] = $dependen->user->sis_cargo->s_cargo;
        // indica si se esta actualizando o viendo
        $vercrear = false;
        $parametr = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $vercrear = true;
            $parametr = $dataxxxx['modeloxx']->id;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $dilegenc = User::comboDependencia($dataxxxx['modeloxx']->userd_id, false, false);
            $responsa = User::comboDependencia($dataxxxx['modeloxx']->userr_id, false, false);
            $this->opciones['depedile'] = $dilegenc[0];
            $this->opciones['deperesp'] = $responsa[0];
            $this->opciones['cargodil'] = $dilegenc[1];
            $this->opciones['cargores'] = $responsa[1];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';

        }

        $this->opciones['tablasxx'] = [
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titunuev' => 'CREAR DOCUMENTO',
                'titulist' => 'LISTA DE DOCUMENTOS',
                'dataxxxx' => [],
                'vercrear' => $vercrear,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$parametr]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 250, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_documentos_anexas.id'],
                    ['data' => 'nombre', 'name' => 'parametros.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablearchivos',
                'permisox' => 'fiarchiv',
                'routxxxx' => 'fiarchiv',
                'parametr' => [$parametr],
            ],
        ];

        $this->opciones['docuanex'] = FiRazone::getDocumento($dataxxxx['modeloxx']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {

        $vestuari = FiRazone::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('firazones.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        $dataxxxx = ['requestx' => $dataxxxx, 'nombarch' => 'archivo'];
        $archivos = new \App\Helpers\Archivos\Archivos();
        $archivox = $archivos->getRuta($dataxxxx);
        return redirect()
            ->route('firazones.editar', [
                $padrexxx->id,
                FiRazone::transaccion($dataxxxx['requestx']->all(), $objetoxx)->id
            ])
            ->with('info', $infoxxxx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiRazoneCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        return $this->grabar($request, '', 'Razones para ingreso creados creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiRazoneUpdateRequest $request, FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {
        return $this->grabar($request, $modeloxx, 'Razones para ingreso actualizados con exito', $padrexxx);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */


    public function cargos(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = ['comboxxx' => [], 'campoxxx' => '', 'cargoxxx' => '', 'campcarg' => ''];
            switch ($dataxxxx['campoxxx']) {
                case 'userd_id':
                    $respuest['campcarg'] = '#s_cargo_diligencia';
                    $respuest['campoxxx'] = '#sis_depend_id';
                    break;
                case 'userr_id':
                    $respuest['campcarg'] = '#s_cargo_responsable';
                    $respuest['campoxxx'] = '#sis_depenr_id';
                    break;
            }
            if ($dataxxxx['valuexxx'] != '') {
                $usuariox = User::comboDependencia($dataxxxx['valuexxx'], true, true);
                $respuest['comboxxx'] = $usuariox[0];
                $respuest['cargoxxx'] = $usuariox[1];
            }
            return response()->json($respuest);
        }
    }
}

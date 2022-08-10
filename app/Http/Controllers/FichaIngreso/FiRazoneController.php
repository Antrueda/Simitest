<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneCrearRequest;
use App\Http\Requests\FichaIngreso\FiRazoneUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Sistema\SisDepen;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiRazone\FiRazoneCrudTrait;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\RazonesIngresoIdipronTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;

class FiRazoneController extends Controller
{
    use FiTrait;
    use PuedeTrait;
    use RazonesIngresoIdipronTrait;
    use FiRazoneCrudTrait;

    public function __construct()
    {

        $this->opciones['permisox'] = 'firazones';
        $this->opciones['routxxxx'] = 'firazones';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Razones';
        $this->opciones['slotxxxx'] = 'firazones';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "RAZONES PARA INGRESAR AL IDIPRON";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['readonly'] = '';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['docanexa'] = Tema::comboAsc(155, false, false);
        $this->opciones['estaingr'] = Tema::comboAsc(303, true, false);
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
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';





        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['depedile'] = [];
        $dependen = SisDepen::find($dataxxxx['padrexxx']->sis_nnaj->NnajUpiPrincipal)->ResponsableNormal;
        $this->opciones['usuarios'] = User::combo(true, false, [1, 2]);
        $this->opciones['usuarioz'] = $dependen[0];
        $this->opciones['deperesp'] = $dependen[2];
        $this->opciones['cargodil'] = '';
        $this->opciones['cargores'] = $dependen[1];
        // indica si se esta actualizando o viendo
        $vercrear = false;
        $parametr = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $vercrear = true;
            $parametr = $dataxxxx['modeloxx']->id;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $dilegenc = User::comboDependencia($dataxxxx['modeloxx']->userd_id, false, false);
            $this->opciones['depedile'] = $dilegenc[0];
            $this->opciones['cargodil'] = $dilegenc[1];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
        $respusta = $this->setRazonesIngresoIdipronRT(['padrexxx' => $padrexxx]);

        if ($respusta != null) {
            return redirect()
                ->route('firazones.editar', [$padrexxx->id, $respusta->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
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
        return $this->setFiRazone($request->all(), '', 'Razones para ingreso creados creada con éxito', $padrexxx);
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

    public function showobserva(FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'observaciones'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {

        $respusta = $this->setRazonesIngresoIdipronRT(['padrexxx' => $padrexxx]);

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    public function editobserva(FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'observaciones'], 'padrexxx' => $padrexxx]);
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
        return $this->setFiRazone($request->all(), $modeloxx, 'Razones para ingreso actualizados con éxito', $padrexxx);
    }

    public function updateobserva(FiRazoneUpdateRequest $request, FiDatosBasico $padrexxx, FiRazone $modeloxx)
    {
        return $this->setFiRazone($request->all(), $modeloxx, 'Razones para ingreso actualizados con éxito', $padrexxx);
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
                    $usuariox = User::find($dataxxxx['valuexxx']);
                    $respuest['comboxxx'] = $usuariox->dependencias;
                    $respuest['cargoxxx'] = $usuariox->sis_cargo->s_cargo;
                    break;
            }

            return response()->json($respuest);
        }
    }
}

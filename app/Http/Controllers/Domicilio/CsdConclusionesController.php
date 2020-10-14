<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdConclusionesCrearRequest;
use App\Http\Requests\Csd\CsdConclusionesEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdConclusiones;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;

class CsdConclusionesController extends Controller
{
    use FiTrait;
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdconclusiones';
        $this->opciones['routxxxx'] = 'csdconclusiones';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'conclusiones';
        $this->opciones['slotxxxx'] = 'csdconclusiones';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "Conclusiones";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['readonly'] = '';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicix'] = Tema::combo(23, false, false);
        $this->opciones['familiax'] = Tema::combo(66, true, false);
    }



    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],

        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['usuarios'] = User::combo(true, false);
        $this->opciones['usuarioz'] = User::combo(true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';


        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['pestpadr'] = 3;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';

        }
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Csd $padrexxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {

        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, CsdConclusiones::transaccion($dataxxxx,  $objetoxx)->id])
        ->with('info', $infoxxxx);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CsdConclusionesCrearRequest $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->id;
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        return $this->grabar($dataxxxx, '', 'Conclusiones registradas con exito', $padrexxx);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdConclusiones $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx, CsdConclusiones $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdConclusionesEditarRequest $request, Csd $padrexxx, CsdConclusiones $modeloxx)
    {
        return $this->grabar($request, $modeloxx, 'Conclusiones actualizadas con exito', $padrexxx);
    }





}

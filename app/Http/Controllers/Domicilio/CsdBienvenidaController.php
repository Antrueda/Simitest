<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdBienvenidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiBienvenidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiBienvenidaUpdateRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdBienvenida;
use App\Models\consulta\CsdDatosBasico;
use App\Models\Tema;

class CsdBienvenidaController extends Controller
{

    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdbienvenida';
        $this->opciones['routxxxx'] = 'csdbienvenida';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Bienvenida';
        $this->opciones['slotxxxx'] = 'csdbienvenida';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "MOTIVOS DE VINCULACIÓN Y BIENVENIDA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['personax'] = Tema::combo(159,true, false);
        $this->opciones['motivosx'] = Tema::combo(63, true, false);
    }

    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo

        if ($dataxxxx['modeloxx'] != '') {
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
    public function create(CsdDatosBasico $padrexxx)
    {
        $vestuari = CsdBienvenida::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdbienvenida.editar', [$padrexxx, $vestuari->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx,$padrexxx)
    {
        return redirect()
            ->route('csdbienvenida.editar', [$padrexxx->id, CsdBienvenida::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdBienvenidaCrearRequest $request,Csd $padrexxx)
    {
        $request['sis_esta_id']=1;
        $request["prm_tipofuen_id"]=2315;
        $dataxxxx=$request->all();
        $dataxxxx['sis_nnaj_id']=$padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Bienvenida creada con exito',$padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx,CsdBienvenida $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx,  CsdBienvenida $modeloxx)
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
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiBienvenidaUpdateRequest $request, Csd $padrexxx,  CsdBienvenida $modeloxx)
    {
        return $this->grabar($request->all(),$modeloxx, 'Bienvenida actualizada con exito',$padrexxx);
    }
}

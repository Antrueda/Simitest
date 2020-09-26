<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdSituacionespecialCrearRequest;
use App\Http\Requests\Csd\CsdSituacionespecialEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdViolencia;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;
use App\Traits\Fi\VcontviolTrait;

class CsdSituacionEspecialController extends Controller
{
    use VcontviolTrait;
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdsituacionespecial';
        $this->opciones['routxxxx'] = 'csdsituacionespecial';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'SituacionEspecial';
        $this->opciones['slotxxxx'] = 'csdsituacionespecial';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "Situacion Especial";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['situacix'] = Tema::combo(89, false, false);

    }

    private function view($dataxxxx)
    {

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],];
            
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = 'ACTIVO';
      
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['ruarchjs'][1] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
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
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx)
    {
        
        return redirect()
            ->route('csdsituacionespecial.editar', [Csd::transaespecial($dataxxxx)->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdSituacionespecialCrearRequest $request, Csd $padrexxx)
    {
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Situaciones especiales insertadas con exito','padrexxx'=> $padrexxx]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csdsituacionespecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csdsituacionespecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.editar',$modeloxx->id);
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar',  'formulario', 'js',], 'padrexxx' => $modeloxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\csdsituacionespecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdSituacionespecialEditarRequest $request, Csd $modeloxx)
    {
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Situaciones Especiales actualizadas','modeloxx'=>$modeloxx]);
    }
}

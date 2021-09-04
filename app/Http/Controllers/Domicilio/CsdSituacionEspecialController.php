<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdSituacionCrearRequest;
use App\Http\Requests\Csd\CsdSituacionEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CsdSituacionEspecialController extends Controller
{
    private $opciones;
    use PuedeTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdsituacionespecial';
        $this->opciones['routxxxx'] = 'csdsituacionespecial';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Situacion';
        $this->opciones['slotxxxx'] = 'csdsituacionespecial';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = 'SITUACIONES ESPECIALES';
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['situacix'] = Tema::comboAsc(89, false, false);

    }

    private function view($dataxxxx)
    {

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],];

        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }


        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CsdSisNnaj $padrexxx)
    {

        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
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


    public function store(CsdSituacionCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $this->validator($request->all())->validate();
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['prm_tipofuen_id' => 2315]);
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Situaciones especiales insertadas con éxito','padrexxx'=> $padrexxx]);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'especiales' => 'nullable|array',
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csdsituacionespecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx->csd, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csdsituacionespecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $modeloxx)
    {

        $this->opciones['csdxxxxx']=$modeloxx;
        if(Auth::user()->id==$modeloxx->user_crea_id||User::userAdmin()){
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
            
        }
        }else{
        $this->opciones['botoform'][] =
        [
            'mostrars' => false,
        ];
    }
        return $this->view(['modeloxx' => $modeloxx->csd, 'accionxx' => ['editar',  'formulario', 'js',], 'padrexxx' => $modeloxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\csdsituacionespecial  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdSituacionEditarRequest $request, CsdSisNnaj $modeloxx)
    {
        $request->request->add(['prm_tipofuen_id' => 2315]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Situaciones Especiales actualizadas','modeloxx'=>$modeloxx,'padrexxx'=>$modeloxx]);
    }
}

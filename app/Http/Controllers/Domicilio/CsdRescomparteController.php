<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdRescomparteCrearRequest;
use App\Http\Requests\Csd\CsdRescomparteEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdRescomparte;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Csd\CsdTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Controlador para administrar las violencias de las siguientes preguntas:
 *
 * 12.1 ¿Presenta algún tipo de violencia? y
 * 12.1 A Ha ejercido algún tipo de presunta violencia durante la actividad en conflicto con la ley?
 *
 * siempre y cuando la respuesta sea SI
 */
class CsdRescomparteController extends Controller
{
    use CsdTrait;

    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdrescomparte';
        $this->opciones['routxxxx'] = 'csdrescomparte';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'csdresidencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "ESPACIO QUE COMPARTE";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['espaciox'] = Tema::comboAsc(96, true, false);
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['csdresidencia.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A RESIDENCIA', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function getListado(Request $request, $padrexxx,$residenc)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->residenc = $residenc;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getComparte($request);
            
        }
    }
    private function view($dataxxxx)
    {
        
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id, $dataxxxx['residenc']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];

        $this->opciones['botoform'][0]['routingx'][1] = [$dataxxxx['padrexxx']->id, $dataxxxx['residenc']->id];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
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
    public function create(CsdSisNnaj $padrexxx,CsdResidencia $residenc)
    {
        
        $this->opciones['csdxxxxx']=$padrexxx;
       
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'comparte'], 'padrexxx' => $padrexxx,'residenc'=>$residenc]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
        ->route('csdrescomparte.editar', [$dataxxxx['padrexxx']->id,CsdRescomparte::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdRescomparteCrearRequest $request,CsdSisNnaj $padrexxx)
    {   
        $request->request->add(['csd_residencia_id' => $padrexxx->csd->CsdResidencia->id]);
        $request->request->add(['sis_esta_id' =>1]);
        return $this->grabar(['requestx'=>$request, 'infoxxxx'=>'Espacio que comparte creado con éxito','padrexxx'=>$padrexxx,'modeloxx'=>'']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx,CsdRescomparte $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'comparte'], 'padrexxx' => $padrexxx,'residenc'=>$modeloxx->csd_residencia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx, CsdRescomparte $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        if(Auth::user()->id==$padrexxx->user_crea_id||User::userAdmin()){
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
             }else{
            $this->opciones['botoform'][] =
            [
                'mostrars' => false,
            ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'comparte', 'js',], 'padrexxx' => $padrexxx,'residenc'=>$modeloxx->csd_residencia]);
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdRescomparteEditarRequest $request, CsdSisNnaj $padrexxx,CsdRescomparte $modeloxx)
    {
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Espacio que comparte actualizado con éxito','padrexxx'=>$padrexxx,'modeloxx'=>$modeloxx]);
    }

    public function inactivate(CsdSisNnaj $padrexxx,CsdRescomparte $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$padrexxx,'residenc'=>$modeloxx->csd_residencia]);
    }
    public function destroy(CsdSisNnaj $padrexxx,CsdRescomparte $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csdresidencia.nuevo', [$padrexxx->id])
            ->with('info', 'Espacio inactivado correctamente');
    }
}
///////

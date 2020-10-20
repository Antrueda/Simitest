<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdResservicioCrearRequest;
use App\Http\Requests\Csd\CsdResservicioEditRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdResservi;

use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;
use Illuminate\Http\Client\Request as ClientRequest;
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
class CsdResserviController extends Controller
{
    use CsdTrait;

    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdresservi';
        $this->opciones['routxxxx'] = 'csdresservi';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'csdresidencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "SERVICIOS";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['servicio'] = Tema::combo(94, true, false);
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['csdresidencia.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A RESIDENCIA', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function getListado(Request $request, $padrexxx, $temaxxxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->padrexxx = $temaxxxx;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getServicio($request);
            
        }
    }
    private function view($dataxxxx)
    {
        
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['botoform'][0]['routingx'][1]=[$dataxxxx['padrexxx']->id,$dataxxxx['padrexxx']->CsdResidencia->id];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'] = [$dataxxxx['padrexxx']];
            
            
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
    public function create(Csd $padrexxx)
    {
        
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'servicios'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
        ->route('csdresservi.editar', [CsdResservi::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdResservicioCrearRequest $request,Csd $padrexxx)
    {   
        $request->request->add(['csd_residencia_id' => $padrexxx->CsdResidencia->id]);
        $request->request->add(['sis_esta_id' =>1]);
        return $this->grabar(['requestx'=>$request, 'infoxxxx'=>'Servicio creado con exito','padrexxx'=>$padrexxx->csd_id,'modeloxx'=>'']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdResservi $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'servicios'], 'padrexxx' => $modeloxx->csd_residencia->csd_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdResservi $modeloxx,Csd $padrexxx)
    {
        //ddd($modeloxx->csd_residencia->csd);
        $this->opciones['csdxxxxx'] = $modeloxx->csd_residencia->csd;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => ['editar', 'servicios'],
            'padrexxx' => $modeloxx->csd_residencia->csd]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdResservicioEditRequest $request, CsdResservi $modeloxx, CsdResidencia $padrexxx)
    {
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Servicio actualizado con exito','padrexxx'=>$padrexxx,'modeloxx'=>$modeloxx]);
    }

    public function inactivate(CsdResidencia $padrexxx,CsdResservi $modeloxx)
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
    public function destroy(CsdResidencia $padrexxx,CsdResservi $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csddinfamiliar.nuevo', [$padrexxx->id])
            ->with('info', 'Red actual inactivada correctamente');
    }
}

<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\EvasionVestuarioRequest;

use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\Pivotes\EvasionVestuario;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Traits\Acciones\SalidaTrait;
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
class AIEvasionVestuarioController extends Controller
{
    use SalidaTrait;

    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'evasionves';
        $this->opciones['routxxxx'] = 'evasionves';
        $this->opciones['rutacarp'] = 'Acciones.';
        $this->opciones['carpetax'] = 'Individuales.Evasion';
        $this->opciones['slotxxxx'] = 'aievasion';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "VESTUARIO";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'REPORTE DE EVASIÓN';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['prendaxx'] = Tema::combo(304, true, false);
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['aievasion.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A EVASIÓN', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function getListado(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getVestuario($request);
            
        }
    }
    private function view($dataxxxx)
    {
        
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ];
        $this->opciones['botoform'][0]['routingx'][1]=[$dataxxxx['padrexxx']->sis_nnaj_id,$dataxxxx['padrexxx']->id];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            
            
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
    public function create(AiReporteEvasion $padrexxx)
    {
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'vestuario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
        ->route('evasionves.editar', [$dataxxxx['padrexxx']->id,EvasionVestuario::transaccion($dataxxxx)->id])
        ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(EvasionVestuarioRequest $request,AiReporteEvasion $padrexxx)
    {   
        $request->request->add(['reporte_evasion_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' =>1]);
        return $this->grabar(['requestx'=>$request, 'infoxxxx'=>'Espacio creado con exito','padrexxx'=>$padrexxx,'modeloxx'=>'']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(AiReporteEvasion $padrexxx, EvasionVestuario $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'vestuario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(AiReporteEvasion $padrexxx, EvasionVestuario $modeloxx)
    {
        
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => ['editar', 'vestuario'],
            'padrexxx' => $padrexxx]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(EvasionVestuarioRequest $request, AiReporteEvasion $padrexxx, EvasionVestuario $modeloxx )
    {
        return $this->grabar(['requestx'=>$request,'infoxxxx'=>'Servicio actualizado con exito','padrexxx'=>$padrexxx,'modeloxx'=>$modeloxx]);
    }

    public function inactivate(AiReporteEvasion $padrexxx,EvasionVestuario $modeloxx)
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$padrexxx]);
    }
    public function destroy(AiReporteEvasion $padrexxx,EvasionVestuario $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csdresidencia.nuevo', [$padrexxx->id])
            ->with('info', 'Espacio inactivado correctamente');
    }
}

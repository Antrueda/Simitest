<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdAlimentacionCrearRequest;
use App\Http\Requests\Csd\CsdAlimentacionEditarRequest;
use App\Http\Requests\Csd\CsdResidenciaCrearRequest;
use App\Http\Requests\Csd\CsdResidenciaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdAlimentacion;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiDatosBasico;

use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;

class CsdAlimentacionController extends Controller
{
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdalimentacion';
        $this->opciones['routxxxx'] = 'csdalimentacion';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'residencia';
        $this->opciones['tituloxx'] = 'RESIDENCIA';
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


        $this->opciones['horariox'] = Tema::combo(23, true, false);
        $this->opciones['apoyoxxx'] = Tema::combo(23, true, false);
        $this->opciones['frecuenx'] = Tema::combo(110, true, false);
        $this->opciones['lugaresx'] = Tema::combo(111, true, false);
        $this->opciones['alimenta'] = Tema::combo(112, true, false);
        $this->opciones['familiax'] = Tema::combo(66, true, false);
        $this->opciones['entidadx'] = Tema::combo(113, true, false);

        

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fidatbas', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
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
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = $this->opciones['upzxxxxx'];
        $this->opciones['readchcx'] = '';
        
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
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
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {

        if($dataxxxx['requestx']->prepara){
            foreach ($dataxxxx['requestx']->prepara as $d) {
                $dataxxxx['modeloxx']->prepara()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
       
        if($dataxxxx['requestx']->frecuencia){
            foreach ($dataxxxx['requestx']->frecuencia as $d) {
                $dataxxxx['modeloxx']->frecuencia()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
      
        if($dataxxxx['requestx']->ingeridas){
            foreach ($dataxxxx['requestx']->ingeridas as $d) {
                $dataxxxx['modeloxx']->ingeridas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
      
        if($dataxxxx['requestx']->compra){
            foreach ($dataxxxx['requestx']->compra as $d) {
                $dataxxxx['modeloxx']->compra()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $modeloxx = CsdAlimentacion::transaccion($dataxxxx,  $objetoxx);
        return redirect()
            ->route('csdalimentacion.editar', [$modeloxx->sis_nnaj->fi_datos_basico->id,  $modeloxx->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Csd $padrexxx, CsdAlimentacionCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Datos de residencia creados con exito', $padrexxx);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csdalimentacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdAlimentacion $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\csdalimentacion  $objetoxx
     * * @param    $nnajregi
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx,  CsdAlimentacion $modeloxx)
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\csdalimentacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdAlimentacionEditarRequest $request,  Csd $padrexxx, CsdAlimentacion $modeloxx)
    {

        $modeloxx->prepara()->detach();
        $modeloxx->frecuencia()->detach();
        $modeloxx->ingeridas()->detach();
        $modeloxx->compra()->detach();
        return $this->grabar($request->all(), $modeloxx, 'Datos de alimentacion actualizados con exito', $padrexxx);
    }
}

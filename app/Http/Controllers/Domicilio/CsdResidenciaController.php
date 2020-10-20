<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdResidenciaCrearRequest;
use App\Http\Requests\Csd\CsdResidenciaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdRescamass;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Traits\Csd\CcontviolTrait;
use Illuminate\Http\Request;

class CsdResidenciaController extends Controller
{
    use CcontviolTrait;
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdresidencia';
        $this->opciones['routxxxx'] = 'csdresidencia';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'csdresidencia';
        $this->opciones['tituloxx'] = 'RESIDENCIA';
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['dircondi'] = Tema::combo(23, true, false);
        $this->opciones['residees'] = Tema::combo(35, true, false);
        $this->opciones['tiporexx'] = Tema::combo(34, true, false);
        $this->opciones['tipodire'] = Tema::combo(36, true, false);
        $this->opciones['zonadire'] = Tema::combo(37, true, false);
        $this->opciones['cuadrant'] = Tema::combo(38, true, false);
        $this->opciones['alfabeto'] = Tema::combo(39, true, false);
        $this->opciones['estratox'] = Tema::combo(41, true, false);
        $this->opciones['condambi'] = Tema::combo(42, false, false);
        $this->opciones['tpviapal'] = Tema::combo(62, true, false);
        $this->opciones['familiax'] = Tema::combo(66, false, false);
        $this->opciones['pisoxxxx'] = Tema::combo(90, true, false);
        $this->opciones['murosxxx'] = Tema::combo(91, true, false);
        $this->opciones['estadosx'] = Tema::combo(93, true, false);
        $this->opciones['esparcha'] = Tema::combo(291, true, false);
        $this->opciones['servicio'] = Tema::combo(94, true, false);
        $this->opciones['localida'] = SisLocalidad::combo();

       }
    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']           
            
        ];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = $this->opciones['upzxxxxx'];
        $this->opciones['readchcx'] = '';
        if ($this->opciones['usuariox']->prm_poblacion_id == 650) {
            $this->opciones['readchcx'] = 'readonly';
            $this->opciones['residees'] = [1 => 'NO APLICA'];
            $this->opciones['localida'] = [22 => 'NO APLICA'];
            $this->opciones['upzxxxxx'] = [134 => 'NO APLICA'];
            $this->opciones['barrioxx'] = [1 => 'NO APLICA'];
            $this->opciones['tiporesi'] = Tema::combo(145, true, false);
        } else {
            $this->opciones['tiporesi'] = Tema::combo(34, true, false);
        }

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo

        $this->opciones['condsele'] = CsdResideambiente::getCondicionAbiente(0);
        
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['ruarchjs'][1] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            
            //ddd($dataxxxx['modeloxx']->reshogar->csd_residencia_id == $dataxxxx['modeloxx']->id);
            //5.19
            if($dataxxxx['modeloxx']->reshogar){ 
            $dataxxxx['modeloxx']->banocant = $dataxxxx['modeloxx']->reshogar->banocant;
            $dataxxxx['modeloxx']->comedorcant = $dataxxxx['modeloxx']->reshogar->comedorcant;
            $dataxxxx['modeloxx']->salacant = $dataxxxx['modeloxx']->reshogar->salacant;
            $dataxxxx['modeloxx']->salacomcant = $dataxxxx['modeloxx']->reshogar->salacomcant;
            $dataxxxx['modeloxx']->cocinacant = $dataxxxx['modeloxx']->reshogar->cocinacant;
            $dataxxxx['modeloxx']->habitacant = $dataxxxx['modeloxx']->reshogar->habitacant;
            $dataxxxx['modeloxx']->patiocant = $dataxxxx['modeloxx']->reshogar->patiocant;
            $dataxxxx['modeloxx']->prm_bano_id = $dataxxxx['modeloxx']->reshogar->prm_bano_id;
            $dataxxxx['modeloxx']->prm_comedor_id = $dataxxxx['modeloxx']->reshogar->prm_comedor_id;
            $dataxxxx['modeloxx']->prm_sala_id = $dataxxxx['modeloxx']->reshogar->prm_sala_id;
            $dataxxxx['modeloxx']->prm_cocina_id = $dataxxxx['modeloxx']->reshogar->prm_cocina_id;
            $dataxxxx['modeloxx']->prm_habita_id = $dataxxxx['modeloxx']->reshogar->prm_habita_id;
            $dataxxxx['modeloxx']->prm_patio_id = $dataxxxx['modeloxx']->reshogar->prm_patio_id;
            }
            //5.20
            if($dataxxxx['modeloxx']->resobservacion){ 
             $dataxxxx['modeloxx']->observaciones = $dataxxxx['modeloxx']->resobservacion->observaciones;
            }

            if ($dataxxxx['modeloxx']->i_prm_zona_direccion_id == 289) {
                $this->opciones['dircondi'] = [1 => 'NO APLICA'];
                $this->opciones['cuadrant'] = [1 => 'NO APLICA'];
                $this->opciones['alfabeto'] = [1 => 'NO APLICA'];
                $this->opciones['tpviapal'] = [1 => 'NO APLICA'];
            }
         
            

            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
                        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        }
        $this->opciones['tablasxx'][] =
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titunuev' => 'SERVICIOS',
                'titulist' => 'LISTA DE SERVICIOS',
                'dataxxxx' => [],
                'titupreg' => 'Indicar que serivicio tiene en el hogar',
                'vercrear' => (isset($this->opciones['modeloxx'])),
                'urlxxxxx' => route('csdresservi.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '¿Es Legal?', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_resservis.id'],
                    ['data' => 'servicio', 'name' => 'servicio.nombre as servicio'],
                    ['data' => 'legal', 'name' => 'legal.nombre as legal'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablepresentadas',
                'permisox' => 'csdresservi',
                'routxxxx' => 'csdresservi',
                'parametr' => [(isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx']->id : 0],
            ];
            
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Csd $padrexxx)
    {
        $vestuari = CsdResidencia::where('csd_id', $padrexxx->id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdresidencia.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx,$padrexxx)
    {
        return redirect()
            ->route('csdresidencia.editar', [$padrexxx->id, CsdResidencia::transaccion($dataxxxx, $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Csd $padrexxx, CsdResidenciaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->id;
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        return $this->grabar($dataxxxx, '', 'Datos de residencia creados con exito', $padrexxx);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CsdResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdResidencia $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CsdResidencia  $objetoxx
     * * @param    $nnajregi
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx,  CsdResidencia $modeloxx)
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
     * @param  \App\Models\CsdResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdResidenciaEditarRequest $request,  Csd $padrexxx, CsdResidencia $modeloxx)
    {
        //ddd($request);
        return $this->grabar($request->all(), $modeloxx, 'Datos de residencia actualizados con exito', $padrexxx);
    }


    public function getLocaliUpz(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            switch ($request->upzbarri) {
                case 1: // upzs
                    $respuest = SisUpz::combo($request->padrexxx, true);
                    break;
                case 2: // barrios
                    $respuest = SisBarrio::combo($request->padrexxx, true);
                    break;
            }
            return response()->json($respuest);
        }
    }
}

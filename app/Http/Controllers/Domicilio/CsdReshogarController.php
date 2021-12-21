<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdReshogarCrearRequest;
use App\Http\Requests\Csd\CsdReshogarEditarRequest;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdReshogar;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use App\Traits\Csd\CsdTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CsdReshogarController extends Controller
{
    use CsdTrait;
    use CombosTrait; // trait que arma los combos
    private $csdresid;
    private $opciones = ['modeloxx' => null];
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdreshogar';
        $this->opciones['routxxxx'] = 'csdreshogar';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'csdresidencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "ESPACIOS";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['csdresidencia.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A RESIDENCIA', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function getListado(Request $request, $padrexxx, $residenc)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->residenc = $residenc;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getEspacio($request);
        }
    }


    public function getEspacios($dataxxxx)
    {
        $registro = CsdReshogar::join('csd_residencias', 'csd_reshogars.csd_residencia_id', '=', 'csd_residencias.id')
            ->where('csd_residencias.id', $this->csdresid->id)
            ->get(['prm_espacio_id']);
            $dataxxxx['temaxxxx']=96;
            $dataxxxx['notinxxx']=$registro->toArray();
        $this->opciones['espaciox'] = $this->getTemacomboCT($dataxxxx)['comboxxx'];
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
        $espaciox=[];
        if (!is_null($this->opciones['modeloxx'])) {
            $espaciox['selected']=$this->opciones['modeloxx']->prm_espacio_id;
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }

        $this->getEspacios($espaciox);


        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CsdSisNnaj $padrexxx, CsdResidencia $residenc)
    {
        $this->csdresid = $residenc;
        $this->opciones['csdxxxxx'] = $padrexxx;
        //$this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'espacios'], 'padrexxx' => $padrexxx, 'residenc' => $residenc]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route('csdreshogar.editar', [$dataxxxx['padrexxx']->id, CsdReshogar::transaccion($dataxxxx)->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdReshogarCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $request->request->add(['csd_residencia_id' => $padrexxx->csd->CsdResidencia->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Espacio creado con éxito', 'padrexxx' => $padrexxx, 'modeloxx' => '']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdReshogar $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->csdresid = $modeloxx->csd_residencia;
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'espacios'], 'padrexxx' => $padrexxx, 'residenc' => $modeloxx->csd_residencia]);
    }
    ///
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx, CsdReshogar $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->csdresid = $modeloxx->csd_residencia;
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (Auth::user()->id == $padrexxx->user_crea_id || User::userAdmin()) {
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        } else {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
        }
        return $this->view([
            'modeloxx' => $modeloxx,
            'accionxx' => ['editar', 'espacios'],
            'padrexxx' => $padrexxx, 'residenc' => $modeloxx->csd_residencia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiBienvenida  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdReshogarEditarRequest $request, CsdSisNnaj $padrexxx, CsdReshogar $modeloxx)
    {
        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Servicio actualizado con éxito', 'padrexxx' => $padrexxx, 'modeloxx' => $modeloxx]);
    }

    public function inactivate(CsdSisNnaj $padrexxx, CsdReshogar $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->csdresid = $modeloxx->csd_residencia;
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx, 'residenc' => $modeloxx->csd_residencia]);
    }
    public function destroy(CsdSisNnaj $padrexxx, CsdReshogar $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csdresidencia.nuevo', [$padrexxx->id])
            ->with('info', 'Espacio inactivado correctamente');
    }
}

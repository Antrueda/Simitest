<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdResidenciaCrearRequest;
use App\Http\Requests\Csd\CsdResidenciaEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\pivotes\CsdRescamass;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdResidenciaController extends Controller
{
    private $opciones;
    use PuedeTrait;

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
        $this->opciones['dircondi'] = Tema::comboAsc(23, true, false);
        $this->opciones['residees'] = Tema::comboAsc(35, true, false);
        $this->opciones['tiporexx'] = Tema::comboAsc(34, true, false);
        $this->opciones['tipodire'] = Tema::comboAsc(36, true, false);
        $this->opciones['zonadire'] = Tema::comboAsc(37, true, false);
        $this->opciones['cuadrant'] = Tema::comboAsc(38, true, false);
        $this->opciones['alfabeto'] = Tema::comboAsc(39, true, false);
        $this->opciones['estratox'] = Tema::comboAsc(41, true, false);
        $this->opciones['condambi'] = Tema::comboAsc(42, false, false);
        $this->opciones['tpviapal'] = Tema::comboAsc(62, true, false);
        $this->opciones['familiax'] = Tema::comboAsc(66, false, false);
        $this->opciones['pisoxxxx'] = Tema::comboAsc(90, true, false);
        $this->opciones['murosxxx'] = Tema::comboAsc(91, true, false);
        $this->opciones['estadosx'] = Tema::comboAsc(93, true, false);
        $this->opciones['esparcha'] = Tema::comboAsc(291, true, false);
        $this->opciones['servicio'] = Tema::comboAsc(94, true, false);
        $this->opciones['localida'] = SisLocalidad::combo();
    }
    private function view($dataxxxx)
    {
    
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']

        ];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = $this->opciones['upzxxxxx'];
        $this->opciones['readchcx'] = '';
        
        if ($this->opciones['usuariox']->prm_tipoblaci_id == 650) {
            $this->opciones['readchcx'] = 'readonly';
            $this->opciones['residees'] = [235 => 'N/A'];
            $this->opciones['localida'] = [22 => 'N/A'];
            $this->opciones['upzxxxxx'] = [119 => 'N/A'];
            $this->opciones['barrioxx'] = [1924 => 'N/A'];
            $this->opciones['tiporesi'] = Tema::comboAsc(145, true, false);
        } else {
            $this->opciones['tiporesi'] = Tema::comboAsc(34, true, false);
        }

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo

        $this->opciones['condsele'] = CsdResideambiente::getCondicionAbiente(0);
        $vercrear = false;
        $residenc = 0;
        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['ruarchjs'][1] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;

            //5.20
            if ($dataxxxx['modeloxx']->resobservacion) {
                $dataxxxx['modeloxx']->observaciones = $dataxxxx['modeloxx']->resobservacion->observaciones;
            }

            $dataxxxx['modeloxx']->sis_localidad_id = $dataxxxx['modeloxx']->sis_upzbarri->sis_localupz->sis_localidad_id;
            $this->opciones['upzxxxxx'] = SisUpz::combo($dataxxxx['modeloxx']->sis_localidad_id, false);
            $dataxxxx['modeloxx']->sis_upz_id=$dataxxxx['modeloxx']->sis_upzbarri->sis_localupz_id;
            $this->opciones['barrioxx'] = SisBarrio::combo($dataxxxx['modeloxx']->sis_upz_id, false);
            $vercrear = true;
            /*
            if ($dataxxxx['modeloxx']->prm_dir_zona_id == 289) {
                $this->opciones['dircondi'] = Parametro::find(235)->Combo;
                $this->opciones['cuadrant'] = Parametro::find(235)->Combo;
                $this->opciones['alfabeto'] = Parametro::find(235)->Combo;
                $this->opciones['tpviapal'] = Parametro::find(235)->Combo;
            }
*/
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $residenc = $dataxxxx['padrexxx']->csd->CsdResidencia->id;
        }else{
            $this->opciones['parametr'][1]=0;
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'AGREGAR SERVICIO',
                'titulist' => 'LISTA DE SERVICIOS',
                'pregunta' => '5.18 ¿Con cuáles de los siguientes servicios públicos, privados o comunales cuenta el lugar de vivienda?',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.residenciacsd',
                'vercrear' => $vercrear,
                'urlxxxxx' => route('csdresservi.otracosa', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => '¿ES LEGAL?', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_resservis.id'],
                    ['data' => 'servicio', 'name' => 'parametros.nombre as servicio '],
                    ['data' => 'legal', 'name' => 'parametros.nombre as legal'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'csdresservi',
                'routxxxx' => 'csdresservi',
                'parametr' => $this->opciones['parametr'],
            ],
            [
                'titunuev' => 'AGREGAR ESPACIO',
                'titulist' => 'LISTA DE ESPACIO QUE DISPONE',
                'pregunta' => '5.19 Espacios de los que disponen en este hogar:',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.residenciacsd',
                'vercrear' => $vercrear,
                'urlxxxxx' => route('csdreshogar.listaxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESPACIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'CANTIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_reshogars.id'],
                    ['data' => 'espacio', 'name' => 'parametros.nombre as espacio'],
                    ['data' => 'espaciocant', 'name' => 'csd_reshogars.espaciocant'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable519',
                'permisox' => 'csdreshogar',
                'routxxxx' => 'csdreshogar',
                'parametr' => $this->opciones['parametr'],
            ],
            [
                'titunuev' => 'AGREGAR ESPACIO QUE COMPARTE',
                'titulist' => 'LISTA DE COMPARTE',
                'pregunta' => '5.20 ¿La familia comparte con otro hogar o familia, alguno de los siguientes espacios?',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.residenciacsd',
                'vercrear' => $vercrear,
                'urlxxxxx' => route('csdrescomparte.listaxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESPACIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'COMPARTE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_rescomparte.id'],
                    ['data' => 'espacio', 'name' => 'parametros.nombre as espacio'],
                    ['data' => 'comparte', 'name' => 'parametros.nombre as comparte'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable520',
                'permisox' => 'csdrescomparte',
                'routxxxx' => 'csdrescomparte',
                'parametr' => $this->opciones['parametr'],
            ],
        ];
        //ddd($dataxxxx['padrexxx']->id);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CsdSisNnaj $padrexxx)
    {
        $vestuari = CsdResidencia::where('csd_id', $padrexxx->id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('csdresidencia.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['rutaxxxx'] = route($this->opciones['permisox'] . '.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
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


    public function store(CsdSisNnaj $padrexxx, CsdResidenciaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        return $this->grabar($dataxxxx, '', 'Datos de residencia creados con éxito', $padrexxx);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CsdResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdResidencia $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'servicios'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CsdResidencia  $objetoxx
     * * @param    $nnajregi
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,  CsdResidencia $modeloxx)
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

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CsdResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdResidenciaEditarRequest $request,  CsdSisNnaj $padrexxx, CsdResidencia $modeloxx)
    {
        //ddd($request);
        return $this->grabar($request->all(), $modeloxx, 'Datos de residencia actualizados con éxito', $padrexxx);
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

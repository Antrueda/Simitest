<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSaludCrearRequest;
use App\Http\Requests\FichaIngreso\FiSaludUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSalud;
use App\Models\Parametro;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;

class FiSaludController extends Controller
{
    private $opciones;
    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fisalud';
        $this->opciones['routxxxx'] = 'fisalud';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Salud';
        $this->opciones['slotxxxx'] = 'fisalud';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "SALUD";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['estafili'] = Tema::combo(21, true, false);
        $this->opciones['condicio'] = Tema::combo(431, true, false); // Anterior combo 23
        $this->opciones['condiciox'] = Tema::combo(491, true, false); // Anterior combo 23
        $this->opciones['condicioxx'] = Tema::combo(492, true, false); // Anterior combo 23
        $this->opciones['condicioxxx'] = Tema::combo(493, true, false); // Anterior combo 23
        $this->opciones['condicioxxxx'] = Tema::combo(494, true, false); // Anterior combo 23
        $this->opciones['condicioxxxxx'] = Tema::combo(495, true, false); // Anterior combo 23
        $this->opciones['condicioxxxxxx'] = Tema::combo(496, true, false); // Anterior combo 23
        $this->opciones['condicioxxxxxxx'] = Tema::combo(497, true, false); // Anterior combo 23
        $this->opciones['tipodisc'] = Tema::combo(24, true, false);
        $this->opciones['condnoap'] = Tema::combo(25, true, false);
        $this->opciones['noapdisc'] = Tema::combo(25, true, false);
        $this->opciones['usameant'] = Tema::combo(25, true, false);
        $this->opciones['noapanti'] = Tema::combo(25, true, false);
        $this->opciones['apsisben'] = Tema::combo(26, true, false);
        $this->opciones['metantic'] = Tema::combo(27, true, false);
        $this->opciones['motcomdi'] = Tema::combo(29, true, false);
        $this->opciones['puntsisb'] = Tema::combo(50, true, false);
        $this->opciones['metoanti'] = Tema::combo(52, true, false);
        $this->opciones['evmedico'] = Tema::combo(43, false, false);
        $this->opciones['probsalu'] = Tema::combo(301, true, false);
        /** caminando relajado
         * 6.4.b) ¿La discapacidad fue producida en la comisión de algún acto ilegal?
        */
        $this->opciones['discausa'] = Tema::combo(341, false, false);
        /** 6.4 c) ¿Ha sido víctima de  ataques con */
        $this->opciones['victataq'] = Tema::combo(342, false, false);

        $this->opciones['entid_id'] = ['' => 'Seleccione'];

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fidatbas', []],
                'formhref' => 2, 'tituloxx' => "VOLVER A COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR", 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $archivox=($dataxxxx['padrexxx']->prm_estrateg_id == 2323) ? 'caminando' : 'js';
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.'.$archivox],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.general'],
        ];
        $this->opciones['saludxxx'] = FiSalud::salud($dataxxxx['padrexxx']->sis_nnaj_id);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        $this->opciones['readgest'] = '';
        $this->opciones['readlact'] = '';
        $this->opciones['readhijo'] = '';
        $this->opciones['cualmedi'] = '';

        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['entid_id'] = SisEntidadSalud::combo($dataxxxx['modeloxx']->i_prm_tentidad_id, true, false);
            $this->opciones['puedexxx'] = '';
            if ($dataxxxx['modeloxx']->prm_tiendisc_id == 228) {
                // $this->opciones['noapdisc'] = Parametro::find(235)->Combo;
                $this->opciones['tipodisc'] = Parametro::find(235)->Combo;
                $this->opciones['discausa'] = Parametro::find(235)->Combo;

            }


            if ($dataxxxx['modeloxx']->prm_conometo_id == 228 || $dataxxxx['modeloxx']->prm_conometo_id == 235) {
                $this->opciones['noapdisc'] = Parametro::find(235)->Combo;
                $this->opciones['metantic'] = Parametro::find(235)->Combo;
                $this->opciones['usameant'] = Parametro::find(235)->Combo;

            }

            if ($dataxxxx['modeloxx']->prm_usametod_id == 228 || $dataxxxx['modeloxx']->prm_usametod_id == 235) {

                $this->opciones['metantic'] = Parametro::find(235)->Combo;
                $this->opciones['noapdisc'] = Parametro::find(235)->Combo;

            }



            if ($dataxxxx['modeloxx']->prm_regisalu_id == 168) {
                $this->opciones['entid_id'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->i_comidas_diarias > 4) {
                $this->opciones['motcomdi'] = Parametro::find(235)->Combo;
            }
            // if ($dataxxxx['padrexxx']->nnaj_sexo->prm_sexo_id==20) {
            //     $this->opciones['condnoap']=  Parametro::find(235)->Combo;
            // }
            if ($dataxxxx['modeloxx']->prm_estagest_id == 228 || $dataxxxx['modeloxx']->prm_estagest_id == 235) {
                $this->opciones['readgest'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->prm_estalact_id == 228 || $dataxxxx['modeloxx']->prm_estalact_id == 235) {
                $this->opciones['readlact'] = 'readonly';
            }

            if ($dataxxxx['modeloxx']->prm_tienhijo_id == 228) {
                $this->opciones['readhijo'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->prm_tieprsal_id == 228) {
                $this->opciones['probsalu'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_consmedi_id == 228) {
                $this->opciones['cualmedi'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->d_puntaje_sisben != '') {//
                $this->opciones['apsisben'] = Parametro::find(235)->ComboAjaxUno;
            }

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR DIGNOSTICADO',
                'titulist' => 'LISTA DE DIAGNOSTICADOS',
                'dataxxxx' => [],
                'vercrear' => true,
                'urlxxxxx' => route('fisalenf.listaxxx', $this->opciones['parametr'][0]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'FAMILIAR', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 4],

                        ['td' => 'TIPO ENFERMEDAD', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'RECIBE MEDICAMENTO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MEDICAMENTO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'RECIBIÓ TRATAMIENTO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [

                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],

                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_enfermedades_familias.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_compfamis.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_compfamis.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_compfamis.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_compfamis.s_segundo_apellido'],

                    ['data' => 's_tipo_enfermedad', 'name' => 'fi_enfermedades_familias.s_tipo_enfermedad'],
                    ['data' => 'medicina', 'name' => 'parametros.nombre as medicina'],
                    ['data' => 's_medicamento', 'name' => 'fi_enfermedades_familias.s_medicamento'],
                    ['data' => 'tratamiento', 'name' => 'parametros.nombre as tratamiento'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'fisalenf',
                'routxxxx' => 'fisalenf',
                'parametr' => $this->opciones['parametr'][0],
            ],

        ];



        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['tablread'] = 'display:none';

        $vestuari = FiSalud::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fisalud.editar', [$padrexxx->id, $vestuari->id]);
        }
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', $padrexxx->prm_estrateg_id == 2323 ? 'caminando' : 'formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fisalud.editar', [$padrexxx->id, FiSalud::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiSaludCrearRequest $request, FiDatosBasico $padrexxx)
    {

        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Salud creada con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiSalud  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiSalud $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', $padrexxx->prm_estrateg_id == 2323 ? 'caminando' : 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSalud  $residencia
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiSalud $modeloxx)
    {
        $respuest=$this->getPuedeTPuede(['casoxxxx'=>1,
        'nnajxxxx'=>$modeloxx->sis_nnaj_id,
        'permisox'=>$this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
         }
        $this->opciones['tablread'] = '';
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', $padrexxx->prm_estrateg_id == 2323 ? 'caminando' : 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiSalud  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiSaludUpdateRequest $request, FiDatosBasico $padrexxx,FiSalud $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Salud actualizada con éxito', $padrexxx);
    }




}

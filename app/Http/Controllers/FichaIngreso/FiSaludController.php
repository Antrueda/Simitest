<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSaludCrearRequest;
use App\Http\Requests\FichaIngreso\FiSaludUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSalud;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;

class FiSaludController extends Controller
{
    private $opciones;
    use FiTrait;
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
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['tipodisc'] = Tema::combo(24, true, false);
        $this->opciones['condnoap'] = Tema::combo(25, true, false);
        $this->opciones['noapdisc'] = Tema::combo(25, true, false);
        $this->opciones['noapanti'] = Tema::combo(25, true, false);
        $this->opciones['apsisben'] = Tema::combo(26, true, false);
        $this->opciones['metantic'] = Tema::combo(27, true, false);
        $this->opciones['motcomdi'] = Tema::combo(29, true, false);
        $this->opciones['puntsisb'] = Tema::combo(50, true, false);
        $this->opciones['metoanti'] = Tema::combo(52, true, false);
        $this->opciones['evmedico'] = Tema::combo(43, false, false);
        $this->opciones['probsalu'] = Tema::combo(87, true, false);
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
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.'.$archivox]
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
            if ($dataxxxx['modeloxx']->i_prm_tiene_discapacidad_id == 228) {
                $this->opciones['noapdisc'] = [1 => 'NO APLICA'];
                $this->opciones['tipodisc'] = [1 => 'NO APLICA'];

                $this->opciones['discausa'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_conoce_metodos_id == 228 || $dataxxxx['modeloxx']->i_prm_conoce_metodos_id == 235) {
                $this->opciones['noapdisc'] = [1 => 'NO APLICA'];
                $this->opciones['metantic'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_regimen_salud_id == 168) {
                $this->opciones['entid_id'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_comidas_diarias > 4) {
                $this->opciones['motcomdi'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_esta_gestando_id == 228 || $dataxxxx['modeloxx']->i_prm_esta_gestando_id == 235) {
                $this->opciones['readgest'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->i_prm_esta_lactando_id == 228 || $dataxxxx['modeloxx']->i_prm_esta_lactando_id == 235) {
                $this->opciones['readlact'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->i_prm_tiene_hijos_id == 228) {
                $this->opciones['readhijo'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->i_prm_tiene_problema_salud_id == 228) {
                $this->opciones['probsalu'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_consume_medicamentos_id == 228) {
                $this->opciones['cualmedi'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->d_puntaje_sisben != '') {
                $this->opciones['apsisben'] = [1 => 'NO APLICA'];
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
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
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
        return $this->grabar($dataxxxx, '', 'Salud creada con exito', $padrexxx);
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
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
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
        return $this->grabar($request->all(), $modeloxx, 'Salud actualizada con exito', $padrexxx);
    }
}

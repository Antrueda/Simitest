<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiJusticiaRestaurativaCrearRequest;
use App\Http\Requests\FichaIngreso\FiJusticiaRestaurativaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJusticiaRestaurativa;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;

class FiJusticiaRestaurativaController extends Controller
{
    use FiTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fijusticia';
        $this->opciones['routxxxx'] = 'fijusticia';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Justicia';
        $this->opciones['slotxxxx'] = 'fijusticia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "JUSTICIA RESTAURATIVA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['condnoap'] = Tema::combo(25, true, false);
        $this->opciones['actupard'] = Tema::combo(25, true, false);
        $this->opciones['actusrpa'] = Tema::combo(25, true, false);
        $this->opciones['actuspoa'] = Tema::combo(25, true, false);
        $this->opciones['motipard'] = Tema::combo(45, true, false);
        $this->opciones['motisrpa'] = Tema::combo(46, true, false);
        $this->opciones['sancsrpa'] = Tema::combo(47, true, false);
        $this->opciones['motispoa'] = Tema::combo(48, true, false);
        $this->opciones['sancspoa'] = Tema::combo(49, true, false);
        $this->opciones['causviol'] = Tema::combo(120, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['tablname'] = 'jrfamili';
        $this->opciones['vincviol'] = Tema::combo(120, true, false);
        $this->opciones['riesviol'] = Tema::combo(120, true, false);
        $this->opciones['titipard'] = Tema::combo(152, true, false);
        $this->opciones['titisrpa'] = Tema::combo(152, true, false);
        $this->opciones['titispoa'] = Tema::combo(152, true, false);
        $this->opciones['condspoa'] = Tema::combo(25, true, false);
    }

    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['justicia'] = FiJusticiaRestaurativa::justicia($dataxxxx['padrexxx']->sis_nnaj_id);
        // Inicializa composrtamiento de campos abiertos
        $this->opciones['readpard'] = '';
        $this->opciones['readnomd'] = '';
        $this->opciones['readteld'] = '';
        $this->opciones['readluga'] = '';
        $this->opciones['readsrpa'] = '';
        $this->opciones['readspoa'] = '';

        // Si es CHC
        if ($dataxxxx['padrexxx']->prm_tipoblaci_id == 650) {
            $this->opciones['condicio'] = [1 => 'NO APLICA'];
            $this->opciones['condnoap'] = [1 => 'NO APLICA'];
            $this->opciones['actupard'] = [1 => 'NO APLICA'];
            $this->opciones['actusrpa'] = [1 => 'NO APLICA'];
            $this->opciones['actuspoa'] = [1 => 'NO APLICA'];
            $this->opciones['titipard'] = [1 => 'NO APLICA'];
            $this->opciones['motipard'] = [1 => 'NO APLICA'];
            $this->opciones['readpard'] = 'readonly';
            $this->opciones['readnomd'] = 'readonly';
            $this->opciones['readteld'] = 'readonly';
            $this->opciones['readluga'] = 'readonly';
            $this->opciones['titisrpa'] = [1 => 'NO APLICA'];
            $this->opciones['motisrpa'] = [1 => 'NO APLICA'];
            $this->opciones['readsrpa'] = 'readonly';
            $this->opciones['sancsrpa'] = [1 => 'NO APLICA'];
            $this->opciones['titispoa'] = [1 => 'NO APLICA'];
            $this->opciones['motispoa'] = [1 => 'NO APLICA'];
            $this->opciones['readspoa'] = 'readonly';
            $this->opciones['sancspoa'] = [1 => 'NO APLICA'];
            $this->opciones['condspoa'] = [1 => 'NO APLICA'];
            $this->opciones['vincviol'] = [1 => 'NO APLICA'];
            $this->opciones['riesviol'] = [1 => 'NO APLICA'];
        }

        // indica si se esta actualizando o viendo

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1]=$dataxxxx['modeloxx']->id;
            $this->opciones['puedexxx'] = '';
            if ($dataxxxx['modeloxx']->i_prm_vinculado_violencia_id == 228) {
                $this->opciones['vincviol'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_riesgo_participar_id == 228) {
                $this->opciones['riesviol'] = [1 => 'NO APLICA'];
            }



            $pardxxxx = FiProcesoPard::where('fi_justicia_restaurativa_id', $dataxxxx['modeloxx']->id)->first();
            $dataxxxx['modeloxx']->i_prm_ha_estado_pard_id = $pardxxxx->i_prm_ha_estado_pard_id;
            $dataxxxx['modeloxx']->i_prm_actualmente_pard_id = $pardxxxx->i_prm_actualmente_pard_id;
            $dataxxxx['modeloxx']->i_prm_tipo_tiempo_pard_id = $pardxxxx->i_prm_tipo_tiempo_pard_id;
            $dataxxxx['modeloxx']->i_cuanto_pard = $pardxxxx->i_cuanto_pard;
            $dataxxxx['modeloxx']->i_prm_motivo_pard_id = $pardxxxx->i_prm_motivo_pard_id;
            $dataxxxx['modeloxx']->s_nombre_defensor = $pardxxxx->s_nombre_defensor;
            $dataxxxx['modeloxx']->s_telefono_defensor = $pardxxxx->s_telefono_defensor;
            $dataxxxx['modeloxx']->s_lugar_abierto_pard = $pardxxxx->s_lugar_abierto_pard;

            $srpaxxxx = FiProcesoSrpa::where('fi_justicia_restaurativa_id', $dataxxxx['modeloxx']->id)->first();
            $dataxxxx['modeloxx']->i_prm_ha_estado_srpa_id = $srpaxxxx->i_prm_ha_estado_srpa_id;
            $dataxxxx['modeloxx']->i_prm_actualmente_srpa_id = $srpaxxxx->i_prm_actualmente_srpa_id;
            $dataxxxx['modeloxx']->i_prm_tipo_tiempo_srpa_id = $srpaxxxx->i_prm_tipo_tiempo_srpa_id;
            $dataxxxx['modeloxx']->i_cuanto_srpa = $srpaxxxx->i_cuanto_srpa;
            $dataxxxx['modeloxx']->i_prm_motivo_srpa_id = $srpaxxxx->i_prm_motivo_srpa_id;
            $dataxxxx['modeloxx']->i_prm_sancion_srpa_id = $srpaxxxx->i_prm_sancion_srpa_id;

            $spoaxxxx = FiProcesoSpoa::where('fi_justicia_restaurativa_id', $dataxxxx['modeloxx']->id)->first();
            $dataxxxx['modeloxx']->i_prm_ha_estado_spoa_id = $spoaxxxx->i_prm_ha_estado_spoa_id;
            $dataxxxx['modeloxx']->i_prm_actualmente_spoa_id = $spoaxxxx->i_prm_actualmente_spoa_id;
            $dataxxxx['modeloxx']->i_prm_tipo_tiempo_spoa_id = $spoaxxxx->i_prm_tipo_tiempo_spoa_id;
            $dataxxxx['modeloxx']->i_cuanto_spoa = $spoaxxxx->i_cuanto_spoa;
            $dataxxxx['modeloxx']->i_prm_motivo_spoa_id = $spoaxxxx->i_prm_motivo_spoa_id;
            $dataxxxx['modeloxx']->i_prm_mod_cumple_pena_id = $spoaxxxx->i_prm_mod_cumple_pena_id;
            $dataxxxx['modeloxx']->i_prm_ha_estado_preso_id = $spoaxxxx->i_prm_ha_estado_preso_id;

            if ($dataxxxx['modeloxx']->i_prm_ha_estado_pard_id != 227) {
                $this->opciones['actupard'] = [1 => 'NO APLICA'];
                $this->opciones['titipard'] = [1 => 'NO APLICA'];
                $this->opciones['motipard'] = [1 => 'NO APLICA'];
                $this->opciones['readpard'] = 'readonly';
                $this->opciones['readnomd'] = 'readonly';
                $this->opciones['readteld'] = 'readonly';
                $this->opciones['readluga'] = 'readonly';
            }


            if ($dataxxxx['modeloxx']->i_prm_actualmente_pard_id != 227) {
                $this->opciones['titipard'] = [1 => 'NO APLICA'];
                $this->opciones['motipard'] = [1 => 'NO APLICA'];
                $this->opciones['readpard'] = 'readonly';
                $this->opciones['readnomd'] = 'readonly';
                $this->opciones['readteld'] = 'readonly';
                $this->opciones['readluga'] = 'readonly';
            }

            if ($dataxxxx['modeloxx']->i_prm_ha_estado_srpa_id != 227) {
                $this->opciones['actusrpa'] = [1 => 'NO APLICA'];
                $this->opciones['titisrpa'] = [1 => 'NO APLICA'];
                $this->opciones['motisrpa'] = [1 => 'NO APLICA'];
                $this->opciones['readsrpa'] = 'readonly';
                $this->opciones['sancsrpa'] = [1 => 'NO APLICA'];
            }


            if ($dataxxxx['modeloxx']->i_prm_actualmente_pard_id != 227) {
                $this->opciones['titisrpa'] = [1 => 'NO APLICA'];
                $this->opciones['motisrpa'] = [1 => 'NO APLICA'];
                $this->opciones['readsrpa'] = 'readonly';
                $this->opciones['sancsrpa'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_ha_estado_spoa_id != 227) {
                $this->opciones['actuspoa'] = [1 => 'NO APLICA'];
                $this->opciones['titispoa'] = [1 => 'NO APLICA'];
                $this->opciones['motispoa'] = [1 => 'NO APLICA'];
                $this->opciones['readspoa'] = 'readonly';
                $this->opciones['sancspoa'] = [1 => 'NO APLICA'];
                $this->opciones['condspoa'] = [1 => 'NO APLICA'];
            }

            if ($dataxxxx['modeloxx']->i_prm_actualmente_spoa_id != 227) {

                $this->opciones['titispoa'] = [1 => 'NO APLICA'];
                $this->opciones['motispoa'] = [1 => 'NO APLICA'];
                $this->opciones['readspoa'] = 'readonly';
                $this->opciones['sancspoa'] = [1 => 'NO APLICA'];
                $this->opciones['condspoa'] = [1 => 'NO APLICA'];
            }

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        $this->opciones['tablasxx'] = [
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.justicia',
                'titunuev' => 'CREAR JUSTICIA RESTAURATIVA',
                'titulist' => 'LISTA DE REDES DE APOYO ACTUALES',
                'dataxxxx' => [],
                'titupreg'=>'10.6 ¿Qué personas de su familia han estado o se encuentran en procesos legales, o han estado en la cárcel o fiscalía?',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FAMILIAR', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PROCESO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'VIGENTE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'NO. DE VECES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MOTIVO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'HACE CUÁNTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO TIEMPO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name'          => 'fi_red_apoyo_actuals.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_composicion_famis.s_primer_nombre'],
                    ['data' => 's_proceso', 'name' => 'fi_proceso_familias.s_proceso'],
                    ['data' => 'vigente', 'name' => 'parametros.nombre as vigente'],
                    ['data' => 'i_numero_veces', 'name' => 'fi_proceso_familias.i_numero_veces'],
                    ['data' => 's_motivo', 'name' => 'fi_proceso_familias.s_motivo'],
                    ['data' => 'i_hace_cuanto', 'name' => 'fi_proceso_familias.i_hace_cuanto'],
                    ['data' => 'tiempo', 'name' => 'parametros.nombre as tiempo'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablejusticia',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.btnscrud';
            $request->estadoxx = $this->opciones['rutacarp'].'Acomponentes.Botones.estadosx';
            return $this->getJusticiaTrait($request);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {
        $vestuari = FiJusticiaRestaurativa::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, $vestuari->id]);
        }

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, FiJusticiaRestaurativa::transaccion($dataxxxx,  $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiJusticiaRestaurativaCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Justicia restaurativa creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiJusticiaRestaurativa $modeloxx, FiDatosBasico $padrexxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit( FiDatosBasico $padrexxx,FiJusticiaRestaurativa $modeloxx)
    {
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiJusticiaRestaurativa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiJusticiaRestaurativaUpdateRequest $request, FiJusticiaRestaurativa $modeloxx, FiDatosBasico $padrexxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Justicia Restaurativa actualizada con exito', $padrexxx);
    }
}

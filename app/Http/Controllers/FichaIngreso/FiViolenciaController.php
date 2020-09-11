<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiViolenciaCrearRequest;
use App\Http\Requests\FichaIngreso\FiViolenciaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;
use App\Traits\Fi\VcontviolTrait;

class FiViolenciaController extends Controller
{
    use VcontviolTrait;
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'fiviolencia';
        $this->opciones['routxxxx'] = 'fiviolencia';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Violencia';
        $this->opciones['slotxxxx'] = 'fiviolencia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "VIOLENCIA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
       
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['condiesp'] = Tema::combo(23, true, false);
        $this->opciones['conditab'] = Tema::comboDesc(23, false, false);
        $this->opciones['violbasa'] = Tema::comboDesc(349, false, false);
        $this->opciones['lesicome'] = Tema::comboDesc(350, false, false);
    }

    private function view($dataxxxx)
    {

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],

        ];
        $condespe=57;
        if($dataxxxx['padrexxx']->prm_tipoblaci_id==2323){
            $condespe=351;
        }
        $this->opciones['condespe'] = Tema::combo($condespe, true, false);
        $this->opciones['cabefami'] = Tema::combo(352, true, false);
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['deparexp'] = ['' => 'Seleccione'];
        $this->opciones['municexp'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['ruarchjs'][1] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->i_prm_depto_condicion_id, false);
            $this->opciones['departam'] = SisDepartamento::combo(2, false);

            $this->opciones['municexp'] = SisMunicipio::combo($dataxxxx['modeloxx']->i_prm_depto_certifica_id, false);
            $this->opciones['deparexp'] = SisDepartamento::combo(2, false);

            if ($dataxxxx['modeloxx']->i_prm_condicion_presenta_id == 853 || $dataxxxx['modeloxx']->i_prm_condicion_presenta_id == 455) {
                $this->opciones['condiesp'] = [1 => 'NO APLICA'];
            }
            if ($dataxxxx['modeloxx']->i_prm_presenta_violencia_id != 227) {
                $this->opciones['conditab'] = [1 => 'NO APLICA'];
            }
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        $this->setModelo((isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx'] : false);
        $this->opciones['tablasxx'][] =
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.dtcontviol',
                'titunuev' => 'INDICAR VIOLENCIA',
                'titulist' => 'LISTA DE VIOLENCIAS PRESENTADAS',
                'contviol' => [
                    Tema::combo(
                        345,
                        true,
                        false
                    ),
                    'i_prm_presenta_violencia_id',
                    '12.1 ¿Presenta algún tipo de violencia?'
                ],

                'dataxxxx' => [],
                'titupreg' => 'Indicar el contexto en el cual se maninifiesta la violencia',
                'vercrear' => (isset($this->opciones['modeloxx']) && $this->opciones['modeloxx']->i_prm_presenta_violencia_id == 227) ? true : false,
                'urlxxxxx' => route('ficonvio.listaxxx', [(isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx']->id : 0, 345]),
                'cabecera' => $this->getCabeceraTabla(['temaidxx' => 345]),
                'cuerpoxx' => $this->getCuerpoTabla(),
                'tablaxxx' => 'datatablepresentadas',
                'permisox' => 'ficonvio',
                'routxxxx' => 'ficonvio',
                'parametr' => [(isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx']->id : 0, 345],
            ];
        if ($this->opciones['usuariox']->prm_tipoblaci_id == 2323) {
            $this->opciones['tablasxx'][] =  [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.dtcontviol',
                'titunuev' => 'INDICAR VIOLENCIA',
                'titulist' => 'LISTA DE VIOLENCIAS EJERCIDAS',
                'contviol' => [
                    Tema::combo(
                        346,
                        true,
                        false
                    ),
                    'prm_ejerviol_id',
                    '12.1 A Ha ejercido  algún tipo de presunta violencia durante la actividad en conflicto con la ley?'
                ],
                'dataxxxx' => [],
                'titupreg' => 'Indicar el contexto en el cual se maninifiesta la violencia',
                'vercrear' => (isset($this->opciones['modeloxx']) && $this->opciones['modeloxx']->prm_ejerviol_id == 227) ? true : false,
                'urlxxxxx' => route('ficonvio.listaxxx', [(isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx']->id : 0, 346]),
                'cabecera' => $this->getCabeceraTabla(['temaidxx' => 346]),
                'cuerpoxx' => $this->getCuerpoTabla(),
                'tablaxxx' => 'datatablejercidas',
                'permisox' => 'ficonvio',
                'routxxxx' => 'ficonvio',
                'parametr' => [(isset($this->opciones['modeloxx'])) ? $this->opciones['modeloxx']->id : 0, 346],
            ];
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
        $vestuari = FiViolencia::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fiviolencia.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $poblacio = $padrexxx->prm_tipoblaci_id;
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', $poblacio == 2323 ? 'relajado' : 'formulario', $poblacio == 2323 ? 'relajajs' : 'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fiviolencia.editar', [$padrexxx->id, FiViolencia::transaccion($dataxxxx, $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiViolenciaCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Violencia y condición especial creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiViolencia $modeloxx)
    {
        $poblacio = $padrexxx->prm_tipoblaci_id;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', $poblacio == 2323 ? 'relajado' : 'formulario', $poblacio == 2323 ? 'relajajs' : 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiViolencia $modeloxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $poblacio = $padrexxx->prm_tipoblaci_id;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', $poblacio == 2323 ? 'relajado' : 'formulario', $poblacio == 2323 ? 'relajajs' : 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiViolencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiViolenciaUpdateRequest $request, FiDatosBasico $padrexxx, FiViolencia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Violencia y condición especial actualizada con exito', $padrexxx);
    }
}

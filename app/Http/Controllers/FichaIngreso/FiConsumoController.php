<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiConsumoSpaCrearRequest;
use App\Http\Requests\FichaIngreso\FiConsumoSpaUpdateRequest;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;
use App\Traits\Fi\FiConsumoSpa\FiConsumoSpaCrudTrait;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\Antisimi\ConsumoSpaTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;

class FiConsumoController extends Controller
{
    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;
    use ConsumoSpaTrait;
    use FiConsumoSpaCrudTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'ficonsumo';
        $this->opciones['routxxxx'] = 'ficonsumo';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Consumo';
        $this->opciones['slotxxxx'] = 'ficonsumo';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "CONSUMO SPA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        // 'urlxxxxx' => 'api/fi/fisustanciaconsumida',
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
    }
    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = ['fisustanciaconsume'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
            return $this->getConsumoTrait($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];


        // indica si se esta actualizando o viendo
        $vercrear = false;
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['puedexxx'] = '';
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            if ($dataxxxx['modeloxx']->i_prm_consume_spa_id == 227) {
                $vercrear = true;
            }
        }

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR SUSTANCIA',
                'titulist' => 'SUSTANCIAS CONSUMIDAS',
                'dataxxxx' => [],
                'vercrear' => $vercrear,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'SUSTANCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'EDAD USO PRIMERA VEZ', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'HA CONSUMIDO ÚLTIMO MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_sustancia_consumidas.id'],
                    ['data' => 'sustancia', 'name' => 'parametros.nombre as sustancia'],
                    ['data' => 'i_edad_uso', 'name' => 'fi_sustancia_consumidas.i_edad_uso'],
                    ['data' => 'consume', 'name' => 'parametros.nombre as consume'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableconsumo',
                'permisox' => 'fisustanciaconsume',
                'routxxxx' => 'fisustanciaconsume',
                'parametr' => [$dataxxxx['padrexxx']->id],
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
        $this->opciones['consuspa'] = FiConsumoSpa::consumo($padrexxx->sis_nnaj_id);
        //$this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
        $vestuari = FiConsumoSpa::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('ficonsumo.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiConsumoSpaCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->setFiConsumoSpa($dataxxxx, '', 'Consumo SPA creado con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiConsumoSpa $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiConsumoSpa $modeloxx)
    {
        $consumox = $this->setConsumoCST(['consumox' => $modeloxx]);
        $respuest = $this->getPuedeTPuede([
            'casoxxxx' => 1,
            'nnajxxxx' => $modeloxx->sis_nnaj_id,
            'permisox' => $this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }else {
            $this->opciones['botoform']=[];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiConsumoSpa  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiConsumoSpaUpdateRequest $request, FiDatosBasico $padrexxx, FiConsumoSpa $modeloxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->setFiConsumoSpa($dataxxxx, $modeloxx, 'Consumo SPA actualizado con éxito', $padrexxx);
    }
}

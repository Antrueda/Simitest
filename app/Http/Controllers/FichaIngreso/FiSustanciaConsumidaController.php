<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSustanciaConsumida;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Support\Facades\Auth;

class FiSustanciaConsumidaController extends Controller
{
    use FiTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fisustanciaconsume';
        $this->opciones['routxxxx'] = 'fisustanciaconsume';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Consumo';
        $this->opciones['slotxxxx'] = 'ficonsumo';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "CONSUMO SPA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['sustanci'] = Tema::comboAsc(53, true, false);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => ['ficonsumo.nuevo', []],
            'formhref' => 2, 'tituloxx' => "VOLVER A CONSUMO SPA", 'clasexxx' => 'btn btn-sm btn-primary'
        ];
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
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['servicio'] = ['' => 'seleccione'];

        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR SUSTANCIA',
                'titulist' => 'SUSTANCIAS CONSUMIDAS',
                'dataxxxx' => [],
                'vercrear' => false,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route( 'ficonsumo.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [

                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'SUSTANCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'EDAD USO PRIMERA VEZ', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'HA CONSUMIDO ÚLTIMO MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
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
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'consumida'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fisustanciaconsume.editar', [$padrexxx->id, FiSustanciaConsumida::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiSustanciaConsumidaCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Sustancia creada con éxito', $padrexxx);
    }


    public function show(FiDatosBasico $padrexxx, FiSustanciaConsumida $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'consumida'], 'padrexxx' => $padrexxx]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSustanciaConsumida $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiSustanciaConsumida $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'consumida'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\FiSustanciaConsumida $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiSustanciaConsumidaUpdateRequest $request,  FiDatosBasico $padrexxx, FiSustanciaConsumida $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Sustancia actualizada con éxito', $padrexxx);
    }

    public function inactivate(FiDatosBasico $padrexxx,FiSustanciaConsumida $modeloxx)
    {
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
    public function destroy(FiDatosBasico $padrexxx,FiSustanciaConsumida $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('ficonsumo.nuevo', [$padrexxx->id])
            ->with('info', 'Red actual inactivada correctamente');
    }
}

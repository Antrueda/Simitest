<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaUpdateRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSustanciaConsumida;

use App\Models\Tema;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdDinfamPadreController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csdgenaporta';
        $this->opciones['routxxxx'] = 'csdgenaporta';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Ingresos';
        $this->opciones['slotxxxx'] = 'csdgeningresos';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "CONSUMO SPA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

            $this->opciones['acgening'] = Tema::combo(114, true, false);
            $this->opciones['trabinfo'] = Tema::combo(115, true, false);
            $this->opciones['otractiv'] = Tema::combo(116, true, false);
            $this->opciones['tiporela'] = Tema::combo(117, true, false);
            $this->opciones['raznogen'] = Tema::combo(122, true, false);
            $this->opciones['jorgener'] = Tema::combo(123, true, false);
            $this->opciones['diaseman'] = Tema::combo(124, false, false);
            $this->opciones['ampmxxxx'] = Tema::combo(5, true, false);
            $this->opciones['frecugen'] = Tema::combo(125, true, false);
            $this->opciones['condicio'] = Tema::combo(23, true, false);
            $this->opciones['familiar'] = Tema::combo(66, true, false);
        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => ['csddinfamiliar.nuevo', []],
            'formhref' => 2, 'tituloxx' => "VOLVER A GENERACION DE INGRESOS", 'clasexxx' => 'btn btn-sm btn-primary'
        ];
    }

    private function view($dataxxxx)
    {
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['servicio'] = ['' => 'seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
                'titunuev' => 'CREAR APORTANTE',
                'titulist' => 'LISTA DE APORTANTES',
                'dataxxxx' => [],
                'vercrear' => true,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.1 ¿Quién Aporta?', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.2 Total Ingresos Mensuales', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '10.3 Aporte que le hace al hogar', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.4 Jornada en que realiza la actividad', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '10.5 Días', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],

                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_gening_aportas.id'],
                    ['data' => 'aporta', 'name' => 'aporta.nombre as aporta'],
                    ['data' => 'mensual', 'name' => 'csd_gening_aportas.mensual'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 'aporte', 'name' => 'csd_gening_aportas.aporte'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablepadre',
                'permisox' => 'csdgenaporta',
                'routxxxx' => 'csdgenaporta',
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
    public function create(Csd $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'progenitor'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('csdgenaporta.editar', [$padrexxx->id, CsdDinfamPadre::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->id;
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Sustancia creada con exito', $padrexxx);
    }


    public function show(Csd $padrexxx, CsdDinfamPadre $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'progenitor'], 'padrexxx' => $padrexxx]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSustanciaprogenitor $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx, CsdDinfamPadre $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'progenitor'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\FiSustanciaprogenitor $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Csd $padrexxx, CsdDinfamPadre $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Sustancia actualizada con exito', $padrexxx);
    }

    public function inactivate(Csd $padrexxx,CsdDinfamPadre $modeloxx)
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
    public function destroy(Csd $padrexxx,CsdDinfamPadre $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csddinfamiliar.nuevo', [$padrexxx->id])
            ->with('info', 'Red actual inactivada correctamente');
    }
}

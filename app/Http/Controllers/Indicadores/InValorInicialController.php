<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InDiagnosticoEditarRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Parametro;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Traits\Pestanias;
use Illuminate\Http\Request;

class InValorInicialController extends Controller
{
    private $opciones;
    use Pestanias;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'permisox' => 'indiagnostico',
            'parametr' => [],
            'rutacarp' => 'Indicadores.Admin.',
            'tituloxx' => 'VALORACION INICIAL',
            'slotxxxy' => '',
            'slotxxxx' => 'nnajxxxx',
            'carpetax' => 'Diagnostico',
            'indecrea' => false,
            'esindexx' => false,
            'pestania' => []
        ];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'valoinic';
        $this->opciones['routnuev'] = 'valoinic';
        $this->opciones['routxxxx'] = 'valoinic';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJ', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nnajbases', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER LÍNEAS BASE', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['pestania'] = $this->getAreas(['tablaxxx' => $this->opciones['slotxxxx'], 'routxxxx' => $this->opciones['routxxxx']]);
        $this->opciones['accionxx'] = 'index';
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NNAJ',
                'titulist' => 'LISTA DE NNAJ',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-crear') ? true : false],
                ],
                'vercrear' => false,
                'accitabl' => true,
                'urlxxxxx' => 'api/indicadores/nnajlineabase',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'PRIMER NOMBRE'],
                    ['td' => 'SEGUNDO NOMBRE'],
                    ['td' => 'PRIMER APELLIDO'],
                    ['td' => 'SEGUNDO APELLIDO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'sis_nnajs.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 'sis_esta_id', 'name' => 'sis_nnajs.sis_esta_id'],
                ],
                'tablaxxx' => 'tablaareas',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'valoinic',
                'parametr' => [],
            ],

        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Listado de linea base para un nnaj
     * @param $nnajxxxx: nnaj seleccionado
     */
    public function bases($padrexxx)
    {

        $sis_nnaj = FiDatosBasico::where('sis_nnaj_id', $padrexxx)->first();
        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['slotxxxx'] = 'linebase';
        $this->opciones['pestania'] = $this->getAreas(['tablaxxx' => $this->opciones['slotxxxx'], 'routxxxx' => $this->opciones['routxxxx']]);
        $this->opciones['accionxx'] = 'index';
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NNAJ',
                'titulist' => 'LISTA DE LINEAS BASE',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesbase'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-crear') ?
                        (isset(InAccionGestion::where('in_lineabase_nnaj_id', $padrexxx)->first()->id) ? true : false) :
                        false],
                ],
                'vercrear' => false,
                'accitabl' => true,
                'urlxxxxx' => 'api/indicadores/diagnostico',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'LÍNEA BASE'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_lineabase_nnajs.id'],
                    ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                    ['data' => 'sis_esta_id', 'name' => 'in_lineabase_nnajs.sis_esta_id'],
                ],
                'tablaxxx' => 'tablaareas',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'valoinic',
                'parametr' => [],
            ],

        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($dataxxxx)
    {
        $sis_nnaj = $dataxxxx['objetoxx']->sis_nnaj->FiDatosBasico[0];
        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['categori'] = Tema::combo(295, true, false);
        $this->opciones['parametr'] = [$dataxxxx['objetoxx']->id];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['nivelxxx'] = $this->getNivel($dataxxxx['objetoxx']->i_prm_categoria_id);
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
        }
        $this->opciones['botoform'][1]['routingx'][1] = [$dataxxxx['objetoxx']->sis_nnaj_id];
        /**
         * se crea la funcionalidad de las pestañas para la asignacion de la valoración inicial del nnaj
         * cuando se esta en el  editar o ver
         */
        $this->opciones['slotxxxx'] = 'valoinic';
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'],
            'padrexxx' => $dataxxxx['objetoxx'],
            'routxxxx' => $this->opciones['routxxxx']
        ]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InLineabaseNnaj $objetoxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];


        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Editar']);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [InLineabaseNnaj::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }


    public function show(InLineabaseNnaj $objetoxx)
    {
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Ver']);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InDiagnosticoEditarRequest $request, InLineabaseNnaj $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'VALORACION INICIAL ASIGNADA CON EXITO!!');
    }



    private function getNivel($dataxxxx)
    {
        $nivelxxx = '';
        switch ($dataxxxx) {
            case 246:
            case 247:
            case 248:
                $nivelxxx = Parametro::where('id', 938)->first()->nombre;
                break;
            case 300:
            case 301:
            case 302:
                $nivelxxx = Parametro::where('id', 939)->first()->nombre;
                break;
            case 518:
            case 840:
            case 841:
                $nivelxxx = Parametro::where('id', 940)->first()->nombre;
                break;
        }
        return $nivelxxx;
    }
    public function nivel(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(['nivelxxx' => $this->getNivel($dataxxxx['padrexxx'])]);
        }
    }
}

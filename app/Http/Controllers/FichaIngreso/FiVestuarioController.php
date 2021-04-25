<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiVestuarioCrearRequest;
use App\Http\Requests\FichaIngreso\FiVestuarioUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;

class FiVestuarioController extends Controller
{
    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;


    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'VESTUARIO',
            'permisox' => 'fivestuario',
            'rutaxxxx' => 'FichaIngreso',
            'accionxx' => '',
            'volverax' => 'lista de NNAJ',
            'readonly' => '',
            'slotxxxx' => 'vestuario',
            'carpetax' => 'Vestuario',
            'modeloxx' => '',
            'routxxxx' => 'fi.vestuario',

            'routnuev' => 'fi.vestuario',
            'nuevoxxx' => 'o Registro'
        ];
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['sexoetar'] = Tema::combo(139, true, false);

        $this->opciones['tallzapa'] = Tema::comboAsc(138, true, false);

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fidatbas', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJ', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['nnajregi'] = $dataxxxx['padrexxx']->id;
        $this->opciones['estadoxx'] = 'ACTIVO';

        $this->opciones['tallasxx'] = $this->casos('');
        $this->opciones['vestuari'] = FiVestuarioNnaj::vestuario($dataxxxx['padrexxx']->id);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        // indica si se esta actualizando o viendo

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1]=$dataxxxx['modeloxx']->id;
            $this->opciones['tallasxx'] = $this->casos($dataxxxx['modeloxx']->prm_sexo_etario_id);
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $vestuari = FiVestuarioNnaj::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fi.vestuario.editar', [$padrexxx->id, $vestuari->id]);
        }
        return $this->view(['modeloxx' => '', 'accionxx'=>['crear','formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {
        $vestuari = FiVestuarioNnaj::transaccion($dataxxxx,  $objetoxx);
        return redirect()
            ->route('fi.vestuario.editar', [$vestuari->sis_nnaj->fi_datos_basico->id, $vestuari->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiDatosBasico $padrexxx, FiVestuarioCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Vestuario creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vestuario  $ve
     * @return \Illuminate\Http\ve
     */
    public function show(FiDatosBasico $padrexxx,FiVestuarioNnaj $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx'=>['ver','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vestuario  $ve
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiVestuarioNnaj $modeloxx)
    {
        $respuest=$this->getPuedeTPuede(['casoxxxx'=>1,
        'nnajxxxx'=>$modeloxx->sis_nnaj_id,
        'permisox'=>$this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
    }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx'=>['editar','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vestuario  $vestuario
     * @return \Illuminate\Http\Response
     */
    public function update(FiVestuarioUpdateRequest $request, $db, $id)
    {
        return $this->grabar($request->all(), FiVestuarioNnaj::where('id', $id)->first(), 'Vestuario actualizado con éxito');
    }

    private function casos($sexoxxxx)
    {
        $respuest = ['tallpant' => '', 'tallcami' => ''];
        switch ($sexoxxxx) {
            case 496: //HOMBRE NIÑO
                $respuest = [
                    'tallpant' => Tema::comboAsc(132, true, false),
                    'tallcami' => Tema::comboAsc(132, true, false),
                ];
                break;
            case 505: //HOMBRE ADULTO
                $respuest = [
                    'tallpant' => Tema::comboAsc(134, true, false),
                    'tallcami' => Tema::comboAsc(136, true, false),
                ];
                break;
            case 707: //MUJER NIÑA
                $respuest = [
                    'tallpant' => Tema::comboAsc(132, true, false),
                    'tallcami' => Tema::comboAsc(132, true, false),
                ];
                break;
            case 705: //MUJER ADULTA
                $respuest = [
                    'tallpant' => Tema::comboAsc(135, true, false),
                    'tallcami' => Tema::comboAsc(137, true, false),
                ];
                break;
            default:
                $respuest = ['tallpant' => ['' => 'Seleccione'], 'tallcami' => ['' => 'Seleccione']];
        }
        return $respuest;
    }
    public function tallasajax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->casos($request->all()['sexoxxxx']));
        }
    }
}

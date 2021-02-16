<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiResidenciaCrearRequest;
use App\Http\Requests\FichaIngreso\FiResidenciaUpdateRequest;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Interfaz\ResidenciaTrait;
use App\Traits\Puede\PuedeTrait;

class FiResidenciaController extends Controller
{
    use InterfazFiTrait;
    use PuedeTrait;
    use ResidenciaTrait;
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'firesidencia';
        $this->opciones['routxxxx'] = 'fi.residencia';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Residencia';
        $this->opciones['slotxxxx'] = 'residencia';
        $this->opciones['tituloxx'] = 'RESIDENCIA';
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['residees'] = Tema::combo(35, true, false);
        $this->opciones['tipodire'] = Tema::combo(36, true, false);
        $this->opciones['zonadire'] = Tema::combo(37, true, false);
        $this->opciones['cuadrant'] = Tema::combo(38, true, false);
        $this->opciones['alfabeto'] = Tema::combo(39, true, false);
        $this->opciones['estratox'] = Tema::combo(41, true, false);
        $this->opciones['condambi'] = Tema::combo(42, false, false);
        $this->opciones['tpviapal'] = Tema::combo(62, true, false);
        $this->opciones['esparcha'] = Tema::combo(291, true, false);
        $this->opciones['dircondi'] = Tema::combo(23, true, false);
        $this->opciones['localida'] = SisLocalidad::combo();

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
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = $this->opciones['upzxxxxx'];
        $this->opciones['readchcx'] = '';

        //ddd(Parametro::find(235)->combo);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        if ($this->opciones['usuariox']->prm_tipoblaci_id == 650) {
            $this->opciones['readchcx'] = 'readonly';
            $this->opciones['residees'] = [235 => 'N/A'];
            $this->opciones['localida'] = [22 => 'N/A'];
            $this->opciones['upzxxxxx'] = [119 => 'N/A'];
            $this->opciones['barrioxx'] = [1653 => 'N/A'];
            $this->opciones['estratox'] = [27 => 'NS/NR'];;
            $this->opciones['tiporesi'] = Tema::combo(145, true, false);
        } else {
            $this->opciones['tiporesi'] = Tema::combo(34, true, false);
        }
        // indica si se esta actualizando o viendo

        $this->opciones['condsele'] = FiCondicionAmbiente::getCondicionAbiente(0);
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            if ($dataxxxx['modeloxx']->i_prm_zona_direccion_id == 289) {
                $this->opciones['dircondi'] = [235 => 'N/A'];
                $this->opciones['cuadrant'] = [235 => 'N/A'];
                $this->opciones['alfabeto'] = [235 => 'N/A'];
                $this->opciones['tpviapal'] = [235 => 'N/A'];
            }

            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            if ($dataxxxx['padrexxx']->prm_tipoblaci_id != 650) {
                $dataxxxx['modeloxx']->sis_localidad_id=$dataxxxx['modeloxx']->sis_barrio->sis_localupz->sis_localidad_id;
                $this->opciones['upzxxxxx'] = SisUpz::combo($dataxxxx['modeloxx']->sis_localidad_id, false);
                $dataxxxx['modeloxx']->sis_upz_id=$dataxxxx['modeloxx']->sis_barrio->sis_localupz_id;
                $this->opciones['barrioxx'] = SisBarrio::combo($dataxxxx['modeloxx']->sis_upz_id, false);
                $this->opciones['condsele'] = FiCondicionAmbiente::getCondicionAbiente($dataxxxx['modeloxx']->id);
            }

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
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
        $compfami=FiResidencia::where('sis_nnaj_id',$padrexxx->sis_nnaj_id)->first();
        if(!isset($compfami->id)){
            $this->setResidencia(['padrexxx'=>$padrexxx]);
        }

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $vestuari = FiResidencia::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fi.residencia.editar', [$padrexxx->id, $vestuari->id]);
        }
        return $this->view(['modeloxx' => '', 'accionxx'=>['crear','formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {
        // ddd($dataxxxx);
        $modeloxx = FiResidencia::transaccion($dataxxxx,  $objetoxx);
        return redirect()
            ->route('fi.residencia.editar', [$modeloxx->sis_nnaj->fi_datos_basico->id,  $modeloxx->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiDatosBasico $padrexxx, FiResidenciaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Residencia creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiResidencia $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx'=>['ver','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiResidencia  $objetoxx
     * * @param    $nnajregi
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiResidencia $modeloxx)
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
     * @param  \App\Models\FiResidencia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiResidenciaUpdateRequest $request, $db, $id)
    {
        return $this->grabar($request->all(), FiResidencia::where('id', $id)->first(), 'Residencia actualizada con exito');
    }
}

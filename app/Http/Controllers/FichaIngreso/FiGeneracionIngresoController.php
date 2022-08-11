<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiGeneracionIngresoCrearRequest;
use App\Http\Requests\FichaIngreso\FiGeneracionIngresoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\Parametro;
use App\Models\Tema;
use App\Traits\Fi\FiGeneracionIngreso\FiGeneracionIngresoCrudTrait;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;

class FiGeneracionIngresoController extends Controller
{
    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;
    use FiGeneracionIngresoCrudTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fiingresos';
        $this->opciones['routxxxx'] = 'fiingresos';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Ingresos';
        $this->opciones['slotxxxx'] = 'fiingresos';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "GENERACI{$this->opciones['vocalesx'][3]}N DE INGRESOS";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['readhora'] = '';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);


        $this->opciones['acgening'] = Tema::combo(114, true, false);
        $this->opciones['trabinfo'] = Tema::comboAsc(115, true, false);
        $this->opciones['otractiv'] = Tema::comboAsc(116, true, false);
        $this->opciones['tiporela'] = Tema::comboAsc(117, true, false);
        $this->opciones['raznogen'] = Tema::comboAsc(122, true, false);
        $this->opciones['jorgener'] = Tema::comboAsc(123, true, false);
        $this->opciones['diaseman'] = Tema::comboAsc(124, false, false);
        $this->opciones['frecugen'] = Tema::comboAsc(125, true, false);
        $this->opciones['formalxx'] = '';
    }

    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['geneingr'] = FiGeneracionIngreso::generacion($dataxxxx['padrexxx']->sis_nnaj_id);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        // indica si se esta actualizando o viendo

        if ($dataxxxx['padrexxx']->prm_tipoblaci_id == 650) {
            $this->opciones['acgening'] = Tema::combo(296, true, false);
            $this->opciones['raznogen'] = Parametro::find(235)->Combo;
            $this->opciones['jorgener'] = Parametro::find(235)->Combo;
        } else {
            $this->opciones['padrexxx'] = Tema::combo(114, true, false);
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';

            if ($dataxxxx['modeloxx']->prm_actgeing_id == 626) {
                $this->opciones['trabinfo'] = Parametro::find(235)->Combo;
                $this->opciones['otractiv'] = Parametro::find(235)->Combo;
                $this->opciones['raznogen'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_actgeing_id == 627) {
                $this->opciones['otractiv'] = Parametro::find(235)->Combo;
                $this->opciones['formalxx'] = 'readonly';
                $this->opciones['raznogen'] = Parametro::find(235)->Combo;
                $this->opciones['tiporela'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_actgeing_id == 628) {
                $this->opciones['trabinfo'] = Parametro::find(235)->Combo;
                $this->opciones['formalxx'] = 'readonly';
                $this->opciones['raznogen'] = Parametro::find(235)->Combo;
                $this->opciones['tiporela'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_actgeing_id == 853) {
                $this->opciones['trabinfo'] = Parametro::find(235)->Combo;
                $this->opciones['otractiv'] = Parametro::find(235)->Combo;
                $this->opciones['formalxx'] = 'readonly';
                $this->opciones['tiporela'] = Parametro::find(235)->Combo;
            }
        }
        $this->opciones['readdiax'] = 'readonly';
        $this->opciones['readmesx'] = 'readonly';
        $this->opciones['readanio'] = 'readonly';
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
        $vestuari = FiGeneracionIngreso::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, $vestuari->id]);
        }

        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', $padrexxx->prm_tipoblaci_id == 650 ? 'chcxxxxx' : 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiGeneracionIngresoCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->setFiGeneracionIngreso($dataxxxx, '', 'Generación de ingresos creado con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiGeneracionIngreso  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiGeneracionIngreso $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', $padrexxx->prm_tipoblaci_id == 650 ? 'chcxxxxx' : 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiGeneracionIngreso  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiGeneracionIngreso $modeloxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', $padrexxx->prm_tipoblaci_id == 650 ? 'chcxxxxx' : 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiGeneracionIngreso  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiGeneracionIngresoUpdateRequest $request, FiDatosBasico $padrexxx,  FiGeneracionIngreso $modeloxx)
    {
        return $this->setFiGeneracionIngreso($request->all(), $modeloxx, 'Generación de ingresos actualizado con éxito', $padrexxx);
    }
}

<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiJustrestCrearRequest;
use App\Http\Requests\FichaIngreso\FiJustrestUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJustrest;
use App\Traits\Combos\CombosTrait;
use App\Traits\FI\FiPestaniasTrait;
use App\Traits\Fi\FiTrait;
use App\Traits\Fi\Justrest\JusticiasRestaurativaTrait;
use App\Traits\FI\Justrest\JustrestBotonesTrait;
use App\Traits\FI\Justrest\JustrestCombosTrait;
use App\Traits\FI\Justrest\JustrestDataTablesTrait;
use App\Traits\FI\Justrest\JustrestParametrizarTrait;
use App\Traits\FI\Justrest\JustrestVistasTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;

class FiJustrestController extends Controller
{
    use JustrestParametrizarTrait;
    use JustrestCombosTrait;
    use JustrestBotonesTrait;
    use JustrestDataTablesTrait;
    use JustrestVistasTrait;
    use FiPestaniasTrait;


    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;
    use CombosTrait;
    use JusticiasRestaurativaTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'fijusticia';
        $this->opciones['routxxxx'] = 'fijusticia';
        // $this->pestania[0][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->getCombosJCT();
    }
    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = ['fijrfamiliar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.btnscrud';
            $request->estadoxx = $this->opciones['rutacarp'] . 'Acomponentes.Botones.estadosx';
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

        $vestuari = FiJustrest::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, $vestuari->id]);
        }

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $poblacio = $padrexxx->prm_estrateg_id;
        return $this->getViewJVT(['modeloxx' => '', 'accionxx' => ['crear', $poblacio == 2323 ? 'relajado' : 'formulario', $poblacio == 2323 ? 'relajajs' : 'js',], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, FiJustrest::transaccion($dataxxxx,  $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiJustrestCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        if ($padrexxx->prm_estrateg_id == 2323) {
            $dataxxxx['i_prm_ha_estado_pard_id'] = $padrexxx->prm_tipoblaci_id;
            $dataxxxx['i_prm_actualmente_pard_id'] = $padrexxx->prm_tipoblaci_id;
        }
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Justicia restaurativa creada con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiJustrest  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiJustrest $modeloxx)
    {
        $poblacio = $padrexxx->prm_estrateg_id;
        return $this->getViewJVT(['modeloxx' => $modeloxx, 'accionxx' => ['ver', $poblacio == 2323 ? 'relajado' : 'formulario', $poblacio == 2323 ? 'relajajs' : 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiJustrest  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiJustrest $modeloxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        $poblacio = $padrexxx->prm_estrateg_id;
        return $this->getViewJVT(['modeloxx' => $modeloxx, 'accionxx' => ['editar', $poblacio == 2323 ? 'relajado' : 'formulario', $poblacio == 2323 ? 'relajajs' : 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiJustrest  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiJustrestUpdateRequest $request,  FiDatosBasico $padrexxx, FiJustrest $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Justicia Restaurativa actualizada con éxito', $padrexxx);
    }
}

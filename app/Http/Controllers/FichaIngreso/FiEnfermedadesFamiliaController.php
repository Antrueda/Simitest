<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiEnfermedadesFamiliaCrearRequest;
use App\Http\Requests\FichaIngreso\FiEnfermedadesFamiliaUpdateRequest;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiEnfermedadesFamilia;

use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiEnfermedadesFamiliaController extends Controller
{
    private $opciones;
    use FiTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fisaludenfermedad';
        $this->opciones['routxxxx'] = 'fisaludenfermedad';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Enfermedad';
        $this->opciones['slotxxxx'] = 'fisalud';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "SALUD";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['condicio'] = Tema::combo(23, true, false);

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fisalud.nuevo', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A SALUD', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
    }
    public function getListado(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->sis_nnaj_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getDiagnostico($request);
        }
    }

    private function view($dataxxxx)
    {

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['botoform'][0]['routingx'][1] = $this->opciones['parametr'];
        $this->opciones['compfami'] = FiComposicionFami::combo($dataxxxx['padrexxx'], true, false);
        $this->opciones['servicio'] = ['' => 'seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1]=$dataxxxx['modeloxx']->id;
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
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fisaludenfermedad.editar', [$padrexxx->id, FiEnfermedadesFamilia::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiEnfermedadesFamiliaCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Enfermedad creada con exito', $padrexxx);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiEnfermedadesFamilia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiEnfermedadesFamilia $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => 'Editar', 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiEnfermedadesFamilia  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiEnfermedadesFamiliaUpdateRequest $request,  FiDatosBasico $padrexxx, FiEnfermedadesFamilia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Enfermedad actualizada con exito', $padrexxx);
    }

    public function show(FiDatosBasico $padrexxx, FiEnfermedadesFamilia $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => 'Ver', 'padrexxx' => $padrexxx]);
    }

    public function inactivate(FiDatosBasico $padrexxx,FiEnfermedadesFamilia $modeloxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => 'Destroy','padrexxx'=>$padrexxx]);
    }


    public function destroy(FiDatosBasico $padrexxx,FiEnfermedadesFamilia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('fisalud.editar', [$padrexxx->id,$modeloxx->fi_salud_id])
            ->with('info', 'Componenete familiar inactivado correctamente');
    }
}

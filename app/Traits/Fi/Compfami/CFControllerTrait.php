<?php

namespace App\Traits\Fi\Compfami;

use App\Http\Requests\FichaIngreso\FiCompfamiCrearRequest;
use App\Http\Requests\FichaIngreso\FiCompfamiUpdateRequest;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Traits\Fi\FiDataTablesTrait;
use App\Traits\Fi\FiTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Traits\Interfaz\ComposicionFamiliarTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CFControllerTrait
{

    use ManageTimeTrait;
    use FiTrait; // administara todo los listados de las datatable y se accede al trait general
    use CFAjaxTrait;// todo las validaciones que se manejan por ajax
    use CFVistasTrait; // administracion de las vistas para el controlador
    use FiDataTablesTrait; // administracion de las tablas que se manenan para fi
    use InterfazFiTrait;
    use PuedeTrait;
    use ComposicionFamiliarTrait;
    use CFCrudTrait;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        // $respuest=$this->setFiCompfami(['requestx'=>$dataxxxx->all(),'modeloxx'=>$objectx, 'padrexxx'=>$padrexxx]);

        $dataxxxx=$dataxxxx->all();
        $dataxxxx['sis_nnajnnaj_id'] = $padrexxx->sis_nnaj_id;
        $respuest=FiCompfami::transaccion($dataxxxx, $objectx);
        //29729974 1
        return redirect()
            ->route('ficomposicion.editar', [$padrexxx->id, $respuest->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiCompfamiCrearRequest $request, FiDatosBasico $padrexxx)
    {
        return $this->grabar($request, '', 'Composicion familiar creada con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiCompfami  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiCompfami $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiCompfami $modeloxx)
    {
        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiCompfami  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiCompfamiUpdateRequest $request, FiDatosBasico $padrexxx, FiCompfami $modeloxx)
    {
        return $this->grabar($request, $modeloxx, 'Composicion familiar actualizada con éxito', $padrexxx);
    }
    public function getMI($modeloxx)
    {
        $messagex = ['', 1, ''];
        if ($modeloxx->sis_esta_id == 1) {
            $messagex = ['in', 2, 'IN'];
        }
        return $messagex;
    }
    public function inactivate(FiDatosBasico $padrexxx, FiCompfami $modeloxx)
    {
        $messagex = ' inactivar el nnaj en la composición familiar';
        $this->opciones['messagex'] = [true, $messagex];
        if ($padrexxx->sis_nnaj_id != $modeloxx->sis_nnaj_id) {
            $this->opciones['messagex'] = [false, ''];
            $this->getBotones(['borrar', [], 1, $this->getMI($modeloxx)[2]."ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $padrexxx]);
    }
    public function destroy(FiDatosBasico $padrexxx, FiCompfami $modeloxx)
    {
        $messagex = $this->getMI($modeloxx);
        $modeloxx->update(['sis_esta_id' =>  $messagex[1], 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [$padrexxx->id])
            ->with('info', "Componenete familiar {$messagex[0]}activado correctamente");
    }
}

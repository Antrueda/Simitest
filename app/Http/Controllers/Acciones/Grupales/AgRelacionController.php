<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgRelacionCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgRelacionEditarRequest;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgRelacion;

use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
use App\Traits\Acciones\Grupales\Relacion\CrudTrait;
use App\Traits\Acciones\Grupales\Relacion\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Relacion\VistasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgRelacionController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'agrelacion';
        $this->opciones['routxxxx'] = 'agrelacion';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(AgActividad $padrexxx)
    {
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['crear', [$padrexxx->id], 1, 'AGREGAR RECURSO', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    public function store(AgRelacionCrearRequest $request, AgActividad $padrexxx)
    {
        $request->request->add(['ag_actividad_id' => $padrexxx->id, 'sis_esta_id' => 1]);

        return $this->setAgRecurso([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Recurso agregado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(AgRelacion $modeloxx)
    {
        $padrexxx = $modeloxx->ag_actividad;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view($this->opciones,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    public function edit(AgRelacion $modeloxx)
    {
        $padrexxx = $modeloxx->ag_actividad;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR RESPONSABLE', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$padrexxx->id]], 2, 'CREAR RESPONSABLE', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->opciones,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }


    public function update(AgRelacionEditarRequest $request,  AgRelacion $modeloxx)
    {
        return $this->setAgRecurso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Recurso editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(AgRelacion $modeloxx)
    {
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->ag_actividad_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$modeloxx->ag_actividad_id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR RECURSO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->ag_actividad]
        );
    }


    public function destroy(Request $request, AgRelacion $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('agactividad.editar', [$modeloxx->ag_actividad_id])
            ->with('info', 'Responsable inactivado correctamente');
    }

    public function activate(AgRelacion $modeloxx)
    {
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->ag_actividad_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$modeloxx->ag_actividad_id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR RECURSO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->ag_actividad]
        );
    }
    public function activar(Request $request, AgRelacion $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('agactividad.editar', [$modeloxx->ag_actividad_id])
            ->with('info', 'Responsable activado correctamente');
    }
}

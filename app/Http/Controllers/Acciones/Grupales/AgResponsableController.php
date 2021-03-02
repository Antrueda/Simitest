<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgResponsableEditarRequest;
use App\Http\Requests\Acciones\Grupales\AgResponsableCrearRequest;
use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Traits\Acciones\Grupales\Responsable\CrudTrait;
use App\Traits\Acciones\Grupales\Responsable\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Responsable\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgResponsableController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'agrespon';
        $this->opciones['routxxxx'] = 'agrespon';
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
        $responsa = AgResponsable::where('ag_actividad_id',$padrexxx->id)->get();
        if(  count($responsa)<=2){
            $this->getBotones(['crear', [$padrexxx->id], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        }
        
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view($this->opciones,['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    public function store(AgResponsableCrearRequest $request, AgActividad $padrexxx)
    {
        $request->request->add(['ag_actividad_id' => $padrexxx->id, 'sis_esta_id' => 1]);
        return $this->setAgResponsable([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Responsable creados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(AgResponsable $modeloxx)
    {
        $padrexxx = $modeloxx->ag_actividad;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
 
        return $this->view($this->opciones,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }


    public function edit(AgResponsable $modeloxx)
    {
        $padrexxx = $modeloxx->ag_actividad;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$padrexxx->id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', ['agasiste.nuevo',[$padrexxx->id]], 2, 'AGREGAR PARTICIPANTES', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR RESPONSABLE', 'btn btn-sm btn-primary']);
        $responsa = AgResponsable::where('ag_actividad_id',$padrexxx->id)->get();
        if(  count($responsa)<=2){
        $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$padrexxx->id]], 2, 'AGREGAR NUEVO RESPONSABLE', 'btn btn-sm btn-primary']);
        }
        return $this->view(
            $this->opciones,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }


    public function update(AgResponsableEditarRequest $request,  AgResponsable $modeloxx)
    {
        return $this->setAgResponsable([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Responsable editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(AgResponsable $modeloxx)
    {
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->ag_actividad_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$modeloxx->ag_actividad_id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->destroy($modeloxx);
    }


    public function destroy(AgResponsable $modeloxx)
    {
        $modeloxx->delete();
        return redirect()->back()
            ->with('info', 'Responsable eliminado correctamente');
    }

    public function activate(AgResponsable $modeloxx)
    {
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->ag_actividad_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['editar', ['agactividad.editar', [$modeloxx->ag_actividad_id]], 2, 'VOLVER ACTIVIDADES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->ag_actividad]
        );
    }
    public function activar(Request $request, AgResponsable $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('agactividad.editar', [$modeloxx->ag_actividad_id])
            ->with('info', 'Responsable activado correctamente');
    }
}

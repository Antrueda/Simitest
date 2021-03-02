<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Ubicacion\SislocalidadCrearRequest;
use App\Http\Requests\Sistema\Ubicacion\SisLocalidadEditarRequest;
use App\Models\Sistema\SisLocalidad;
use App\Traits\Administracion\Ubicacion\ListadosTrait;
use App\Traits\Administracion\Ubicacion\Localidad\CrudLocalidadTrait;
use App\Traits\Administracion\Ubicacion\Localidad\DataTablesLocalidadTrait;
use App\Traits\Administracion\Ubicacion\Localidad\ParametrizarLocalidadTrait;
use App\Traits\Administracion\Ubicacion\Localidad\VistasLocalidadTrait;
use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocalidadController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudLocalidadTrait; // trait donde se hace el crud de localidades
    use ParametrizarLocalidadTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesLocalidadTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasLocalidadTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'localida';
        $this->opciones['routxxxx'] = 'localida';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones = $this->getTablas($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR LOCALIDAD', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(SislocalidadCrearRequest $request)
    {
        return $this->setLocalidad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Localidad creadas con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisLocalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A LOCALIDADES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVA LOCALIDAD', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(SisLocalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A LOCALIDADES', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR LOCALIDAD', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVA LOCALIDAD', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]
        );
    }


    public function update(SisLocalidadEditarRequest $request,  SisLocalidad $modeloxx)
    {
        return $this->setLocalidad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Localidad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisLocalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR LOCALIDAD', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy']]
        );
    }


    public function destroy(Request $request, SisLocalidad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Localidad inactivada correctamente');
    }

    public function activate(SisLocalidad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR LOCALIDAD', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]
        );
    }
    public function activar(Request $request, SisLocalidad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Localidad activada correctamente');
    }
}

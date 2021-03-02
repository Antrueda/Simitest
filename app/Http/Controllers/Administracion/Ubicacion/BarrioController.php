<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Ubicacion\SisBarrioCrearRequest;
use App\Http\Requests\Sistema\Ubicacion\SisBarrioEditarRequest;
use App\Models\Sistema\SisBarrio;
use App\Traits\Administracion\Ubicacion\Barrio\CrudBarrioTrait;
use App\Traits\Administracion\Ubicacion\Barrio\DataTablesBarrioTrait;
use App\Traits\Administracion\Ubicacion\Barrio\ParametrizarBarrioTrait;

use App\Traits\Administracion\Ubicacion\ListadosTrait;

use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use App\Traits\Administracion\Ubicacion\Barrio\VistasBarrioTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarrioController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudBarrioTrait; // trait donde se hace el crud de localidades
    use ParametrizarBarrioTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesBarrioTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasBarrioTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'barrioxx';
        $this->opciones['routxxxx'] = 'barrioxx';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR BARRIO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => '', 'accionxx' => ['crear', 'formulario'],
            ]

        );
    }
    public function store(SisBarrioCrearRequest $request)
    {
        return $this->setBarrio([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Barrio creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisBarrio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, "VOLVER A BARRIOS", 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVO BARRIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(SisBarrio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_pai]], 2, "VOLVER A BARRIOS", 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR BARRIO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_pai]], 2, 'CREAR NUEVA BARRIO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx,
                'accionxx' => ['editar', 'formulario'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }


    public function update(SisBarrioEditarRequest $request,  SisBarrio $modeloxx)
    {
        return $this->setBarrio([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Barrio editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisBarrio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR BARRIO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }


    public function destroy(Request $request, SisBarrio $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_pai])
            ->with('info', 'Barrio inactivado correctamente');
    }

    public function activate(SisBarrio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR BARRIO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }
    public function activar(Request $request, SisBarrio $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_pai])
            ->with('info', 'Barrio activado correctamente');
    }
}

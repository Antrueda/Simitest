<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Ubicacion\SisPaisCrearRequest;
use App\Http\Requests\Sistema\Ubicacion\SisPaisEditarRequest;
use App\Models\Sistema\SisPai;
use App\Traits\Administracion\Ubicacion\ListadosTrait;
use App\Traits\Administracion\Ubicacion\Pais\CrudTrait;
use App\Traits\Administracion\Ubicacion\Pais\DataTablesTrait;
use App\Traits\Administracion\Ubicacion\Pais\ParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Pais\VistasTrait;
use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaisController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'paisxxxx';
        $this->opciones['routxxxx'] = 'paisxxxx';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR PAIS', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(SisPaisCrearRequest $request)
    {
        return $this->setPais([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Pais creados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisPai $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A PAISES', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR PAIS', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVO PAIS', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(SisPai $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A PAISES', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR PAIS', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVO PAIS', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]
        );
    }


    public function update(SisPaisEditarRequest $request,  SisPai $modeloxx)
    {
        return $this->setPais([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'País editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisPai $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR PAIS', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy']]
        );
    }


    public function destroy(Request $request, SisPai $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'País inactivado correctamente');
    }

    public function activate(SisPai $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR PAIS', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]
        );

    }
    public function activar(Request $request, SisPai $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'País activado correctamente');
    }
}

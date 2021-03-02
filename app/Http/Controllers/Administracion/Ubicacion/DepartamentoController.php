<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Ubicacion\SisDepartamCrearRequest;
use App\Http\Requests\Sistema\Ubicacion\SisDepartamEditarRequest;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisPai;
use App\Traits\Administracion\Ubicacion\Departamento\CrudDepartamentoTrait;
use App\Traits\Administracion\Ubicacion\Departamento\DataTablesDepartamentoTrait;
use App\Traits\Administracion\Ubicacion\Departamento\ParametrizarDepartamentoTrait;
use App\Traits\Administracion\Ubicacion\Departamento\VistasDepartamentoTrait;
use App\Traits\Administracion\Ubicacion\ListadosTrait;

use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudDepartamentoTrait; // trait donde se hace el crud de localidades
    use ParametrizarDepartamentoTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesDepartamentoTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasDepartamentoTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct(Request $request)
    {
        $this->opciones['permisox'] = 'departam';
        $this->opciones['routxxxx'] = 'departam';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index($padrexxx)
    {
        $this->pestanix['departam'] = [true, $padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones = $this->getTablas($this->opciones, $padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisPai $padrexxx)
    {
        $this->pestanix['departam'] = [true, $padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR DEPARTAMENTO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => '', 'accionxx' => ['crear', 'formulario'],
                'padrexxx' => $padrexxx
            ]

        );
    }
    public function store(SisDepartamCrearRequest $request, $padrexxx)
    {
        $request->request->add(['sis_pai_id' => $padrexxx]);
        return $this->setDepartamento([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Departamento creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisDepartam $modeloxx)
    {
        $this->pestanix['departam'] = [true, $modeloxx->sis_pai];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A DEPARTAMENTOS', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR NUEVO DEPARTAMENTO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }


    public function edit(SisDepartam $modeloxx)
    {
        $this->pestanix['departam'] = [true, $modeloxx->sis_pai];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_pai]], 2, 'VOLVER A DEPARTAMENTOS', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR DEPARTAMENTO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_pai]], 2, 'CREAR NUEVO DEPARTAMENTO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx,
                'accionxx' => ['editar', 'formulario'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }


    public function update(SisDepartamEditarRequest $request,  SisDepartam $modeloxx)
    {
        return $this->setDepartamento([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Departamento editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisDepartam $modeloxx)
    {
        $this->pestanix['departam'] = [true, $modeloxx->sis_pai];

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR DEPARTAMENTO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }


    public function destroy(Request $request, SisDepartam $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_pai])
            ->with('info', 'Departamento inactivado correctamente');
    }

    public function activate(SisDepartam $modeloxx)
    {
        $this->pestanix['departam'] = [true, $modeloxx->sis_pai];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR DEPARTAMENTO', 'btn btn-sm btn-primary']),
            [
                'modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],
                'padrexxx' => $modeloxx->sis_pai
            ]
        );
    }
    public function activar(Request $request, SisDepartam $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_pai])
            ->with('info', 'Departamento activado correctamente');
    }
}

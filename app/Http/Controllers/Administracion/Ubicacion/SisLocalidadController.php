<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Ubicacion\PaisCrearRequest;
use App\Http\Requests\Administracion\Ubicacion\PaisEditarRequest;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepen;
use App\Traits\Administracion\Ubicacion\CrudTrait;
use App\Traits\Administracion\Ubicacion\Localidad\LocalidadDataTablesTrait;
use App\Traits\Administracion\Ubicacion\Localidad\LocalidadParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Localidad\LocalidadVistasTrait;
use App\Traits\Administracion\Ubicacion\ListadosTrait;
use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisLocalidadController extends Controller
{
    use LocalidadParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades

    use LocalidadDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use LocalidadVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'localida';
        $this->opciones['routxxxx'] = 'localida';
        $this->pestania[3][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crear', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],]);
    }
    public function store(PaisCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setLocalidad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => $this->opciones['infocont'].' creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisDepen $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(SisDepen $modeloxx)
    {

        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]);
    }


    public function update(PaisEditarRequest $request,  SisDepen $modeloxx)
    {
        return $this->setPais([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => $this->opciones['infocont'].' editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisDepen $modeloxx)
    {
        $this->getBotones(['borrar', [], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, SisDepen $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(SisDepen $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);

    }
    public function activar(Request $request, SisDepen $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}

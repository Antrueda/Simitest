<?php

namespace app\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Ubicacion\SisUpzCrearRequest;
use App\Http\Requests\Administracion\Ubicacion\SisUpzEditarRequest;
use App\Models\Sistema\SisUpz;
use App\Traits\Administracion\Ubicacion\UbicacionCrudTrait;
use App\Traits\Administracion\Ubicacion\UbicacionListadosTrait;
use App\Traits\Administracion\Ubicacion\UbicacionPestaniasTrait;
use App\Traits\Administracion\Ubicacion\Upzxxxxx\UpzxxxxxDataTablesTrait;
use App\Traits\Administracion\Ubicacion\Upzxxxxx\UpzxxxxxParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Upzxxxxx\UpzxxxxxVistasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisUpzController extends Controller
{
    use UpzxxxxxParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use UbicacionPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use UbicacionListadosTrait; // trait que arma las consultas para las datatables
    use UbicacionCrudTrait; // trait donde se hace el crud de localidades
    use UpzxxxxxDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use UpzxxxxxVistasTrait; // trait que arma la logica para lo metodos: crud
    public function __construct()
    {
        $this->pestania[5][5]='active';
        $this->opciones['permisox'] = 'upzxxxxx';
        $this->opciones['routxxxx'] = 'upzxxxxx';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {


        $this->getPestanias([]);
        $this->getTablasIndexUDT();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crear', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]);
    }
    public function store(SisUpzCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setUpz([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => $this->opciones['infocont'].' asignada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisUpz $modeloxx)
    {
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(SisUpz $modeloxx)
    {

        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);
    }


    public function update(SisUpzEditarRequest $request,  SisUpz $modeloxx)
    {
        return $this->setUpz([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => $this->opciones['infocont'].' editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisUpz $modeloxx)
    {
        $this->getBotones(['borrar', [], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy']]);
    }


    public function destroy(Request $request, SisUpz $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(SisUpz $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);

    }
    public function activar(Request $request, SisUpz $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}

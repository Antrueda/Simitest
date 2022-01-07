<?php

namespace App\Http\Controllers\AsisDiar;

use App\Http\Controllers\Controller;
use App\Http\Requests\AsisDiar\AsisDiarCrearRequest;
use App\Http\Requests\AsisDiar\AsisDiarEditarRequest;
use App\Models\AsisDiar\AsisDiar;
use App\Traits\AsisDiar\AsisDiar\AsisDiarParametrizarTrait;
use App\Traits\AsisDiar\AsisDiar\AsisDiarVistasTrait;
use App\Traits\AsisDiar\AsisDiarCrudTrait;
use App\Traits\AsisDiar\AsisDiarDataTablesTrait;
use App\Traits\AsisDiar\AsisDiarListadosTrait;
use App\Traits\AsisDiar\AsisDiarPestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsisDiarController extends Controller
{
    use AsisDiarParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AsisDiarPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AsisDiarListadosTrait; // trait que arma las consultas para las datatables
    use AsisDiarCrudTrait; // trait donde se hace el crud de localidades

    use AsisDiarDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsisDiarVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'actaencu';
        $this->opciones['routxxxx'] = 'actaencu';
        $this->pestania[0][5]='active';
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
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(AsisDiarCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsisDiar([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Acta de encuentro creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AsisDiar $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AsisDiar $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AsisDiarEditarRequest $request,  AsisDiar $modeloxx)
    {
        return $this->setAsisDiar([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AsisDiar $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AsisDiar $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AsisDiar $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AsisDiar $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}

<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use app\Http\Requests\Actaencu\AeEncuentroCrearRequest;
use app\Http\Requests\Actaencu\AeEncuentroEditarRequest;
use App\Models\Actaencu\AeEncuentro;
use App\Traits\Actaencu\Actaencu\ActaencuParametrizarTrait;
use App\Traits\actaencu\actaencu\ActaencuVistasTrait;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AeEncuentroController extends Controller
{
    use ActaencuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades

    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ActaencuVistasTrait; // trait que arma la logica para lo metodos: crud

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
    public function store(AeEncuentroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Acta de encuentro creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AeEncuentro $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AeEncuentro $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AeEncuentroEditarRequest $request,  AeEncuentro $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AeEncuentro $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AeEncuentro $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}

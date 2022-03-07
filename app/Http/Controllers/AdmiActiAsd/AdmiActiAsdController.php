<?php

namespace App\Http\Controllers\AdmiActiAsd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\Actividade;
use App\Traits\AdmiActiAsd\AdmiActiCrudTrait;

use App\Http\Requests\AdmiAsd\ActiviEditRequest;
use App\Http\Requests\AdmiAsd\ActiviCrearRequest;
use App\Traits\AdmiActiAsd\AdmiActiListadosTrait;
use App\Traits\AdmiActiAsd\AdmiActiPestaniasTrait;
use App\Traits\AdmiActiAsd\AdmiActiDataTablesTrait;
use App\Traits\AdmiActiAsd\AdmiActi\AdmiActiVistasTrait;
use App\Traits\AdmiActiAsd\AdmiActi\AdmiActiParametrizarTrait;



class AdmiActiAsdController extends Controller
{
    use AdmiActiParametrizarTrait;
    use AdmiActiCrudTrait; // trait donde se hace el crud de localidades
    use AdmiActiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiActiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiActiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiActiVistasTrait; // trait que arma la logica para lo metodos: crud

    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aasdacti';
        $this->opciones['routxxxx'] = 'aasdacti';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablasActividades();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }


    public function store(ActiviCrearRequest $request)
    {
    
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setActividade([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Actividad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Actividade $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(Actividade $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(ActiviEditRequest $request,  Actividade $modeloxx)
    {
        return $this->setActividade([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actividad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Actividade $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Actividade $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad inactivada correctamente');
    }

    public function activate(Actividade $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, Actividade $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad activada correctamente');
    }
}

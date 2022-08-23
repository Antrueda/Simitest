<?php

namespace App\Http\Controllers\AdmiActiAsd;

use App\Traits\BotonesTrait;
use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\AsdDependencia;
use App\Traits\AdmiActiAsd\AdmiActiCrudTrait;
use App\Traits\AdmiActiAsd\AdmiActiListadosTrait;
use App\Traits\AdmiActiAsd\AdmiActiPestaniasTrait;
use App\Traits\AdmiActiAsd\AdmiActiDataTablesTrait;
use App\Traits\AdmiActiAsd\AdmiDepen\AdmiDepenVistasTrait;
use App\Traits\AdmiActiAsd\AdmiDepen\AdmiDepenParametrizarTrait;



// use app\Http\Requests\AdmiAsd\TiacCrearRequest;
// use App\Http\Requests\AdmiAsd\ActiviEditRequest;
// use App\Http\Requests\AdmiAsd\ActiviCrearRequest;


class AdmiDepenAsdController extends Controller
{
     use AdmiDepenParametrizarTrait;
     use AdmiActiCrudTrait; // trait donde se hace el crud de localidades
     use AdmiActiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
     use AdmiActiListadosTrait; // trait que arma las consultas para las datatables
     use AdmiActiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
     use AdmiDepenVistasTrait; // trait que arma la logica para lo metodos: crud



    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aasdepen';
        $this->opciones['routxxxx'] = 'aasdepen';
        $this->pestania[2][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }


    public function index()
    {

        $this->getPestanias([]);
        $this->getTablasDependencias();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR DEPENDENCIA RECREATIVA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }


    public function store( $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setDependencia([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Dependencia creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'

     
        ]);
    }


    public function show(AsdDependencia $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AsdDependencia $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update( $request,  AsdDependencia $modeloxx)
    {
        return $this->setDependencia([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Dependencia Editada',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AsdDependencia $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }

    public function destroy(Request $request, AsdDependencia $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad inactivada correctamente');
    }

    public function activate(AsdDependencia $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AsdDependencia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de actividad activada correctamente');
    }
}

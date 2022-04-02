<?php

namespace App\Http\Controllers\AdmiActiAsd;

use Illuminate\Http\Request;
use App\Models\Permissionext;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdActividad;
use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdTiactividad;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiCrudTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\AdmiAsd\ActiviEditRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\AdmiAsd\ActiviCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActi\AdmiActiVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActi\AdmiActiParametrizarTrait;

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
        $this->opciones['permisox'] = 'aaasdacti';
        $this->opciones['routxxxx'] = 'aaasdacti';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index($padrexxx)
    {
        $this->pestania[1][2] = [$padrexxx];
        $this->getPestanias([]);
        $this->getTablasActividades($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create($padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }


    public function store(ActiviCrearRequest $request,AsdTiactividad $padrexxx)
    {
        $request->request->add(['tipos_actividad_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'itemxxxx' =>$padrexxx->item,
            'infoxxxx' =>       'Actividad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AsdActividad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->tipos_actividad_id]);
    }


    public function edit(AsdActividad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->tipos_actividad_id]);
    }


    public function update(ActiviEditRequest $request,  AsdActividad $modeloxx)
    {
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actividad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AsdActividad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->tipos_actividad_id]);
    }


    public function destroy(Request $request, AsdActividad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad inactivada correctamente');
    }

    public function activate(AsdActividad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->tipos_actividad_id]);

    }
    public function activar(Request $request, AsdActividad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad activada correctamente');
    }
}

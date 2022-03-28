<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfArea;

use App\Http\Requests\Administracion\AdmiPerfilVocacional\PvfActiCrearRequest;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;
use App\Http\Requests\Administracion\AdmiPerfilVocacional\PvfActiEditarRequest;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiActi\AdmiActiVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiActi\AdmiActiParametrizarTrait;


class pvfActividadController extends Controller
{
    use AdmiActiParametrizarTrait;
    use AdmiActiVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiPvfDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiPvfListadosTrait; // trait que arma las consultas para las datatables
    use AdmiPvfPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiPvfCrudTrait;
    use CombosTrait;

    public function __construct()
    {
       
        $padre = request()->route('padrexxx');
        if ($padre != null) {
           $data = PvfArea::select('id','nombre')->findOrFail($padre);
           $this->pestania[1][3] = 'ACTIVIDADES AREA '.strtoupper($data->nombre);
        }
        $this->opciones['permisox'] = 'apvfacti';
        $this->opciones['routxxxx'] = 'apvfacti';
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


    public function store(PvfActiCrearRequest $request,PvfArea $padrexxx)
    {
        $request->request->add(['area_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setPvfActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'itemxxxx' =>$padrexxx->item,
            'infoxxxx' =>       'Actividad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(PvfActividade $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->area_id];
        $this->pestania[1][3] = 'ACTIVIDADES AREA '.strtoupper($modeloxx->area->nombre);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->area_id]);
    }


    public function edit(PvfActividade $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->area_id];
        $this->pestania[1][3] = 'ACTIVIDADES AREA '.strtoupper($modeloxx->area->nombre);
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->area_id]);
    }


    public function update(PvfActiEditarRequest $request,  PvfActividade $modeloxx)
    {
        return $this->setPvfActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actividad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(PvfActividade $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->area_id];
        $this->pestania[1][3] = 'ACTIVIDADES AREA '.strtoupper($modeloxx->area->nombre);

        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->area_id]);
    }


    public function destroy(Request $request, PvfActividade $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Actividad inactivada correctamente');
    }

    public function activate(PvfActividade $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->area_id];
        $this->pestania[1][3] = 'ACTIVIDADES AREA '.strtoupper($modeloxx->area->nombre);
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->area_id]);

    }
    public function activar(Request $request, PvfActividade $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Actividad activada correctamente');
    }
}

<?php
namespace App\Http\Controllers\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use App\Http\Requests\Administracion\AdmiPerfilVocacional\PvfActiCrearRequest;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;
use App\Http\Requests\Administracion\AdmiPerfilVocacional\PvfActiEditarRequest;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiSubarea\AdmiSubareaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiSubarea\AdmiSubareaParametrizarTrait;



class VihoSubareaController extends Controller
{
    use AdmiSubareaParametrizarTrait;
    use AdmiSubareaVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiVihDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVihListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVihPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVihCrudTrait;
    use CombosTrait;

    public function __construct()
    {
       
        $padre = request()->route('padrexxx');
        if ($padre != null) {
           $data = VihArea::select('id','nombre')->findOrFail($padre);
           $this->pestania[1][3] = 'ACTIVIDADES AREA '.strtoupper($data->nombre);
        }
        $this->opciones['permisox'] = 'avihsuba';
        $this->opciones['routxxxx'] = 'avihsuba';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
        
    }

    public function index($padrexxx)
    {
        $this->pestania[1][2] = [$padrexxx];
        $this->getPestanias([]);
        $this->getTablasSubareas($padrexxx);
        return view($this->opciones['rutacarp'] . 'AdmiPerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
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

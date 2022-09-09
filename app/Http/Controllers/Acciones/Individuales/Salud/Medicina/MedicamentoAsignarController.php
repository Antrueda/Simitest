<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Medicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Concentracion\ConcentracionCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Concentracion\ConcentracionEditarRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\MedicamentoAsignar\MedicamentoAsignarCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\MedicamentoAsignar\MedicamentoAsignarEditarRequest;
use App\Models\Acciones\Individuales\salud\Medicina\AsignaMedicamentos;
use App\Models\Acciones\Individuales\salud\Medicina\Concentracion;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\MedicamentoAsignar\MedicamentoasignarParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\MedicamentoAsignar\MedicamentoasignarVistasTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Combos\MedicinaComboTrait;
use App\Traits\Combos\PlanillaDiariaComboTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class MedicamentoAsignarController extends Controller
{

    use AdmiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiCrudTrait; // trait donde se hace el crud de localidades
    use MedicamentoasignarParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use MedicamentoasignarVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait;
    use MedicinaComboTrait;


    
    public function __construct()
    {
        $this->opciones['permisox'] = 'asociarmedicamento';
        $this->opciones['routxxxx'] = 'asociarmedicamento';


        $this->pestania[3][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

   
    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasAsignarMedicamento();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {

        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
             
    }
    public function store(MedicamentoAsignarCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setMedicamentoAsignar([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Asignación de medicamento  creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AsignaMedicamentos $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AsignaMedicamentos $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR ASIGNACIÓN DE MEDICAMENTO ', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(MedicamentoAsignarEditarRequest $request,  AsignaMedicamentos $modeloxx)
    {
        return $this->setMedicamentoAsignar([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asignación de medicamento  editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AsignaMedicamentos $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASIGNACIÓN DE MEDICAMENTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AsignaMedicamentos $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asignación de medicamento  inactivado correctamente');
    }

    public function activate(AsignaMedicamentos $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASIGNACIÓN DE MEDICAMENTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AsignaMedicamentos $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asignación de medicamento activado correctamente');
    }

    
   

}

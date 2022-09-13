<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Medicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Medicamentos\MedicamentosCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Medicamentos\MedicamentosEditarRequest;
use App\Models\Acciones\Individuales\salud\Medicina\Medicamentos;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Medicamentos\MedicamentoParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Medicamentos\MedicamentoVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class MedicamentosController extends Controller
{

    use AdmiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiCrudTrait; // trait donde se hace el crud de localidades
    use MedicamentoParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use MedicamentoVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait;

    
    public function __construct()
    {
        $this->opciones['permisox'] = 'medicamento';
        $this->opciones['routxxxx'] = 'medicamento';


        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

   
    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasMedicamentos();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {

        $this->getBotones(['crearxxx', [], 1, 'GUARDAR MEDICAMENTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
             
    }
    public function store(MedicamentosCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setMedicamentos([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Medicamento creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Medicamentos $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(Medicamentos $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR MEDICAMENTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(MedicamentosEditarRequest $request,  Medicamentos $modeloxx)
    {
        return $this->setLimite([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Medicamento editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Medicamentos $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR LIMITE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Medicamentos $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Medicamento inactivado correctamente');
    }

    public function activate(Medicamentos $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR MEDICAMENTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, Medicamentos $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Medicamento activado correctamente');
    }

    
   

}

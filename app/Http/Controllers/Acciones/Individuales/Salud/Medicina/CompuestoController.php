<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Medicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Compuesto\CompuestoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Compuesto\CompuestoEditarRequest;
use App\Models\Acciones\Individuales\salud\Medicina\Compuesto;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Compuesto\CompuestoParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Compuesto\CompuestoVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class CompuestoController extends Controller
{

    use AdmiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiCrudTrait; // trait donde se hace el crud de localidades
    use CompuestoParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use CompuestoVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait;

    
    public function __construct()
    {
        $this->opciones['permisox'] = 'compuesto';
        $this->opciones['routxxxx'] = 'compuesto';


        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

   
    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasCompuesto();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {

        $this->getBotones(['crearxxx', [], 1, 'GUARDAR COMPUESTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
             
    }
    public function store(CompuestoCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setCompuesto([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Compuesto creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Compuesto $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(Compuesto $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR COMPUESTO ', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(CompuestoEditarRequest $request,  Compuesto $modeloxx)
    {
        return $this->setLimite([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Compuesto editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Compuesto $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR COMPUESTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Compuesto $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Compuesto inactivado correctamente');
    }

    public function activate(Compuesto $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR COMPUESTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, Compuesto $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Compuesto activado correctamente');
    }

    
   

}

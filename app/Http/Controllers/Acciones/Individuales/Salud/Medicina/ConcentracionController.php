<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Medicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Concentracion\ConcentracionCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Concentracion\ConcentracionEditarRequest;
use App\Models\Acciones\Individuales\salud\Medicina\Concentracion;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Concentracion\ConcentracionParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Concentracion\ConcentracionVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class ConcentracionController extends Controller
{

    use AdmiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiCrudTrait; // trait donde se hace el crud de localidades
    use ConcentracionParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ConcentracionVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait;

    
    public function __construct()
    {
        $this->opciones['permisox'] = 'concentracion';
        $this->opciones['routxxxx'] = 'concentracion';


        $this->pestania[2][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

   
    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasConcentracion();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {

        $this->getBotones(['crearxxx', [], 1, 'GUARDAR CONCENTRACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
             
    }
    public function store(ConcentracionCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setConcentracion([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Concentración creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Concentracion $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(Concentracion $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR CONCENTRACIÓN ', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(ConcentracionEditarRequest $request,  Concentracion $modeloxx)
    {
        return $this->setLimite([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Concentración editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Concentracion $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR CONCENTRACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Concentracion $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Concentración inactivado correctamente');
    }

    public function activate(Concentracion $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR CONCENTRACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, Concentracion $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Concentración activado correctamente');
    }

    
   

}

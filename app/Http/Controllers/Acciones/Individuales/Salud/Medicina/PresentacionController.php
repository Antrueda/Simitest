<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Medicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Presentacion\PresentacionCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Medicina\Presentacion\PresentacionEditarRequest;
use App\Models\Acciones\Individuales\salud\Medicina\Presentacion;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\AdmiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Presentacion\PresentacionParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Medicina\Administracion\Presentacion\PresentacionVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class PresentacionController extends Controller
{

    use AdmiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiCrudTrait; // trait donde se hace el crud de localidades
    use PresentacionVistasTrait;
    use PresentacionParametrizarTrait;
    use AdmiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use PresentacionVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait;

    
    public function __construct()
    {
        $this->opciones['permisox'] = 'presentacion';
        $this->opciones['routxxxx'] = 'presentacion';


        $this->pestania[1][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

   
    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasPresentacion();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {

        $this->getBotones(['crearxxx', [], 1, 'GUARDAR PRESENTACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
             
    }
    public function store(PresentacionCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setPresentacion([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'presentación creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Presentacion $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(Presentacion $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR PRESENTACIÓN ', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(PresentacionEditarRequest $request,  Presentacion $modeloxx)
    {
        return $this->setLimite([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'presentación editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Presentacion $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR PRESENTACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Presentacion $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'presentación inactivado correctamente');
    }

    public function activate(Presentacion $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR PRESENTACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, Presentacion $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'presentación activado correctamente');
    }

    
   

}

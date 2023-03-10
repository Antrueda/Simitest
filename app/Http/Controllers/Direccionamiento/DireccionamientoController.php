<?php

namespace App\Http\Controllers\Direccionamiento;

use App\Http\Controllers\Controller;
use App\Http\Requests\Direccionamiento\DireccionamientoCrearRequest;
use App\Http\Requests\Direccionamiento\DireccionamientoEditarRequest;
use App\Models\Direccionamiento\Direccionamiento;

use App\Traits\Direccionamiento\Direccionamiento\ParametrizarTrait;
use App\Traits\Direccionamiento\Direccionamiento\VistasTrait;
use App\Traits\Direccionamiento\AjaxTrait;
use App\Traits\Direccionamiento\CrudTrait;
use App\Traits\Direccionamiento\DataTablesTrait;
use App\Traits\Direccionamiento\DCombosTrait;
use App\Traits\Direccionamiento\ListadosTrait;
use App\Traits\Direccionamiento\PestaniasTrait;


use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DireccionamientoController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use DCombosTrait;
    use ManageTimeTrait;
    use AjaxTrait;// administrar los combos utilizados en las vistas

    public function __construct()
    {
        $this->opciones['permisox'] = 'direccionref';
        $this->opciones['routxxxx'] = 'direccionref';
        $this->pestania[0][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $activida = Direccionamiento::where('user_crea_id', Auth::user()->id)->where('incompleto', 1)->first();
        if(isset( $activida->id)){
            return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$activida->id])
            ->with('info', 'Tiene un direccionamiento o referenciación por terminar, por favor complételo para que pueda crear uno nuevo');
        }

        $this->getBotones(['crear', [], 1, 'GUARDAR DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'todoxxxx' => $this->opciones]);
    }

    public function store(DireccionamientoCrearRequest $request)
    {
        $this->opciones['fechminx']=Carbon::today()->subYear(explode('-',$request['d_nacimiento'])[0]);
        
        
        if($request['sis_nnaj_id']!=null&&$this->opciones['fechminx']->isoFormat('YY')<=17){
            $request->request->add(['incompleto' => 1]);
            $infoxxx='Por favor ingrese un acompañante para terminar el registro de Direccionamiento y referenciación';
        }else{
            $request->request->add(['incompleto' => 0]);
            $infoxxx='Direccionamiento y referenciación creado con éxito';
        }
        $request->request->add(['sis_esta_id' => 1]);
        
        return $this->setDireccionamiento([
            'requestx' => $request,
            'objetoxx' => '',
            'modeloxx' => '',
            'infoxxxx' =>      $infoxxx,
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);

        return redirect()->route($this->opciones['routxxxx'] . '.editar')->with(['infoxxxx' => 'Acta de encuentro creada con éxito']);
    }


    public function show(Direccionamiento $modeloxx)
    {

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(Direccionamiento $modeloxx)
    {

        if($modeloxx->user_crea_id!=Auth::user()->id){
            if(Auth::user()->roles->first()->id!=1){
            return redirect()
            ->route($this->opciones['routxxxx'] )
            ->with('info', 'No tiene permiso para editar este direccionamiento o referenciación');
        
            }
        }

        if( $modeloxx->sis_nnaj_id!=null){
        $this->opciones['padrexxx'] = $modeloxx->sis_nnaj_id;
        }else{
            $this->opciones['padrexxx'] = 1;
        }

        $this->getBotones(['crear', ['direccionref.nuevo', [$modeloxx->id]], 2, 'CREAR NUEVO DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'todoxxxx' => $this->opciones]);
    }


    public function update(DireccionamientoEditarRequest $request,  Direccionamiento $modeloxx)
    {
        $this->opciones['fechminx']=Carbon::today()->subYear(explode('-',$request['d_nacimiento'])[0]);
        if($request['sis_nnaj_id']!=null&&$this->opciones['fechminx']->isoFormat('YY')<=17&&$request['documentoaco']==null){
            $request->request->add(['incompleto' => 1]);
            $infoxxx='Por favor ingrese un acompañante para terminar el registro de Direccionamiento y referenciación';
        }else{
            $request->request->add(['incompleto' => 0]);
            $infoxxx='Direccionamiento y referenciación editada con éxito';
        }
        return $this->setDireccionamiento([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' =>  $infoxxx,
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Direccionamiento $modeloxx)
    {
 
        if( $modeloxx->sis_nnaj_id!=null){
        $this->opciones['padrexxx'] = $modeloxx->sis_nnaj_id;
        }else{
            $this->opciones['padrexxx'] = 1;
        }

        $this->getBotones(['borrar', [], 1, 'INACTIVAR DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Direccionamiento $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Direccionamiento y referenciación inactivada correctamente');
    }

    public function activate(Direccionamiento $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, Direccionamiento $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Direccionamiento y referenciación activada correctamente');
    }

}

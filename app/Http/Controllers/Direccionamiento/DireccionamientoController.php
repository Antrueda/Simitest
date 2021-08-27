<?php

namespace App\Http\Controllers\Direccionamiento;

use App\Http\Controllers\Controller;
use App\Http\Requests\Direccionamiento\DireccionamientoCrearRequest;
use App\Http\Requests\Direccionamiento\DireccionamientoEditarRequest;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Direccionamiento\Direccionamiento;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepen;
use app\Models\Sistema\SisLocalidad;
use App\Models\Temacombo;
use App\Models\User;
use App\Traits\Direccionamiento\Direccionamiento\ParametrizarTrait;
use App\Traits\Direccionamiento\Direccionamiento\VistasTrait;
use App\Traits\Direccionamiento\AjaxTrait;
use App\Traits\Direccionamiento\CrudTrait;
use App\Traits\Direccionamiento\DataTablesTrait;
use App\Traits\Direccionamiento\ListadosTrait;
use App\Traits\Direccionamiento\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
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
    use CombosTrait;
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
        $this->opciones['padrexxx'] = 1;
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        // $document = FiDatosBasico::where('sis_nnaj_id', 1)->first();
        // $nnajxxxx =  $document->sis_nnaj->fi_saluds;
        // ddd($nnajxxxx);

        
        $respuest = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => Carbon::now()->toDateString()
        ]);
        $this->opciones['inicioxx']=explode('-',$respuest['inicioxx']);
        $this->opciones['actualxx']=explode('-',$respuest['actualxx']);
        $this->opciones['padrexxx'] = 1;
        $this->opciones['sis_depens'] = SisDepen::pluck('nombre', 'id')->toArray();
        $this->opciones['sis_localidads'] = SisLocalidad::pluck('s_localidad', 'id')->toArray();
        $this->opciones['prm_accion_id'] = Temacombo::find(394)->parametros->pluck('nombre', 'id')->toArray();
        $this->opciones['recursos'] = AgRecurso::pluck('s_recurso', 'id')->toArray();
        $this->opciones['save_disabled'] = true;
        $this->opciones['funccont'] = User::whereIn('prm_tvinculacion_id', [1673, 1674])->pluck('name', 'id')->toArray();
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
        //ddd($request->toArray());
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
        $respuest = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => Carbon::now()->toDateString()
        ]);
        $this->opciones['inicioxx']=explode('-',$respuest['inicioxx']);
        $this->opciones['actualxx']=explode('-',$respuest['actualxx']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(Direccionamiento $modeloxx)
    {
        $respuest = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => Carbon::now()->toDateString()
        ]);
        if( $modeloxx->sis_nnaj_id!=null){
        $this->opciones['padrexxx'] = $modeloxx->sis_nnaj_id;
        }
        $this->opciones['inicioxx']=explode('-',$respuest['inicioxx']);
        $this->opciones['actualxx']=explode('-',$respuest['actualxx']);

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
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR DIRECCIONAMIENTO Y REFERENCIACIÓN', 'btn btn-sm btn-primary']);
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

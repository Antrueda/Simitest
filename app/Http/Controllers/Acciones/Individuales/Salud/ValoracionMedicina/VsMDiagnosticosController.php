<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionMedicina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\MatriculaCursoCrearRequest;
use App\Http\Requests\Acciones\Individuales\MatriculaCursoEditarRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VsDiagnosticoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VsDiagnosticoEditarRequest;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\VDiagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Salud\VDiagnostico\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\VDiagnostico\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\VDiagnostico\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\VDiagnostico\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VsMDiagnosticosController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    private $padrexxx = null;
 

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'vdiagnosti';
        $this->opciones['routxxxx'] = 'vdiagnosti';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vsmedicina $padrexxx)
    {
       $this->opciones['tablinde']=true;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(Vsmedicina $padrexxx)
    {
        
   
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->opciones['vercrear'] = false;
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['vsmedicina.editar', [$padrexxx->id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'diagnostico'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(VsDiagnosticoCrearRequest $request,Vsmedicina $padrexxx)
    {//

        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['vmg_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setVDiagnostico([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>       'Diagnostico creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(VDiagnostico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->medicina->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->medicina->nnaj;
        $this->opciones['valoraci'] = $this->opciones['padrexxx'];
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['vsmedicina.editar', [$modeloxx->vmg_id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'AGREGAR NUEVO DIAGNOSTICO', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'diagnostico'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(VDiagnostico $modeloxx)
    {
        
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->medicina->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->medicina->nnaj;
        $this->opciones['valoraci'] = $this->opciones['padrexxx'];
        $this->opciones['vercrear'] = false;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['vsmedicina.editar', [$modeloxx->vmg_id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->medicina->nnaj->id]], 2, 'AGREGAR NUEVO DIAGNOSTICO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'diagnostico'],'padrexxx'=>$modeloxx->medicina->nnaj]
        );
    }


    public function update(VsDiagnosticoEditarRequest $request,  VDiagnostico $modeloxx)
    {
        
        $request->request->add(['vmg_id'=> $modeloxx->medicina->id]);
        return $this->setVDiagnostico([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Diagnostico editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(VDiagnostico $modeloxx)
    {
        
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->opciones['padrexxx'] = $modeloxx->medicina->nnaj;
        $this->padrexxx = $modeloxx->medicina->nnaj;
        $this->opciones['usuariox'] = $modeloxx->medicina->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['vsmedicina.editar', [$modeloxx->vmg_id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->medicina->nnaj]
        );
    }


    public function destroy(Request $request, VDiagnostico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->medicina->sis_nnaj_id])
            ->with('info', 'Diagnostico inactivado correctamente');
    }

    public function activate(VDiagnostico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->medicina->nnaj->id];
        $this->padrexxx = $modeloxx->medicina->nnaj;
        $this->opciones['usuariox'] = $modeloxx->medicina->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['vsmedicina.editar', [$modeloxx->vmg_id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->medicina->nnaj]
        );

    }

    public function activar(Request $request, VDiagnostico $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->medicina->sis_nnaj_id])
            ->with('info', 'Diagnostico activado correctamente');
    }
}

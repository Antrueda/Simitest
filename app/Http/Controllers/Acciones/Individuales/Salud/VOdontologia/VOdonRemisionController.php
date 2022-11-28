<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\VOdontologia;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\VOdoexamenesCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontoantecentesCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontoantecentesEditarRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdoRemisionCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdoRemisionEditarRequest;
use App\Models\Acciones\Individuales\Salud\Odontologia\OdonDiag;
use App\Models\Acciones\Individuales\Salud\Odontologia\VHenfermedad;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Remision\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Remision\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Remision\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Remision\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\PestaniasTrait;
use App\Traits\Combos\CombosTrait;

use App\Models\Acciones\Individuales\Salud\Odontologia\VOdonremite;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontograma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VOdonRemisionController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

 
    public function __construct()
    {
        
        $this->opciones['permisox'] = 'vodonremites';
        $this->opciones['routxxxx'] = 'vodonremites';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(VOdontologia $padrexxx)
    {

        if($padrexxx->remision){
            return redirect()
            ->route('vodonremites.editar', [$padrexxx->remision->id]);
        }
        if($padrexxx->antecedentes){
            $this->pestanix[2]['routexxx'] = '.editar';
            $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->antecedentes->id];
            $this->pestanix[2]['checkxxx'] = 1;
        }else{
            $this->pestanix[2]['routexxx'] = '.nuevo';
            $this->pestanix[2]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[2]['checkxxx'] = 0;
        }
        if($padrexxx->examenes){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        //ddd($padrexxx->odontograma);
        if($padrexxx->odontograma){
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[4]['checkxxx'] = 0;
        }
         if($padrexxx->higiene){
             $this->pestanix[5]['routexxx'] = '.nuevo';
             $this->pestanix[5]['dataxxxx'] = [true, $padrexxx];
             $this->pestanix[5]['checkxxx'] = 1;
         }else{
             $this->pestanix[5]['routexxx'] = '.nuevo';
             $this->pestanix[5]['dataxxxx'] = [true, $padrexxx];
             $this->pestanix[5]['checkxxx'] = 0;
         }
        if($padrexxx->remision){
            $this->pestanix[6]['routexxx'] = '.editar';
            $this->pestanix[6]['dataxxxx'] = [true, $padrexxx->remision->id];
            $this->pestanix[6]['checkxxx'] = 1;
        }else{
            $this->pestanix[6]['routexxx'] = '.nuevo';
            $this->pestanix[6]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[6]['checkxxx'] = 0;
        }
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;

        //ddd($this->opciones['permisox'] .$this->opciones['diagnost'],  $this->opciones['valoraci']);

        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(VOdoRemisionCrearRequest $request,VOdontologia $padrexxx)
    {//
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['odonto_id'=> $padrexxx->id]);
        return $this->setOdoRemision([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Remisión creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(VOdonremite $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
    if($modeloxx->antecedentes){
            $this->pestanix[2]['routexxx'] = '.ver';
            $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->antecedentes->id];
            $this->pestanix[2]['checkxxx'] = 1;
        }else{
            $this->pestanix[2]['routexxx'] = '.nuevo';
            $this->pestanix[2]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[2]['checkxxx'] = 0;
        }
        if($modeloxx->examenes){
            $this->pestanix[3]['routexxx'] = '.ver';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        if($modeloxx->higiene){
            $this->pestanix[3]['routexxx'] = '.ver';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        if($modeloxx->higiene){
            $this->pestanix[3]['routexxx'] = '.ver';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        $this->opciones['usuariox'] = $modeloxx->odontologia->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->odontologia;
        $this->opciones['valoraci'] = $modeloxx;
        $this->padrexxx = $modeloxx->odontologia->nnaj;
        
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }

    public function edit(VOdonremite $modeloxx)
    {    
        $this->pestanix[2]['routexxx'] = '.editar';
        if($modeloxx->odontologia->antecedentes){
            $this->pestanix[2]['routexxx'] = '.editar';
            $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->odontologia->antecedentes->id];
            $this->pestanix[2]['checkxxx'] = 1;
        }else{
            $this->pestanix[2]['routexxx'] = '.nuevo';
            $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->odontologia];
            $this->pestanix[2]['checkxxx'] = 0;
        }
        if($modeloxx->odontologia->examenes){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->odontologia->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->odontologia];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        //ddd($modeloxx->odontologia->odontograma);
        if($modeloxx->odontologia->odontograma){
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->odontologia];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->odontologia];
            $this->pestanix[4]['checkxxx'] = 0;
        }
         if($modeloxx->odontologia->higiene){
             $this->pestanix[5]['routexxx'] = '.nuevo';
             $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->odontologia];
             $this->pestanix[5]['checkxxx'] = 1;
         }else{
             $this->pestanix[5]['routexxx'] = '.nuevo';
             $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->odontologia];
             $this->pestanix[5]['checkxxx'] = 0;
         }
        if($modeloxx->odontologia->remision){
            $this->pestanix[6]['routexxx'] = '.editar';
            $this->pestanix[6]['dataxxxx'] = [true, $modeloxx->odontologia->remision->id];
            $this->pestanix[6]['checkxxx'] = 1;
        }else{
            $this->pestanix[6]['routexxx'] = '.nuevo';
            $this->pestanix[6]['dataxxxx'] = [true, $modeloxx->odontologia];
            $this->pestanix[6]['checkxxx'] = 0;
        }
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        //$modeloxx = VHenfermedad::where('id',1)->first();
     //   ddd($modeloxx);
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->odontologia];
        $this->opciones['usuariox'] = $modeloxx->odontologia->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->odontologia;
        $this->opciones['valoraci'] = $modeloxx;
        $this->padrexxx = $modeloxx->odontologia;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view($this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->odontologia]
        );
    }


    public function update(VOdoRemisionEditarRequest $request,  VOdonremite $modeloxx)
    {
        $request->request->add(['odonto_id'=> $modeloxx->odontologia->id]);
        
        return $this->setOdoRemision([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Remisión editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(OdonDiag $modeloxx)
    {
        
        $this->opciones['usuariox'] = $modeloxx->odontologia->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->odontologia;
        $this->opciones['valoraci'] = $modeloxx;
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->odontologia];
        
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
                //return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],$this->getBotones(['borrar', [], 1, 'INACTIVAR ASISTENTE', 'btn btn-sm btn-primary']),
        return $this->destroy($modeloxx);
            }


    public function destroy(OdonDiag $modeloxx)
    {
        $modeloxx->delete();
        return redirect()->back()
            ->with('info', 'Diagnostico eliminado correctamente');
    }

    public function quitar(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $modeloxx = OdonDiag::where('id',$dataxxxx['id'])->first();
            $modeloxx->delete();
            return response()->json($respuest);
        }
      
    }


}

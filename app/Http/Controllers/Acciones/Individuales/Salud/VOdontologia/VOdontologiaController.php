<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\VOdontologia;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontologiaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontologiaEditarRequest;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VOdontologiaController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'vodontologia';
        $this->opciones['routxxxx'] = 'vodontologia';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SisNnaj $padrexxx)
    {
       $this->opciones['tablinde']=true;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;

        //ddd($this->opciones['permisox'] .$this->opciones['diagnost'],  $this->opciones['valoraci']);

        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(VOdontologiaCrearRequest $request,SisNnaj $padrexxx)
    {//

        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        return $this->setOdontologia([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Valoracion odontologica creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(VOdontologia $modeloxx)
    {
   
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
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

        
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->nnaj;
        
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }





    public function edit(VOdontologia $modeloxx)
    {    
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
    
        if($modeloxx->antecedentes){
            $this->pestanix[2]['routexxx'] = '.editar';
            $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->antecedentes->id];
            $this->pestanix[2]['checkxxx'] = 1;
        }else{
            $this->pestanix[2]['routexxx'] = '.nuevo';
            $this->pestanix[2]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[2]['checkxxx'] = 0;
        }
        if($modeloxx->examenes){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
      
        
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function update(VOdontologiaEditarRequest $request,  VOdontologia $modeloxx)
    {
        
        $request->request->add(['sis_nnaj_id'=> $modeloxx->nnaj->id]);
        return $this->setOdontologia([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Valoracion odontologica editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(VOdontologia $modeloxx)
    {
        
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, VOdontologia $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion odontologica inactivado correctamente');
    }

    public function activate(VOdontologia $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, VOdontologia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion odontologica activado correctamente');
    }
}

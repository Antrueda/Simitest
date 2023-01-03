<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\VOdontologia;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontoantecentesCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontoantecentesEditarRequest;

use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Antecedentes\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Antecedentes\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Antecedentes\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Antecedentes\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdonantece;



class VOdonAntecedentesController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'vodonanteces';
        $this->opciones['routxxxx'] = 'vodonanteces';
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
        
        if($padrexxx->antecedentes){
            return redirect()
            ->route('vodonanteces.editar', [$padrexxx->antecedentes->id]);
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
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['checkxxx'] = 0;
        }
         if($padrexxx->higiene){
             $this->pestanix[5]['routexxx'] = '.nuevo';
             $this->pestanix[5]['checkxxx'] = 1;
         }else{
             $this->pestanix[5]['routexxx'] = '.nuevo';
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

        if($padrexxx->consulta_id==1385){
            $this->pestanix[5]['dataxxxx'] = [true, $padrexxx];
        }else{
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx];
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
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(VOdontoantecentesCrearRequest $request,VOdontologia $padrexxx)
    {//
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['odonto_id'=> $padrexxx->id]);
        return $this->setOdoAntecedente([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Antecedentes creados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(VOdonantece $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->odontologia];
        $this->opciones['usuariox'] = $modeloxx->odontologia->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->odontologia;
        $this->opciones['valoraci'] = $modeloxx;
        $this->padrexxx = $modeloxx->odontologia->nnaj;
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        
        $do=$this->getBotones(['leer', ['vodontologia.editar', [$modeloxx->odontologia]], 2, 'VOLVER A VALORACIÓN ODONTOLOGÍA', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }

    public function edit(VOdonantece $modeloxx)
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
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['checkxxx'] = 0;
        }
         if($modeloxx->odontologia->higiene){
             $this->pestanix[5]['routexxx'] = '.nuevo';
             $this->pestanix[5]['checkxxx'] = 1;
         }else{
             $this->pestanix[5]['routexxx'] = '.nuevo';
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
        
        if($modeloxx->odontologia->consulta_id==1385){
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->odontologia];
        }else{
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->odontologia];
        }
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
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


    public function update(VOdontoantecentesEditarRequest $request,  VOdonantece $modeloxx)
    {
        $request->request->add(['odonto_id'=> $modeloxx->odontologia->id]);
        
        return $this->setOdoAntecedente([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Antecedentes editados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


}

<?php

namespace App\Http\Controllers\Acciones\Individuales\Emprendimiento\Egreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Emprender\EgresoCrearRequest as EmprenderEgresoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Emprender\EgresoDerechoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontologiaEditarRequest;
use App\Models\Acciones\Individuales\Emprender\Egreso\EgresoDere;
use App\Models\Acciones\Individuales\Emprender\Egreso\SEgreso;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;

use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Emprender\Egreso\Comite\CrudTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\Comite\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\Comite\VistasTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\ListadosTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EgresoComiteController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //


    public function __construct()
    {
        
        $this->opciones['permisox'] = 'egresocomite';
        $this->opciones['routxxxx'] = 'egresocomite';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(SEgreso $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;

        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;


        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['checkxxx'] = 1;
        
        if($padrexxx->derechos){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->derechos->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        
        if($padrexxx->redes){
            $this->pestanix[4]['routexxx'] = '.editar';
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx->redes->id];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[4]['checkxxx'] = 0;
        }
        if($padrexxx->seguimiento){
            $this->pestanix[5]['routexxx'] = '.editar';
            $this->pestanix[5]['dataxxxx'] = [true, $padrexxx->seguimiento->id];
            $this->pestanix[5]['checkxxx'] = 1;
        }else{
            $this->pestanix[5]['routexxx'] = '.nuevo';
            $this->pestanix[5]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[5]['checkxxx'] = 0;
        }

        if($padrexxx->comite){
            $this->pestanix[6]['routexxx'] = '.editar';
            $this->pestanix[6]['dataxxxx'] = [true, $padrexxx->comite->id];
            $this->pestanix[6]['checkxxx'] = 1;
        }else{
            $this->pestanix[6]['routexxx'] = '.nuevo';
            $this->pestanix[6]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[6]['checkxxx'] = 0;
        }
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(EgresoDerechoCrearRequest $request,SEgreso $padrexxx)
    {//
        
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['egreso_id'=> $padrexxx->id]);
        return $this->setEgreso([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx->nnaj,
            'infoxxxx' => 'Verificación de derechos creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(EgresoDere $modeloxx)
    {
   
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->egreso->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->egreso->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->egreso->id];
        $this->pestanix[2]['checkxxx'] = 1;
      
        if($modeloxx->egreso->derechos){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->egreso->derechos->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->egreso->id];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        
        if($modeloxx->egreso->redes){
            $this->pestanix[4]['routexxx'] = '.editar';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->egreso->redes->id];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->egreso->id];
            $this->pestanix[4]['checkxxx'] = 0;
        }
        if($modeloxx->egreso->seguimiento){
            $this->pestanix[5]['routexxx'] = '.editar';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->egreso->seguimiento->id];
            $this->pestanix[5]['checkxxx'] = 1;
        }else{
            $this->pestanix[5]['routexxx'] = '.nuevo';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->egreso->id];
            $this->pestanix[5]['checkxxx'] = 0;
        }
        
        $this->opciones['usuariox'] = $modeloxx->egreso->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->egreso->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->egreso->nnaj;
        
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVO VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }





    public function edit(EgresoDere $modeloxx)
    {    
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->egreso->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->egreso->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->egreso->id];
        $this->pestanix[2]['checkxxx'] = 1;
      
        if($modeloxx->egreso->derechos){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->egreso->derechos->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->egreso->id];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        
        if($modeloxx->egreso->redes){
            $this->pestanix[4]['routexxx'] = '.editar';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->egreso->redes->id];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx->egreso->id];
            $this->pestanix[4]['checkxxx'] = 0;
        }
        if($modeloxx->egreso->seguimiento){
            $this->pestanix[5]['routexxx'] = '.editar';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->egreso->seguimiento->id];
            $this->pestanix[5]['checkxxx'] = 1;
        }else{
            $this->pestanix[5]['routexxx'] = '.nuevo';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx->egreso->id];
            $this->pestanix[5]['checkxxx'] = 0;
        }
      
        
        $this->opciones['usuariox'] = $modeloxx->egreso->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->egreso->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->egreso->nnaj;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        
        // $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view(        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->egreso->nnaj]
        );
    }


    public function update(EgresoDerechoCrearRequest $request,  EgresoDere $modeloxx)
    {
        
        $request->request->add(['egreso_id'=> $modeloxx->egreso->id]);
        return $this->setEgreso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->egreso->nnaj,
            'infoxxxx' => 'Verificación de derechos editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(EgresoDere $modeloxx)
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
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->egreso->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, EgresoDere $modeloxx)
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

    public function activate(EgresoDere $modeloxx)
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

    public function activar(Request $request, SEgreso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion odontologica activado correctamente');
    }
}

<?php

namespace app\Http\Controllers\Acciones\Individuales\Educacion\FormatoValoracion;

use App\Http\Controllers\Controller;

use App\Http\Requests\Acciones\Individuales\ValoracionCompetenciasCrearRequest;
use App\Http\Requests\Acciones\Individuales\ValoracionCompetenciasEditarRequest;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ValorCompetencias\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ValorCompetencias\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ValorCompetencias\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ValoracionCompetenciasController extends Controller
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
        
        $this->opciones['permisox'] = 'valorcomp';
        $this->opciones['routxxxx'] = 'valorcomp';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(ValoraComp $padrexxx)
    {   
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'unidad'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(ValoracionCompetenciasCrearRequest $request,ValoraComp $padrexxx)
    {//

        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['valora_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setUnidad([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>       'Se agrego la unidad',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones['usuariox'] = $modeloxx->valora->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->valora->nnaj;
        $do=$this->getBotones(['leer', ['formatov.editar', [$modeloxx->valora]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'unidad'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(UniComp $modeloxx)
    {
      //  ddd(count($modeloxx->curso->Modulo));
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->valora->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->valora;
        $this->opciones['vercrear'] = true;
        $this->padrexxx = $modeloxx->valora;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['formatov.editar', [$modeloxx->valora]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        $unidades=count(UniComp::where('valora_id', $modeloxx->valora_id)->where('sis_esta_id', 1)->get());
        if($unidades<$modeloxx->valora->unidades){
            return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->valora->id]], 2, 'AGREGAR UNIDAD', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'unidad'],'padrexxx'=>$modeloxx->valora]
        );
        }else{
            return $this->view($this->opciones,['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'unidad'],'padrexxx'=>$modeloxx->valora]
        );
        }
       
    }


    public function update(ValoracionCompetenciasEditarRequest $request,  UniComp $modeloxx)
    {
        
        $request->request->add(['valora_id'=> $modeloxx->valora->id]);
        return $this->setUnidad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->valora,
            'infoxxxx' => 'Unidad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->valora->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->valora->nnaj;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['formatov.editar', [$modeloxx->valora]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado inactivado correctamente');
    }

    public function activate(UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->valora->nnaj->id];
        $this->padrexxx = $modeloxx->valora->nnaj;
        $this->opciones['usuariox'] = $modeloxx->valora->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->valora->nnaj;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', ['formatov.editar', [$modeloxx->valora]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, UniComp $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado activado correctamente');
    }
}

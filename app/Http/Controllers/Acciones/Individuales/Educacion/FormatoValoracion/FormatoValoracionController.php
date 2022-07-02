<?php

namespace app\Http\Controllers\Acciones\Individuales\Educacion\FormatoValoracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\FormatoValoracionCrearRequest;
use App\Http\Requests\Acciones\Individuales\FormatoValoracionEditarRequest;
use App\Http\Requests\Acciones\Individuales\MatriculaCursoCrearRequest;
use App\Http\Requests\Acciones\Individuales\MatriculaCursoEditarRequest;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FormatoValoracionController extends Controller
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
        
        $this->opciones['permisox'] = 'formatov';
        $this->opciones['routxxxx'] = 'formatov';
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
         $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $unidades='';
        $unidcomp='';
        $activida = ValoraComp::where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at','DESC')->first();
        if( $activida!=null){
            $unidades =count(UniComp::where('valora_id', $activida->id)->get());
            $unidcomp =count(UniComp::where('modulo_id', $activida->modulo_id)->where('concepto','COMPETENTE')->get());
            if($activida->unidades>$unidcomp){
                if($activida->unidades>$unidades){
                    return redirect()
                    ->route($this->opciones['routxxxx'] . '.editar', [$activida->id])
                    ->with('info', 'Tiene un Valoración por compentencias por terminar, por favor complételo para que pueda crear uno nuevo');
                }
            }
        }
    
        //ddd($unidcomp);
      
        $this->padrexxx = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
         $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(FormatoValoracionCrearRequest $request,SisNnaj $padrexxx)
    {//
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);

        return $this->setFormatoValoracion([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>       'Valoración de competencias creado con éxito, por favor realizar las clasificación de las unidades',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(ValoraComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER AL FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVO FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(ValoraComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $unidades=count(UniComp::where('valora_id', $modeloxx->id)->where('sis_esta_id', 1)->get());
        $this->opciones['vercrear'] = true;
         if($unidades<$modeloxx->unidades){
         
         }else{
             $this->opciones['vercrear'] = false;
         }        
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER AL FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'CREAR NUEVO FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function update(FormatoValoracionEditarRequest $request,  ValoraComp $modeloxx)
    {

        return $this->setFormatoValoracion([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Matricula Curso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(ValoraComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, ValoraComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado inactivado correctamente');
    }

    public function activate(ValoraComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A FORMATO DE VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, ValoraComp $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado activado correctamente');
    }
}

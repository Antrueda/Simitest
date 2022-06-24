<?php

namespace app\Http\Controllers\Acciones\Individuales\Educacion\VEntrevista;

use App\Http\Controllers\Controller;

use App\Http\Requests\Acciones\Individuales\Educacion\Entrevista\VEntrevistaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Entrevista\VEntrevistaEditarRequest;

use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;

use App\Models\Acciones\Individuales\Educacion\VEntrevista;
use App\Models\Post;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VEntrevista\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VEntrevistaController extends Controller
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
        
        $this->opciones['permisox'] = 'ventrevista';
        $this->opciones['routxxxx'] = 'ventrevista';
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['conthabi'] = [];
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
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(SisNnaj $padrexxx)
    {
       
        $perfil =$padrexxx->PerfilVocacional;
        $cuesti =$padrexxx->CuestionarioInteres;
        
        if(count($cuesti)==0&&count($perfil)==0){
                    return redirect()
                    ->route('ventrevista', [$padrexxx->id])
                    ->with('info', 'No se puede realizar el formulario porque no se han diligenciado los formularios de perfil vocacional Cuestionario de Gustos e Intereses');
        }
        $hoyxxxxx = Carbon::today()->isoFormat('YYYY-MM-DD');
        
        $entrevistz='';
        $entrevista = VEntrevista::where('sis_nnaj_id',$padrexxx->id)->where('sis_esta_id',1)->orderBy('created_at', 'desc')->first();
        
        if($entrevista!=null){
            $entrevistz=date('d-m-Y', strtotime($entrevista->fecha. ' + 1 years')) ;
            if( $hoyxxxxx<=$entrevistz){
                return redirect()
                ->route('ventrevista', [$padrexxx->id])
                ->with('info', 'Solo se puede diligenciar el formulario anualmente, la fecha para poder crear una nueva valoración es '.$entrevistz);
                }
        }

        $this->contarHabilidades($padrexxx);
                $this->padrexxx = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$padrexxx->id]], 2, 'VOLVER AL INICIO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(VEntrevistaCrearRequest $request,SisNnaj $padrexxx)
    {//

        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setFormatoValoracion([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>       'Entrevista Semiestructurada creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(VEntrevista $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->contarHabilidades($modeloxx->nnaj);
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA ENTREVISTA SEMIESTRUCTURADA', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(VEntrevista $modeloxx)
    {
      //  ddd(count($modeloxx->curso->Modulo)); $modeloxx->unidades
         $this->contarHabilidades($modeloxx->nnaj);
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $unidades=count(UniComp::where('valora_id', $modeloxx->id)->where('sis_esta_id', 1)->get());
        
        if($unidades<$modeloxx->unidades){
            $this->opciones['vercrear'] = true;
        }else{
            $this->opciones['vercrear'] = false;
        }        
        
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER AL INICIO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'CREAR NUEVA ENTREVISTA SEMIESTRUCTURADA', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function update(VEntrevistaEditarRequest $request,  VEntrevista $modeloxx)
    {
        Post::create(['sis_esta_id' => 1,'user_crea_id' => Auth::user()->id,'titulo' => 'Entrevista Semiestructurada editado con éxito','descripcion' => 'Entrevista Semiestructurada editado con éxito','user_id' => Auth::user()->id]);
        $request->request->add(['sis_nnaj_id'=> $modeloxx->nnaj->id]);
        return $this->setFormatoValoracion([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Entrevista Semiestructurada editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(VEntrevista $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A INICIO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, VEntrevista $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Entrevista Semiestructurada inactivado correctamente');
    }

    public function activate(VEntrevista $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A INICIO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, VEntrevista $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Entrevista Semiestructurada activado correctamente');
    }

    public function contarHabilidades(SisNnaj $padrexxx)
    {
        $cuestionario=CgihCuestionario::where('sis_esta_id', 1)->where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at', 'desc')->first();
       
        $itemsxxx = [];
        if($cuestionario!=null){
        foreach ($cuestionario->habilidades as $key => $value) {
            $cursoxxx = $value->curso->s_cursos;
            $letraxxx = $value->letra->nombre;
            if (!array_key_exists($letraxxx, $itemsxxx)) {
                $itemsxxx[$letraxxx] = [1,$cursoxxx];
            } else {
                $itemsxxx[$letraxxx][0] += 1;
            }
        }
    }
        // ddd($itemsxxx);
        $this->opciones['conthabi'] = $itemsxxx;
    }
}

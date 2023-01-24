<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\SeguimientoCaso;


use App\Http\Controllers\Controller;


use App\Http\Requests\Acciones\Individuales\Sociolegal\SeguimientoJuriCrearRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\SeguimientoJuriEditarRequest;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\SocialLegal\CasoJur;
use App\Models\Acciones\Individuales\SocialLegal\SeguiJuridico;

use App\Models\Tema;
use App\Traits\Acciones\Individuales\Sociolegal\SeguimientoCaso\CrudTrait;
use App\Traits\Acciones\Individuales\Sociolegal\SeguimientoCaso\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Sociolegal\SeguimientoCaso\VistasTrait;

use App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso\ListadosTrait;
use App\Traits\Acciones\Individuales\Sociolegal\SeguimientoCaso\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SeguimientoCasoJuridicoController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'seguimjur';
        $this->opciones['routxxxx'] = 'seguimjur';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CasoJur $padrexxx)
    {
        $seguiactual=SeguiJuridico::where('estadocaso',2856)->where('casojur_id',$padrexxx->id)->orderBy('created_at','desc')->first();

        //ddd($padrexxx->estacaso==2856||$seguiactual==nul
        if($padrexxx->estacaso==2856){
            $this->opciones['vercrear'] = false;
        }else{
            if($seguiactual!=null){
                $this->opciones['vercrear'] = false;
            }else{
                $this->opciones['vercrear'] = true;
            }
        }
        $this->opciones['tablinde']=true;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(CasoJur $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        
        
        $this->opciones['tablinde'] =false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$padrexxx->id]], 2, 'VOLVER A SEGUIMIENTO A CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(SeguimientoJuriCrearRequest $request,CasoJur $padrexxx)
    {//
        
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['casojur_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setSeguiJuridico([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Seguimiento a caso creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SeguiJuridico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->casojur->id];
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->casojur;
        $this->opciones['juridica'] = $modeloxx->casojur->nnaj->fi_justrests->fi_proceso_srpas;
        $this->opciones['tablinde']=false;
        $this->padrexxx = $modeloxx->casojur;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do= $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur]], 2, 'VOLVER A SEGUIMIENTO A CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->casojur]
        );
    }



    public function edit(SeguiJuridico $modeloxx)
    {    
        
        if($modeloxx->user_id!=Auth::user()->id||Auth::user()->roles->first()->id != 1 ){
            return redirect()
            ->route('seguimjur', [$modeloxx->casojur_id])
            ->with('info', 'No se puede editar este formulario');
         }
        $casoactual=SeguiJuridico::where('estadocaso',2856)->where('casojur_id',$modeloxx->casojur_id)->first();
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->casojur->id];
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->casojur;

        $this->padrexxx = $modeloxx->casojur;
        $this->opciones['tablinde']=false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur]], 2, 'VOLVER A SEGUIMIENTO A CASO JURÍDICO', 'btn btn-sm btn-primary']);
        
        if($casoactual==null){
            $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->casojur]], 2, 'CREAR NUEVO SEGUIMIENTO A CASO JURÍDICO', 'btn btn-sm btn-primary']);
        }
        
        return $this->view(  $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->casojur]
        );
    }


    public function update(SeguimientoJuriEditarRequest $request,  SeguiJuridico $modeloxx)
    {
        
        $request->request->add(['sis_nnaj_id'=> $modeloxx->casojur->nnaj->id]);
        return $this->setSeguiJuridico([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->casojur->nnaj,
            'infoxxxx' => 'Seguimiento a caso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SeguiJuridico $modeloxx)
    {
        
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->casojur->id];
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->casojur;
        $this->opciones['juridica'] = $modeloxx->casojur->nnaj->fi_justrests->fi_proceso_srpas;
        $this->padrexxx = $modeloxx->casojur->nnaj;
        $this->opciones['vercrear'] = false;
   
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur]], 2, 'VOLVER A SEGUIMIENTO A CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->casojur]
        );
    }


    public function destroy(Request $request, SeguiJuridico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->casojur->id];
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->casojur])
            ->with('info', 'Seguimiento a caso inactivado correctamente');
    }

    public function activate(SeguiJuridico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->padrexxx = $modeloxx->casojur->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur]], 2, 'VOLVER A SEGUIMIENTO A CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->casojur]
        );

    }

    public function activar(Request $request, SeguiJuridico $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->casojur])
            ->with('info', 'Seguimiento a caso activado correctamente');
    }
}

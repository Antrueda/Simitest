<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\CasoJuridico;


use App\Http\Controllers\Controller;

use App\Http\Requests\Acciones\Individuales\Salud\VsmedicinaEditarRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\CasoJurCrearRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\CasoJurEditarRequest;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
;
use App\Models\Acciones\Individuales\SocialLegal\CasoJur;
use App\Models\Acciones\Individuales\SocialLegal\SeguiJuridico;
use App\Models\sistema\SisNnaj;
use App\Models\Tema;
use App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso\CrudTrait;
use App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso\VistasTrait;
use App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso\ListadosTrait;
use App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CasoJuridicoController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'acasojur';
        $this->opciones['routxxxx'] = 'acasojur';
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

        if($padrexxx->FiResidencia==null){
            return redirect()
            ->route('acasojur', [$padrexxx->id])
            ->with('info', 'No se puede realizar el formulario, debe actualizar los datos de residencia del NNAJ en el formulario ficha de ingreso para continuar');
        }else{
            if($padrexxx->fi_datos_basico->prm_tipoblaci_id != 650){
            if($padrexxx->fi_justrests==null){
                return redirect()
                ->route('acasojur', [$padrexxx->id])
                ->with('info', 'No se puede realizar el formulario, debe actualizar los datos de justicia restuarativa del NNAJ en el formulario ficha de ingreso para continuar');
                 }
            }
        }
        
        $this->padrexxx = $padrexxx;
        $this->opciones['residenc'] = $padrexxx->FiResidencia;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['diagnost'] = '.listaxxy';
        $this->opciones['valoraci'] = $padrexxx;
        
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
    public function store(CasoJurCrearRequest $request,SisNnaj $padrexxx)
    {//
 
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setCasoJuridico([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Caso Jurídico creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(CasoJur $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx->nnaj;
        $this->padrexxx =  $this->opciones['padrexxx'];
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['cursosxx'] = Diagnostico::combo(true,false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441,true, false);
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(CasoJur $modeloxx)
    {    
        $this->opciones['cursosxx'] = Diagnostico::combo(true,false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441,true, false);
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'CREAR NUEVA ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function update(CasoJurEditarRequest $request,  CasoJur $modeloxx)
    {
       // ddd($request->request);
        $request->request->add(['sis_nnaj_id'=> $modeloxx->nnaj->id]);
        return $this->setCasoJuridico([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Caso Jurídico editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(CasoJur $modeloxx)
    {
        $seguimientos=SeguiJuridico::where('estadocaso',2856)->where('casojur_id',$modeloxx->id)->first();
        if($seguimientos==null){
            return redirect()
            ->route('acasojur', [$modeloxx->sis_nnaj_id])
            ->with('info', 'No se puede inactivar el caso, el estado debe estar cerrado');
        }
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function destroy(Request $request, CasoJur $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Caso Jurídico inactivado correctamente');
    }

    public function activate(CasoJur $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, CasoJur $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Caso Jurídico activado correctamente');
    }
}

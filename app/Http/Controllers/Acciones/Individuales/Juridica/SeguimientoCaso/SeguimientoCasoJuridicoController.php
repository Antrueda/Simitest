<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\SeguimientoCaso;


use App\Http\Controllers\Controller;

use App\Http\Requests\Acciones\Individuales\Salud\VsmedicinaEditarRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\CasoJurCrearRequest;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\SocialLegal\CasoJur;
use App\Models\Acciones\Individuales\SocialLegal\SeguiJuridico;
use App\Models\Acciones\Individuales\SocialLegal\SeguimientoCaso;
use App\Models\sistema\SisNnaj;
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
       $this->opciones['tablinde']=true;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(CasoJur $padrexxx)
    {
        
   //     ddd($padrexxx->fi_justrests->fi_proceso_srpas->i_prm_ha_estado_srpa);

        
        $this->padrexxx = $padrexxx;

        
        //ddd($this->opciones['residenc']);
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['diagnost'] = '.listaxxy';
        $this->opciones['valoraci'] = $padrexxx;
        //ddd($this->opciones['permisox'] .$this->opciones['diagnost'],  $this->opciones['valoraci']);
        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(CasoJurCrearRequest $request,CasoJur $padrexxx)
    {//
        
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setCasoJuridico([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Valoracion medica general creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SeguiJuridico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->casojur->nnaj;
        $this->opciones['valoraci'] = $modeloxx->casojur->nnaj;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['cursosxx'] = Diagnostico::combo(true,false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441,true, false);
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }



    public function edit(SeguiJuridico $modeloxx)
    {    
        $this->opciones['cursosxx'] = Diagnostico::combo(true,false);
        $this->opciones['estadoxx'] = Tema::comboAsc(441,true, false);
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->casojur->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->casojur->nnaj;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur->nnaj->id]], 2, 'VOLVER A ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->casojur->nnaj->id]], 2, 'CREAR NUEVA ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->casojur->nnaj]
        );
    }


    public function update(VsmedicinaEditarRequest $request,  SeguiJuridico $modeloxx)
    {
        
        $request->request->add(['sis_nnaj_id'=> $modeloxx->casojur->nnaj->id]);
        return $this->setCasoJuridico([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->casojur->nnaj,
            'infoxxxx' => 'Valoracion medica general editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SeguiJuridico $modeloxx)
    {
        
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->opciones['padrexxx'] = $modeloxx->casojur->nnaj;
        $this->padrexxx = $modeloxx->casojur->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['usuariox'] = $modeloxx->casojur->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur->nnaj->id]], 2, 'VOLVER A ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, SeguiJuridico $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->casojur->nnaj->id];
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion medica general inactivado correctamente');
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
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->casojur->nnaj->id]], 2, 'VOLVER A ATENCIÓN CASO JURÍDICO', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, SeguiJuridico $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion medica general activado correctamente');
    }
}

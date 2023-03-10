<?php

namespace App\Http\Controllers\Acciones\Grupales\Traslado;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\TrasladoRequest;
use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Simianti\Ba\BaRemisionBeneficiarios;
use App\Models\Simianti\Inf\IfDetalleAsistenciaDiaria;
use App\Models\Simianti\Inf\IfPlanillaAsistencia;
use App\Models\Simianti\V\VAsistenciasMax1;
use App\Traits\Acciones\Grupales\Traslado\CrudTrait;
use App\Traits\Acciones\Grupales\Traslado\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Traslado\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\Traslado\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrasladoController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //
    public function __construct()
    {
        $this->opciones['permisox'] = 'traslado';
        $this->opciones['routxxxx'] = 'traslado';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['tablinde']=true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones])]);
    }

    public function create()
    {
        $this->opciones['tiempoxx']=3;
        $this->opciones['tablinde']=false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(TrasladoRequest $request)
    {//
        
        // $traslado= Traslado::count();
        // if($traslado==0){
        //     $dataxxxx = BaRemisionBeneficiarios::orderby('id_remision', 'desc')->first()->id_remision + 1;;
        //     $request->request->add(['id'=> $dataxxxx]);
        // }
        $request->request->add(['sis_esta_id'=> 1]);
        return $this->setAgTraslado([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $request,
            'infoxxxx' =>       'Traslado creado con éxito, por favor asignar NNAJ',
            'routxxxx' => 'traslannaj.nuevo'
        ]);
    }


    public function show(Traslado $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVO TRASLADO', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(Traslado $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A TRASLADO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->id]], 2, 'CREAR NUEVO TRASLADO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(TrasladoRequest $request,  Traslado $modeloxx)
    {

        return $this->setAgTraslado([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx,
            'infoxxxx' => 'Traslado editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Traslado $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, Traslado $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado inactivado correctamente');
    }

    public function activate(Traslado $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, Traslado $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado activado correctamente');
    }
}

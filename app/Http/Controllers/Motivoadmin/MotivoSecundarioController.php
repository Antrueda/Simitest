<?php

namespace App\Http\Controllers\Motivoadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosStseCrearRequest;
use App\Http\Requests\FichaObservacion\FosStseEditarRequest;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Traits\MotivoAdmin\MotivoSecundario\CrudTrait;
use App\Traits\MotivoAdmin\MotivoSecundario\DataTablesTrait;
use App\Traits\MotivoAdmin\MotivoSecundario\ParametrizarTrait;
use App\Traits\MotivoAdmin\MotivoSecundario\VistasTrait;
use App\Traits\MotivoAdmin\ListadosTrait;
use App\Traits\MotivoAdmin\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class MotivoSecundarioController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'motivose';
        $this->opciones['routxxxx'] = 'motivose';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create()
    {
   
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR MOTIVO SECUNDARIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(FosStseCrearRequest $request)   
     {

        return $this->setFosSubTiposeg([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Sub tipo de seguimiento creados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(MotivoEgresoSecu $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A MOTIVO SECUNDARIO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR MOTIVO SECUNDARIO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(MotivoEgresoSecu $modeloxx)
    {
        
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A MOTIVO SECUNDARIO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]
        );
    }


    public function update(FosStseCrearRequest $request,  MotivoEgresoSecu $modeloxx)
    {
        return $this->setFosSubTiposeg([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Sub tipo de seguimiento editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(MotivoEgresoSecu $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR MOTIVO SECUNDARIO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, MotivoEgresoSecu $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=MotivoEgreu::where('motivoese_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        //ddd( $seguimix);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Sub tipo de seguimiento inactivado correctamente');
    }

    public function activate(MotivoEgresoSecu $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR MOTIVO SECUNDARIO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->fos_tse]
        );

    }
    public function activar(Request $request, MotivoEgresoSecu $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=FosSeguimiento::where('motivoese_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Sub tipo de seguimiento activado correctamente');
    }
}

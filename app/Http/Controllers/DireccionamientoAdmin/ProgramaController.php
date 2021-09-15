<?php

namespace App\Http\Controllers\DireccionamientoAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DireccionamientoAdmin\ProgramaRequest;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use app\Models\sistema\SisServicio;
use App\Traits\DireccionamientoAdmin\Programa\CrudTrait;
use App\Traits\DireccionamientoAdmin\Programa\DataTablesTrait;
use App\Traits\DireccionamientoAdmin\Programa\ParametrizarTrait;
use App\Traits\DireccionamientoAdmin\Programa\VistasTrait;
use App\Traits\DireccionamientoAdmin\ListadosTrait;
use App\Traits\DireccionamientoAdmin\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class ProgramaController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'direcprogrma';
        $this->opciones['routxxxx'] = 'direcprogrma';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(ProgramaRequest $request)   
     {

        return $this->setPrograma([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Servicio creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisServicio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]
        );
    }


    public function edit(SisServicio $modeloxx)
    {
        
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]
        );
    }


    public function update(ProgramaRequest $request,  SisServicio $modeloxx)
    {
        return $this->setPrograma([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Servicio editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisServicio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, SisServicio $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=FosSeguimiento::where('fos_stses_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        //ddd( $seguimix);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Servicio inactivado correctamente');
    }

    public function activate(SisServicio $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR PROGRAMA Y/O SERVICIO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->fos_tse]
        );

    }
    public function activar(Request $request, SisServicio $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=FosSeguimiento::where('fos_stses_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Servicio activado correctamente');
    }
}

<?php

namespace App\Http\Controllers\Fosadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosStseCrearRequest;
use App\Http\Requests\FichaObservacion\FosStseEditarRequest;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Traits\Fosadmin\Subtiposeg\CrudTrait;
use App\Traits\Fosadmin\Subtiposeg\DataTablesTrait;
use App\Traits\Fosadmin\Subtiposeg\ParametrizarTrait;
use App\Traits\Fosadmin\Subtiposeg\VistasTrait;
use App\Traits\Fosadmin\ListadosTrait;
use App\Traits\Fosadmin\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class FSTSeguimientoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'fosubtse';
        $this->opciones['routxxxx'] = 'fosubtse';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(FosTse $padrexxx)
    {
        $this->pestanix['fosubtse']=[true,$padrexxx];
        $this->opciones['ppadrexx']=$padrexxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create(FosTse $padrexxx)
    {
        $this->pestanix['fosubtse']=[true,$padrexxx];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [$padrexxx], 1, 'GUARDAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]
        );
    }
    public function store(FosStseCrearRequest $request,FosTse $padrexxx)
    {
        $request->request->add(['fos_tse_id'=>$padrexxx->id]);
        return $this->setFosSubTiposeg([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Sub tipo de seguimiento creados con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(FosStse $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->fos_tse]
        );
    }


    public function edit(FosStse $modeloxx)
    {
        $this->pestanix['fosubtse']=[true,$modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->fos_tse_id]], 2, 'VOLVER A SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->fos_tse_id]], 2, 'CREAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->fos_tse]
        );
    }


    public function update(FosStseEditarRequest $request,  FosStse $modeloxx)
    {
        $request->request->add(['fos_tse_id' => $modeloxx->id]);
        return $this->setFosSubTiposeg([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Sub tipo de seguimiento editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(FosStse $modeloxx)
    {
        $this->pestanix['fosubtse']=[true,$modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, FosStse $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Sub tipo de seguimiento inactivado correctamente');
    }

    public function activate(FosStse $modeloxx)
    {
        $this->pestanix['fosubtse']=[true,$modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->fos_tse]
        );

    }
    public function activar(Request $request, FosStse $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Sub tipo de seguimiento activado correctamente');
    }
}

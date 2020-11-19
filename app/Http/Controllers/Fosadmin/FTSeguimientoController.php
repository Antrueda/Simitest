<?php

namespace App\Http\Controllers\Fosadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosTseCrearRequest;
use App\Http\Requests\FichaObservacion\FosTseEditarRequest;
use App\Models\fichaobservacion\FosTse;
use App\Traits\Fosadmin\Tiposeguim\CrudTrait;
use App\Traits\Fosadmin\Tiposeguim\DataTablesTrait;
use App\Traits\Fosadmin\Tiposeguim\ParametrizarTrait;
use App\Traits\Fosadmin\Tiposeguim\VistasTrait;
use App\Traits\Fosadmin\ListadosTrait;
use App\Traits\Fosadmin\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class FTSeguimientoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'fostipse';
        $this->opciones['routxxxx'] = 'fostipse';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(FosTseCrearRequest $request)
    {

        return $this->setFostiposeguim([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tipo seguimiento creados con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(FosTse $modeloxx)
    {
        // $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        // $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj->id]], 2, 'VOLVER A DOCUMENTOS', 'btn btn-sm btn-primary']);
        // $this->getBotones(['editar', [], 1, 'EIDTAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj->id]], 2, 'CREAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_nnaj->id]
        );
    }


    public function edit(FosTse $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'VOLVER A TIPOS DE SEGUMIENTO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EIDTAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'CREAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function update(FosTseEditarRequest $request,  FosTse $modeloxx)
    {
        return $this->setFostiposeguim([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tipo de seguiminto editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(FosTse $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, FosTse $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Topo de segumiento inactivado correctamente');
    }

    public function activate(FosTse $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }
    public function activar(Request $request, FosTse $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Tipo de seguimiento activado correctamente');
    }
}

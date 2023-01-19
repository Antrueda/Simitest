<?php

namespace App\Http\Controllers\Acciones\Grupales\InscripcionSena\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\InscripcionFormacion\ProgramaAsignaCrearRequest;
use App\Http\Requests\MatriculaAdmin\GrupoAsignarCrearRequest;
use App\Http\Requests\MatriculaAdmin\GrupoAsignarEditarRequest;
use App\Http\Requests\MotivoEgreso\MotivoEgresuEditarRequest;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\InscripcionConvenios\ProgramaAsocia;
use App\Models\sistema\SisDepeServ;
use App\Traits\Acciones\Grupales\Sena\Administracion\ProgramaAsignar\CrudTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\ProgramaAsignar\DataTablesTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\ProgramaAsignar\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\ProgramaAsignar\VistasTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\ListadosTrait;
use App\Traits\Acciones\Grupales\Sena\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * FOS Tipo de seguimiento
 */
class ProgramaAsignarController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
 
    public function __construct()
    {
        $this->opciones['permisox'] = 'asignaprograma';
        $this->opciones['routxxxx'] = 'asignaprograma';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    
    public function index()
    {
      
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create(SisDepeServ $padrexxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [$padrexxx], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx' => $padrexxx]
        );
    }
    public function store(ProgramaAsignaCrearRequest $request)
    {
        return $this->setProgramaAsignar([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Se realizó la asignación ',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(ProgramaAsocia $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A ASIGNACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'ASIGNAR PROGRAMA', 'btn btn-sm btn-primary']);

        return $this->view(
            $do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }


    public function edit(ProgramaAsocia $modeloxx)
    {

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A ASIGNACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->id]], 2, 'ASIGNAR PROGRAMA', 'btn btn-sm btn-primary']);
        return $this->view($do, ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);

    }


    public function update(ProgramaAsignaCrearRequest $request,  ProgramaAsocia $modeloxx)
    {
        return $this->setProgramaAsignar([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Se actualizó la asignación',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(ProgramaAsocia $modeloxx)
    {

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, ProgramaAsocia $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Se desactivó la asignación correctamente');
    }

    public function activate(ProgramaAsocia $modeloxx)
    {

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }
    public function activar(Request $request, ProgramaAsocia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Sub tipo de seguimiento activado correctamente');
    }
}

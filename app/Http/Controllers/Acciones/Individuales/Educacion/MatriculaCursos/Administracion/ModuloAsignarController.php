<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosAsignarCrearRequest;
use App\Http\Requests\FichaObservacion\FosAsignarEditarRequest;
use App\Http\Requests\FichaObservacion\MotivoEgresosecuCrearRequest;
use App\Http\Requests\MotivoEgreso\MotivoEgresuCrearRequest;
use App\Http\Requests\MotivoEgreso\MotivoEgresuEditarRequest;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Traits\MotivoAdmin\MotivoAsignar\CrudTrait;
use App\Traits\MotivoAdmin\MotivoAsignar\DataTablesTrait;
use App\Traits\MotivoAdmin\MotivoAsignar\ParametrizarTrait;
use App\Traits\MotivoAdmin\MotivoAsignar\VistasTrait;
use App\Traits\MotivoAdmin\ListadosTrait;
use App\Traits\MotivoAdmin\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * FOS Tipo de seguimiento
 */
class MotivoAsignarController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'motivouni';
        $this->opciones['routxxxx'] = 'motivouni';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create(MotivoEgreso $padrexxx)
    {
        $this->pestanix['motivouni'] = [true, $padrexxx];
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [$padrexxx], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }
    public function store(MotivoEgresuCrearRequest $request)
    {
        return $this->setMotivoAsignar([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Se realizó la asignación ',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(MotivoEgreu $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A ASIGNACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']);

        return $this->view(
            $do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }


    public function edit(MotivoEgreu $modeloxx)
    {
        $this->pestanix['motivouni'] = [true, $modeloxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A ASIGNACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->id]], 2, 'NUEVA ASIGNACION', 'btn btn-sm btn-primary']);
        return $this->view($do, ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);

    }


    public function update(MotivoEgresuEditarRequest $request,  MotivoEgreu $modeloxx)
    {
        return $this->setMotivoAsignar([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Se actualizó la asignación',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(MotivoEgreu $modeloxx)
    {
        $this->pestanix['motivouni'] = [true, $modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, MotivoEgreu $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Se desactivó la asignación correctamente');
    }

    public function activate(MotivoEgreu $modeloxx)
    {
        $this->pestanix['fosasignar'] = [true, $modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR SUB TIPO DE SEGUIMIENTO', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }
    public function activar(Request $request, MotivoEgreu $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->fos_tse_id])
            ->with('info', 'Sub tipo de seguimiento activado correctamente');
    }
}

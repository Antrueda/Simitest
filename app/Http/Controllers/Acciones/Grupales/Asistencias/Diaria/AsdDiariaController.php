<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\Asistencias\Diaria\AsdDiariaCrearRequest;
use App\Http\Requests\Acciones\Grupales\Asistencias\Diaria\AsdDiariaEditarRequest;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Diaria\DiariaParametrizarTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Diaria\DiariaVistasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaCrudTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaAjaxTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsdDiariaController extends Controller
{
    use DiariaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DiariaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DiariaListadosTrait; // trait que arma las consultas para las datatables
    use DiariaCrudTrait; // trait donde se hace el crud de localidades
    use DiariaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use DiariaVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    use DiariaAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait;
    use ManageTimeTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'diariaxx';
        $this->opciones['tabsxxxx'] = 'tabsxxxx';
        $this->pestania[0][5] = 'active';
        $this->opciones['modalsxx'] = [];

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(AsdDiariaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsdDiaria([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Asistencia diaria creada con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(AsdDiaria $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AsdDiaria $modeloxx)
    {
        $this->getRespuesta(['btnxxxxx' => 'b']);
        // $this->getBotones(['editarxx', [], 1, 'EDITAR ASISTENCIA DIARIA', 'btn btn-sm btn-primary']);
        // $this->getBotones(['editarxx', [], 2, 'INGRESAR ASISTENTES', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AsdDiariaEditarRequest $request,  AsdDiaria $modeloxx)
    {
        return $this->setAsdDiaria([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asistencia diaria editada con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(AsdDiaria $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASISTENCIA DIARIA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AsdDiaria $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'ASISTENCIA DIARIA inactivada correctamente');
    }

    public function activate(AsdDiaria $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASISTENCIA DIARIA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }
    public function activar(Request $request, AsdDiaria $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'ASISTENCIA DIARIA activada correctamente');
    }
}

<?php

namespace App\Http\Controllers\AsisSema;

use App\Http\Controllers\Controller;
use App\Http\Requests\AsisSema\AsisSemaCrearRequest;
use App\Http\Requests\AsisSema\AsisSemaEditarRequest;
use App\Models\AsisSema\Asissema;
use App\Traits\AsisSema\AsisSema\AsisSemaParametrizarTrait;
use App\Traits\AsisSema\AsisSema\AsisSemaVistasTrait;
use App\Traits\AsisSema\AsisSemaAjaxTrait;
use App\Traits\AsisSema\AsisSemaCrudTrait;
use App\Traits\AsisSema\AsisSemaDataTablesTrait;
use App\Traits\AsisSema\AsisSemaListadosTrait;
use App\Traits\AsisSema\AsisSemaPestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsisSemaController extends Controller
{
    use AsisSemaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AsisSemaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AsisSemaListadosTrait; // trait que arma las consultas para las datatables
    use AsisSemaCrudTrait; // trait donde se hace el crud de localidades

    use AsisSemaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsisSemaVistasTrait; // trait que arma la logica para lo metodos: crud

    use CombosTrait;
    use AsisSemaAjaxTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'asissema';
        $this->opciones['routxxxx'] = 'asissema';
        $this->pestania[0][5]='active';
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
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(AsisSemaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Asistencia Semanal creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Asissema $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(Asissema $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AsisSemaEditarRequest $request,  Asissema $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asistencia Semanal editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Asissema $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Asissema $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asistencia Semanal inactivada correctamente');
    }

    public function activate(Asissema $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }

    public function activar(Request $request, Asissema $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asistencia Semanal activada correctamente');
    }

    public function setAsignar($padrexxx, Request $request)
    {
        $dataxxxx['mensajex'] = 'Primero guarde la asistencia para asignar el asistente.';
        $dataxxxx['mostrarx'] = false;
        $dataxxxx['createfi'] = false;
        if ($padrexxx) {
            // Todo: Poner la validacion de Matricula y dependencia
        }
        return response()->json($dataxxxx);
    }
}

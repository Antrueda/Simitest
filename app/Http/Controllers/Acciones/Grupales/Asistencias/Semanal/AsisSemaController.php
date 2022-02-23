<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Semanal;

use Illuminate\Http\Request;

use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Http\Requests\AsisSema\AsisSemaCrearRequest;
use App\Http\Requests\AsisSema\AsisSemaEditarRequest;
use App\Models\Acciones\Grupales\Asistencias\Semanal\Asissema;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\SemanalAjaxTrait;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\SemanalCrudTrait;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\SemanalListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\SemanalPestaniasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\SemanalDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\Semanal\SemanalVistasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Semanal\Semanal\SemanalParametrizarTrait;



class AsisSemaController extends Controller
{
    use SemanalParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use SemanalPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use SemanalListadosTrait; // trait que arma las consultas para las datatables
    use SemanalCrudTrait; // trait donde se hace el crud de localidades
    use SemanalAjaxTrait;
    use SemanalDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use SemanalVistasTrait; // trait que arma la logica para lo metodos: crud

    use CombosTrait;
    use ManageTimeTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'asissema';
        $this->opciones['routxxxx'] = 'asissema';
        $this->pestania[0][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function asistencias(Asissema $modeloxx)
    {
        $this->pestania[0][5]='';
        $this->pestania[2][5]='';
        $this->pestania[1][5]='active';
        return $this->viewasistencias(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'indexasistencias']]);
    }

    public function verasistencias(Asissema $modeloxx)
    {
        $this->pestania[0][5]='';
        $this->pestania[2][5]='active';
        $this->pestania[1][5]='';
        return $this->viewasistencias(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verplanilla']]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(AsisSemaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsisSema([
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'editar'],]);
    }


    public function update(AsisSemaEditarRequest $request,  Asissema $modeloxx)
    {
        return $this->setAsisSema([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asistencia Semanal editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Asissema $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
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

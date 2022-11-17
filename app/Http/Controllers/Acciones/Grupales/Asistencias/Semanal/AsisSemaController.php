<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Semanal;

use App\Models\User;

use App\Models\Parametro;
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
use App\Models\Acciones\Grupales\Asistencias\Semanal\AsissemaMatricula;
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
        $this->opciones['sis_depens'] = User::getUpiUsuario(true, false);
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function asistencias(Request $request, Asissema $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->prm_fecha_inicio,
            'upixxxxx' => $modeloxx->sis_depen_id,
            'formular' => 3,
        ]);
        if ($puedexxx['tienperm']) {
            if ($modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1 || $this->isResponsableThisUpi($modeloxx)) {
                $this->pestania[0][5] = '';
                $this->pestania[2][5] = '';
                $this->pestania[1][5] = 'active';
                return $this->viewasistencias(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'indexasistencias'], 'request' => $request]);
            } else {
                return redirect()
                    ->route($this->opciones['routxxxx'] . '.verxxxxx', $modeloxx->id)
                    ->with('error', 'No tiene permiso para tomar asistencia.');
            }
        } else {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.verxxxxx', $modeloxx->id)
                ->with('error', $puedexxx['msnxxxxx']);
        }
    }

    public function verasistencias(Request $request, Asissema $modeloxx)
    {
        $this->pestania[0][5] = '';
        $this->pestania[2][5] = 'active';
        $this->pestania[1][5] = '';
        return $this->viewasistencias(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verplanilla'], 'request' => $request]);
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
        //validamos que pueda editar por usuario de creacion o responsable de upi o superadmin
        if ($modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1 || $this->isResponsableThisUpi($modeloxx)) {
            $this->opciones['puedeeditar'] = (AsissemaMatricula::where('asissema_id', $modeloxx->id)->count() == 0) ? true : false;
            $this->getBotones(['editarxx', [], 1, 'EDITAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'editar'],]);
        } else {
            return redirect()
                ->route($this->opciones['routxxxx'])
                ->with('error', 'Permiso denegado para editar esta Asistencia');
        }
    }

    public function update(AsisSemaEditarRequest $request,  Asissema $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->prm_fecha_inicio,
            'upixxxxx' => $modeloxx->sis_depen_id,
            'formular' => 3,
        ]);
        if ($puedexxx['tienperm']) {
            return $this->setAsisSema([
                'requestx' => $request,
                'modeloxx' => $modeloxx,
                'infoxxxx' => 'Asistencia Semanal editada con éxito',
                'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
            ]);
        } else {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                ->with('error', $puedexxx['msnxxxxx']);
        }
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

    //validamos si el usuario login es responsable de upi actual
    public function isResponsableThisUpi($modeloxx)
    {
        $es_responsable = false;
        foreach ($modeloxx->upi->getDepeResponsUsua as $key => $responsable) {
            $responsable = ($responsable->user_id == Auth::user()->id) ? true : false;
        }
        return $es_responsable;
    }

    //transitoria mientras se actualizan planillas ya creadas en produccion
    public function  actualizarDias(Asissema $modeloxx)
    {

        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->prm_fecha_inicio,
            'upixxxxx' => $modeloxx->sis_depen_id,
            'formular' => 3,
        ]);
        if ($puedexxx['tienperm']) {
            if ($modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1 || $this->isResponsableThisUpi($modeloxx)) {
                $diasGrupo = Parametro::select(['parametros.id as prm_dia_id'])->join('grupo_dias', 'parametros.id', '=', 'grupo_dias.prm_dia_id')->where('grupo_dias.grupo_id', $modeloxx->prm_grupo_id)->get()->toArray();

                $modeloxx->diasGrupo()->sync($diasGrupo);

                return redirect()
                    ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                    ->with('info', 'Actualizada con exito');
            } else {
                return redirect()
                    ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                    ->with('error', 'No tiene permiso.');
            }
        } else {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                ->with('error', $puedexxx['msnxxxxx']);
        }
    }
}

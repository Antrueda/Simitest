<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Models\User;
use App\Traits\BotonesTrait;
use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaAjaxTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaCrudTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaPestaniasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Diaria\DiariaVistasTrait;
use App\Http\Requests\Acciones\Grupales\Asistencias\Diaria\AsdDiariaCrearRequest;
use App\Http\Requests\Acciones\Grupales\Asistencias\Diaria\AsdDiariaEditarRequest;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Diaria\DiariaParametrizarTrait;
use App\Traits\Combos\PlanillaDiariaComboTrait;

class AsdDiariaController extends Controller
{
    use PlanillaDiariaComboTrait;
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
        $this->opciones['sis_depens'] = User::getUpiUsuario(true, false);
        $this->getPestanias([]);
        $this->getTablas();

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    // Tomado de Asistencia Semanal 
    public function asistencias(AsdDiaria $modeloxx)
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
                //    return $this->viewasistencias(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'indexasistencias']]);
            } else {
                return redirect()
                    ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                    ->with('error', 'No tiene permiso para tomar asistencia.');
            }
        } else {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                ->with('error', $puedexxx['msnxxxxx']);
        }
    }

    public function create(AsdDiaria $modeloxx)
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
        if ($modeloxx->asdSisNnajs()->count() == 0) {
            return redirect()
                ->route('nnajasdi', [$modeloxx])
                ->with('info', "Por favor agrege NNAJ");
        }

        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'AGREGAR NNAJ', 'routexxx' => 'nnajasdi', 'parametr' => [$modeloxx->id]]);


        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AsdDiariaEditarRequest $request,  AsdDiaria $modeloxx)
    {
        // agrego para que se pueda modificar 
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->prm_fecha_inicio,
            'upixxxxx' => $modeloxx->sis_depen_id,
            'formular' => 3,
        ]);
        if ($puedexxx['tienperm']) {

            return $this->setAsdDiaria([
                'requestx' => $request,
                'modeloxx' => $modeloxx,
                'infoxxxx' => 'Asistencia diaria editada con éxito',
                'routxxxx' => $this->opciones['permisox'] . '.editarxx'
            ]);
        } else {
            return redirect()
                ->route($this->opciones['routxxxx'] . '.editarxx', $modeloxx->id)
                ->with('error', $puedexxx['msnxxxxx']);
        }
    }

    public function inactivate(AsdDiaria $modeloxx)
    {
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR ASISTENCIA DIARIA']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'],]);
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
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR ASISTENCIA DIARIA']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }
    public function activar(Request $request, AsdDiaria $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'ASISTENCIA DIARIA activada correctamente');
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
}

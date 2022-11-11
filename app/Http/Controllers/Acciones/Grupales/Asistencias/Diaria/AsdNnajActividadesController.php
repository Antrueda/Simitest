<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Traits\BotonesTrait;
use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Traits\Combos\PlanillaDiariaComboTrait;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaAjaxTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaCrudTrait;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdNnajActividades;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaPestaniasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\NnajActividades\NnajactividadVistasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\NnajActividades\NnajactividadParametrizarTrait;

class AsdNnajActividadesController extends Controller
{
    use PlanillaDiariaComboTrait;
    use NnajactividadParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use NnajactividadVistasTrait; // trait que arma la logica para lo metodos: crud
    use DiariaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DiariaListadosTrait; // trait que arma las consultas para las datatables
    use DiariaCrudTrait; // trait donde se hace el crud de localidades
    use DiariaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use CombosTrait;
    use DiariaAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait;
    use ManageTimeTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'nnajacti';
        $this->opciones['routxxxx'] = 'nnajacti';

        $this->opciones['tabsxxxx'] = 'tabsxxxx';
        $this->pestania[1][5] = '';
        $this->pestania[1][4] = true;
        $this->pestania[2][5] = 'active';
        $this->pestania[2][4] = true;
        $this->opciones['modalsxx'] = [];
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function create(AsdSisNnaj $padrexxx)
    {

        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A BENEFICIARIO', 'routexxx' => 'nnajasdi', 'parametr' => $padrexxx->asd_diaria_id]);
        $this->getRespuesta(['btnxxxxx' => 'b']);
        $this->getAsdNnajActividades(['parametr' => $padrexxx->id]); // agrego la table de de nnajs ingresados 

        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx->id]);
    }

    public function store(Request $request, AsdSisNnaj $padrexxx)
    {
        $asdiaria = $padrexxx->asdDiaria;

        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 2, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $asdiaria->fechdili,
            'upixxxxx' => $asdiaria->sis_depen_id,
            'formular' => 3,
        ]);
        if ($puedexxx['tienperm']) {

            $request->request->add(['asd_sis_nnajs_id' => $padrexxx->id, 'sis_esta_id' => 1]);

            return $this->setAsdAcividadNnaj([
                'requestx' => $request,
                'modeloxx' => '',
                'infoxxxx' => 'Actividad asignada con éxito',
                'routxxxx' => $this->opciones['permisox'] . '.editarxx'

            ]);
        } else {
            return redirect()
                ->back()
                ->with('error', $puedexxx['msnxxxxx']);
        }
    }

    public function edit(AsdNnajActividades $modeloxx)
    {

        $this->opciones['nnajxxxx'] = $modeloxx->sisNnaj;
        $asd_sis_nnajs_id = AsdSisNnaj::findOrFail($modeloxx->asd_sis_nnajs_id)->asd_diaria_id;
        $this->getRespuesta(['btnxxxxx' => 'b']);

        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A BENEFICIARIO', 'routexxx' => 'nnajasdi', 'parametr' => [$asd_sis_nnajs_id]]);
        return $this->viewver(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario_editar'], 'padrexxx' => $modeloxx->asd_sis_nnajs_id]);
    }


    public function update(Request $request,  AsdNnajActividades $modeloxx)
    {
        return $this->setAsdSisNnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actividad actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }
    public function show(AsdNnajActividades $modeloxx)
    {
        $this->opciones['nnajxxxx'] = $modeloxx->sisNnaj;

        return $this->viewver(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario_editar'], 'padrexxx' => $modeloxx->asd_sis_nnajs_id]);
    }


    public function inactivate(AsdNnajActividades $modeloxx)
    {
        $this->opciones['nnajxxxx'] = $modeloxx->sisNnaj;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR ACTIVIDAD NNAJ']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['borrarxx', 'destroyx'], 'padrexxx' => $modeloxx->asd_sis_nnajs_id]);
    }

    public function destroy(AsdNnajActividades $modeloxx)
    {

        $modeloxx->delete();
        return back()->with('info', 'Actividad Eliminiada exitosamente');
    }

    public function activar(Request $request, AsdNnajActividades $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->asd_diaria_id])
            ->with('info', 'ASISTENCIA DIARIA');
    }
}

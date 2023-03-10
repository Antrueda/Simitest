<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Traits\BotonesTrait;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaAjaxTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaCrudTrait;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdNnajActividades;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaPestaniasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Nnajasdi\NnajasdiVistasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Nnajasdi\NnajasdiParametrizarTrait;

class AsdSisNnajController extends Controller
{
    use NnajasdiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DiariaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DiariaListadosTrait; // trait que arma las consultas para las datatables
    use DiariaCrudTrait; // trait donde se hace el crud de localidades
    use DiariaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use NnajasdiVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    use DiariaAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait;
    use ManageTimeTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'nnajasdi';
        $this->opciones['tabsxxxx'] = 'tabsxxxx';
        $this->pestania[1][5] = 'active';
        $this->pestania[1][4] = true;
        $this->opciones['modalsxx'] = [];
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index($padrexxx)
    {
        $this->pestania[1][2] = $this->opciones['parametr'] = [$padrexxx];
        $this->getPestanias([]);
        $this->getAsdSisNnaj(['parametr' => [$padrexxx]]);
        $this->opciones['modeloxx'] = $padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASISTENCIA DIARIA', 'routexxx' => 'diariaxx.editarxx', 'parametr' => [$padrexxx]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create($padrexxx, SisNnaj $nnajxxxx)
    {
        $this->opciones['nnajxxxx'] = $nnajxxxx;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    public function store(Request $request, $padrexxx)
    {
        $request->request->add(['asd_diaria_id' => $padrexxx, 'sis_nnaj_id' => $request->sisnnajx, 'sis_esta_id' => 1]);
        return $this->setCreaeAsdSisNnaj([
            'requestx' => $request,
            'modeloxx' => '',
        ]);
    }

    public function show($padrexxx)
    {

        $this->pestania[1][2] = false;
        $this->opciones['parametr'] = [$padrexxx];
        $this->getPestanias([]);
        $this->getAsdSisNnajver(['parametr' => [$padrexxx]]);
        $this->opciones['modeloxx'] = $padrexxx;
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A LISTA DE ASISTENCIA DIARIA', 'routexxx' => 'diariaxx']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function edit(AsdSisNnaj $modeloxx)
    {
        $this->opciones['nnajxxxx'] = $modeloxx->sisNnaj;
        $this->getRespuesta(['btnxxxxx' => 'b']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->asd_diaria_id]);
    }


    public function update(Request $request,  AsdSisNnaj $modeloxx)
    {
        return $this->setAsdSisNnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'NNAJ actualizado con éxito',
            'routxxxx' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }
    public function destroy(AsdSisNnaj $modeloxx)
    {

        $count = AsdNnajActividades::where('asd_sis_nnajs_id', '=', $modeloxx->id)
            // ->whereNull('deleted_at')
            //->update(['deleted_at' => now()])
            ->get();

        // Si es mayor a cero, quiere decir que existen registros en la tabla hija, por lo tanto se puede enviar 
        // un mensaje error
        if (count($count) > 0) {

            return back()->with('error', 'No sepuede eliminar NNAJ ya que ha existido un registro');
        }  // Que sea cero , si se puede eliminar
        else {

            $modeloxx->delete();
            return back()->with('info', 'NNAJ eliminado NNAJ Exitosamente');
        }
    }

    public function activar(Request $request, AsdSisNnaj $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->asd_diaria_id])
            ->with('info', 'ASISTENCIA DIARIA');
    }
}

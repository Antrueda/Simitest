<?php

namespace App\Http\Controllers\Indicadores\Admin;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Admin\InAreaindi;
use App\Models\Indicadores\Admin\InIndiliba;
use App\Traits\Indicadores\Admin\Indiliba\IndilibaVistasTrait;
use App\Traits\Indicadores\IndimoduCrudTrait;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * realizar la unión del área con sus indicadores
 */
class InIndilibaController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndilibaVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['vistaxxx'] = 'indiadmi';
        $this->opciones['routxxxx'] = 'indiliba';
        $this->pestania[0]['activexx'] = 'active';
        $this->pestania[0]['pesthija'][1]['muespest'] = true;
        $this->pestania[0]['pesthija'][2]['muespest'] = true;
        $this->pestania[0]['pesthija'][2]['activexx'] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(InAreaindi $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->pestania[0]['pesthija'][1]['parametr'] = [$padrexxx->area_id];
        $this->pestania[0]['pesthija'][2]['parametr'] = [$padrexxx->id];
        $this->getPestanias([]);
        $this->getIndilibaIndex(['paralist' => [$padrexxx->id]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function store(Request $request, $padrexxx)
    {
        $request->request->add(['in_areaindi_id' => $padrexxx, 'in_linea_base_id' => $request->valuexxx]);
        $this->setInIndilibaAjax([
            'requestx' => $request,
            'modeloxx' => '',
        ]);
        return response()->json('');
    }


    public function show(InIndiliba $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->in_areaindi_id;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['leerxxxx', 'leerxxxx']]);
    }

    public function inactivate(InIndiliba $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->in_areaindi_id;
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR LINEA BASE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }

    public function destroy(InIndiliba $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['routxxxx'], [$modeloxx->in_areaindi_id])
            ->with('info', 'Línea base inactivada correctamente');
    }

    public function activate(InIndiliba $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->in_areaindi_id;
        $this->getBotones(['activarx', [], 1, 'ACTIVAR LINEA BASE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }
    public function activar(InIndiliba $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['routxxxx'], [$modeloxx->in_areaindi_id])
            ->with('info', 'Línea base activada correctamente');
    }
}

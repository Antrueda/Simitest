<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Administ\InAreaindi;
use App\Models\Indicadores\Area;
use App\Traits\Indicadores\Administ\Areaindi\AreaindiVistasTrait;
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
class InAreaindiController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AreaindiVistasTrait; // trait que arma la logica para lo metodos: crud
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'grupregu',
        'modeloxx' => null,
        'vistaxxx' => null,
        'botoform' => [],
    ];

    private $dataxxxx = [];
    private $requestx = null;
    private $padrexxx = null;
    private $infoxxxx = 'Asignatura crada con éxito';
    private $redirect = '';
    public function __construct()
    {
        $this->opciones['permisox'] = 'areaindi';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(Area $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getPestanias(['tipoxxxx'=>1]);
        $this->getAreaindiIndex(['paralist' => $this->opciones['parametr']]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function store(Request $request, $padrexxx)
    {
        $request->request->add(['area_id' => $padrexxx, 'in_indicador_id' => $request->valuexxx]);
        $this->setInAreaindiAjax([
            'requestx' => $request,
            'modeloxx' => '',
        ]);
        return response()->json('');
    }


    public function show(InAreaindi $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->area_id;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['leerxxxx', 'leerxxxx']]);
    }

    public function inactivate(InAreaindi $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->area_id;
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR INDICADOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(InAreaindi $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Indicador inactivado correctamente');
    }

    public function activate(InAreaindi $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->area_id;
        $this->getBotones(['activarx', [], 1, 'ACTIVAR INIDICADOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }
    public function activar(InAreaindi $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Indicador activado correctamente');
    }
}

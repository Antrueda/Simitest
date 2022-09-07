<?php

namespace App\Http\Controllers\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPuntaje;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastCrudTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastListadosTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastPestaniasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\DastResultadoCrearRequest;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiResultados\DastResultVistasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiResultados\DastResultParametrizarTrait;

class DastResultadosController extends Controller
{
    use DastResultVistasTrait;
    use DastResultParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiDastDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiDastListadosTrait; // trait que arma las consultas para las datatables
    use AdmiDastPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiDastCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'adastres';
        $this->opciones['routxxxx'] = 'adastres';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablaResultados();
        return view($this->opciones['rutacarp'] . 'AdmiCuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR RESULTADO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(DastResultadoCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setResultado([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Resultado creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(DastPuntaje $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(DastPuntaje $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR RESULTADO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(DastResultadoCrearRequest $request, DastPuntaje $modeloxx)
    {
        return $this->setResultado([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Resultado editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(DastPuntaje $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR RESULTADO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }

    public function destroy(Request $request, DastPuntaje $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Resultado inactivada correctamente');
    }

    public function activate(DastPuntaje $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR RESULTADO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, DastPuntaje $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Resultado activada correctamente');
    }
}

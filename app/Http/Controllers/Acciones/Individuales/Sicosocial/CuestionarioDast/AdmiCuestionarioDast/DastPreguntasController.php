<?php

namespace App\Http\Controllers\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPregunta;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastCrudTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastListadosTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastPestaniasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\DastPreguntaEditRequest;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\DastPreguntaCrearRequest;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiPreguntas\AdmiPreguntasVistasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiPreguntas\AdmiPreguntasParametrizarTrait;

class DastPreguntasController extends Controller
{
    use AdmiPreguntasParametrizarTrait;
    use AdmiPreguntasVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiDastDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiDastListadosTrait; // trait que arma las consultas para las datatables
    use AdmiDastPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiDastCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'adastpre';
        $this->opciones['routxxxx'] = 'adastpre';
        $this->pestania[2][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablaPreguntas();
        return view($this->opciones['rutacarp'] . 'AdmiCuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR PREGUNTA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario']]);
    }

    public function store(DastPreguntaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setDastPreguntas([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Pregunta creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(DastPregunta $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(DastPregunta $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR PREGUNTA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario']]);
    }

    public function update(DastPreguntaEditRequest $request,  DastPregunta $modeloxx)
    {
        return $this->setDastPreguntas([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Pregunta editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(DastPregunta $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR PREGUNTA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, DastPregunta $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'])
            ->with('info', 'Pregunta inactivada correctamente');
    }

    public function activate(DastPregunta $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR PREGUNTA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, DastPregunta $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'])
            ->with('info', 'Pregunta activada correctamente');
    }
}

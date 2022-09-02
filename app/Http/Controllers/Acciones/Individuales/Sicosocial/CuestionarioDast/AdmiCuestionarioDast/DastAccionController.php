<?php

namespace App\Http\Controllers\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastAccione;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastCrudTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastListadosTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastPestaniasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiDastDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\DastAccionEditRequest;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\DastAccionCrearRequest;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiAcciones\AdmiAccionesVistasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiAcciones\AdmiAccionesParametrizarTrait;


class DastAccionController extends Controller
{
    use AdmiAccionesParametrizarTrait;
    use AdmiAccionesVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiDastDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiDastListadosTrait; // trait que arma las consultas para las datatables
    use AdmiDastPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiDastCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'adastacc';
        $this->opciones['routxxxx'] = 'adastacc';
        $this->pestania[1][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablaAcciones();
        return view($this->opciones['rutacarp'] . 'AdmiCuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACCIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario']]);
    }


    public function store(DastAccionCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setDastAcciones([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Acción creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(DastAccione $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(DastAccione $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACCIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario']]);
    }


    public function update(DastAccionEditRequest $request,  DastAccione $modeloxx)
    {
        return $this->setDastAcciones([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acción editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(DastAccione $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACCIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }


    public function destroy(Request $request, DastAccione $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'])
            ->with('info', 'Acción inactivada correctamente');
    }

    public function activate(DastAccione $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACCIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }
    public function activar(Request $request, DastAccione $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'])
            ->with('info', 'Acción activada correctamente');
    }
}

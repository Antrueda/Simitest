<?php

namespace App\Http\Controllers\Acciones\Grupales\GestMatrAcademia;

use Illuminate\Http\Request;
use App\Models\Ejemplo\AeEncuentro;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ejemplo\AeEncuentroCrearRequest;
use App\Http\Requests\Ejemplo\AeEncuentroEditarRequest;
use App\Traits\Acciones\Grupales\GestMatrAcademica\AjaxTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\CrudTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\ListadosTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\PestaniasTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\DataTablesTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica\VistasTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica\ParametrizarTrait;

class GestMatrAcademiaController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use AjaxTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'gestmaca';
        $this->opciones['routxxxx'] = 'gestmaca';
        $this->pestania[0][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        $this->opciones['ruarchjs'][] = 
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create($modeloxx)
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR GESTIÓN MATRICULA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $modeloxx]);
    }
    public function store(AeEncuentroCrearRequest $request,$modeloxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Acta de encuentro creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AeEncuentro $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AeEncuentro $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AeEncuentroEditarRequest $request,  AeEncuentro $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AeEncuentro $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AeEncuentro $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}

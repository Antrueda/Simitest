<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeRecursoAdminCrearRequest;
use App\Http\Requests\Actaencu\AeRecursoAdminEditarRequest;
use App\Http\Requests\Actaencu\AeRecursoAdminRequest;
use App\Models\Actaencu\AeRecuadmi;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Recuadmi\RecuadmiParametrizarTrait;
use App\Traits\Actaencu\Recuadmi\RecuadmiVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Support\Facades\Auth;

class AeRecursoAdminController extends Controller
{
    use RecuadmiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait; // trait que administra los combos
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use RecuadmiVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'aerecadm';
        $this->pestania[4][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {

        $this->getPestanias([]);
        $this->getTablasRecursosAdmin([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones]);
    }

    public function store(AeRecursoAdminCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeRecuadmi([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Recurso creado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(AeRecuadmi $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function edit(AeRecuadmi $modeloxx)
    {
        $this->estadoid = $modeloxx->sis_esta_id;
        $this->getBotones(['editarxx', [], 1, 'GUARDAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function update(AeRecursoAdminEditarRequest $request,  AeRecuadmi $modeloxx)
    {
        return $this->setAeRecuadmi([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Recurso editado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(AeRecuadmi $modeloxx)
    {
        $this->estadoid = 2;
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function destroy(AeRecursoAdminRequest $request, AeRecuadmi $modeloxx)
    {
        $dataxxxx=$request->all();
        $dataxxxx['user_edita_id']=Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeRecuadmi $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR RECURSO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->actasEncuentro]);
    }

    public function activar(AeRecursoAdminRequest $request, AeRecuadmi $modeloxx)
    {
        $dataxxxx=$request->all();
        $dataxxxx['user_edita_id']=Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}

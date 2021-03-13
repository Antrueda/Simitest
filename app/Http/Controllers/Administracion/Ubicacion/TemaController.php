<?php

namespace App\Http\Controllers\Administracion\Temas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Temas\TemaCrearRequest;
use App\Http\Requests\Administracion\Temas\TemaEditarRequest;
use App\Models\Tema;
use App\Traits\Administracion\Temas\Tema\CrudTrait;
use App\Traits\Administracion\Temas\Tema\DataTablesTrait;
use App\Traits\Administracion\Temas\Tema\ParametrizarTrait;
use App\Traits\Administracion\Temas\Tema\VistasTrait;
use App\Traits\Administracion\Temas\ListadosTrait;
use App\Traits\Administracion\Temas\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemaController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'temaxxxx';
        $this->opciones['routxxxx'] = 'temaxxxx';
        $this->pestania[0][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crear', [], 1, 'GUARDAR TEMA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],]);
    }
    public function store(TemaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setTema([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tema creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Tema $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(Tema $modeloxx)
    {

        $this->getBotones(['editar', [], 1, 'EDITAR TEMA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]);
    }


    public function update(TemaEditarRequest $request,  Tema $modeloxx)
    {
        return $this->setTema([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tema editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Tema $modeloxx)
    {
        $this->getBotones(['borrar', [], 1, 'INACTIVAR TEMA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Tema $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tema inactivado correctamente');
    }

    public function activate(Tema $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR TEMA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);

    }
    public function activar(Request $request, Tema $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tema activado correctamente');
    }
}

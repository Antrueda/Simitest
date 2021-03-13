<?php

namespace App\Http\Controllers\Administracion\Temas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Temas\ParametroCrearRequest;
use App\Http\Requests\Administracion\Temas\ParametroEditarRequest;
use App\Models\Parametro;
use App\Traits\Administracion\Temas\Parametr\CrudTrait;
use App\Traits\Administracion\Temas\Parametr\DataTablesTrait;
use App\Traits\Administracion\Temas\Parametr\ParametrizarTrait;
use App\Traits\Administracion\Temas\Parametr\VistasTrait;
use App\Traits\Administracion\Temas\ListadosTrait;
use App\Traits\Administracion\Temas\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParametroController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'parametr';
        $this->opciones['routxxxx'] = 'parametr';
        $this->pestania[2][5]='active';
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
        $this->getBotones(['crear', [], 1, "GUARDAR PAR{$this->opciones['vocalesx'][0]}METRO", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],]);
    }
    public function store(ParametroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setParametro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Parámetro creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Parametro $modeloxx)
    {
        $this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, "NUEVO PAR{$this->opciones['vocalesx'][0]}METRO", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(Parametro $modeloxx)
    {
        $this->getBotones(['editar', [], 1, "EDITAR PAR{$this->opciones['vocalesx'][0]}METRO", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]);
    }


    public function update(ParametroEditarRequest $request,  Parametro $modeloxx)
    {
        return $this->setParametro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Parámetro editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Parametro $modeloxx)
    {
        $this->getBotones(['borrar', [], 1, "INACTIVAR PAR{$this->opciones['vocalesx'][0]}METRO", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Parametro $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Parámetro inactivado correctamente');
    }

    public function activate(Parametro $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, "ACTIVAR PAR{$this->opciones['vocalesx'][0]}METRO", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);

    }
    public function activar(Request $request, Parametro $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Parámetro activado correctamente');
    }
}

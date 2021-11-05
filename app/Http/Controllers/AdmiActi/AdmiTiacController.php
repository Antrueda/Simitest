<?php

namespace App\Http\Controllers\AdmiActi;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdmiActi\AdmiTiacCrearRequest;
use App\Http\Requests\AdmiActi\AdmiTiacEditarRequest;
use App\Models\AdmiActi\TiposActividad;
use App\Traits\AdmiActi\AdmiTiac\AdmiTiacParametrizarTrait;
use App\Traits\AdmiActi\AdmiTiac\AdmiTiacVistasTrait;
use App\Traits\AdmiActi\AdmiActiCrudTrait;
use App\Traits\AdmiActi\AdmiActiDataTablesTrait;
use App\Traits\AdmiActi\AdmiActiListadosTrait;
use App\Traits\AdmiActi\AdmiActiPestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmiTiacController extends Controller
{
    use AdmiActiCrudTrait; // trait donde se hace el crud de localidades
    use AdmiActiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiActiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiActiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica

    use AdmiTiacParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiTiacVistasTrait; // trait que arma la logica para lo metodos: crud

    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'admitiac';
        $this->opciones['routxxxx'] = 'admitiac';
        $this->pestania[0][5] = 'active';
        $this->pestania[1][4] = TiposActividad::all()->count() ? true : false;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablasTiposActividad();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(AdmiTiacCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setTiposActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tipo de actividad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(TiposActividad $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(TiposActividad $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AdmiTiacEditarRequest $request,  TiposActividad $modeloxx)
    {
        return $this->setTiposActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tipo de actividad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(TiposActividad $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, TiposActividad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de actividad inactivada correctamente');
    }

    public function activate(TiposActividad $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, TiposActividad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de actividad activada correctamente');
    }
}

<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeEncuentroCrearRequest;
use App\Http\Requests\Actaencu\AeEncuentroEditarRequest;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Roleext;
use App\Traits\Actaencu\Actaencu\ActaencuParametrizarTrait;
use App\Traits\actaencu\actaencu\ActaencuVistasTrait;
use App\Traits\Actaencu\ActaencuAjaxTrait;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AeEncuentroController extends Controller
{
    use ActaencuParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use ActaencuVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    use ManageTimeTrait;
    use ActaencuAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones

    public function __construct()
    {
        $this->opciones['permisox'] = 'actaencu';
        $this->pestania[0][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['actualxx'] = explode('-', Carbon::now()->toDateString());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    { 
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones]);
    }

    public function store(AeEncuentroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);

        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Acta de encuentro creada con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(AeEncuentro $modeloxx)
    {
        $this->opciones['botonpai'] = 'botonpai';
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verxxxxx'], 'botonapi' => 'botonver']);
    }


    public function edit(AeEncuentro $modeloxx)
    {
        $respuest = $this->getPuedeCargar([
            
            'estoyenx' => 2,
            'upixxxxx' => $modeloxx->sis_depen_id,
            'fechregi' => explode(' ', $modeloxx->fechdili)[0]
        ]);

        $rolexxxx=Roleext::find(1);
        $user=Auth::user();
        $administ =$user->hasRole([$rolexxxx->name]);

        if (!$respuest['tienperm'] && !$administ) {
            return redirect()
                ->route($this->opciones['permisox'] . '.verxxxxx', [$modeloxx->id]);
        }
        $dataxxxx = ['editarxx', 'verxxxxx'];
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        if (Auth::id() == $modeloxx->user_crea_id) {
            $dataxxxx = ['editarxx', 'formulario'];
            $this->getBotones(['editarxx', [], 1, 'GUARDAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>  $dataxxxx, 'todoxxxx' => $this->opciones, 'vercrear' => true]);
    }


    public function update(AeEncuentroEditarRequest $request,  AeEncuentro $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
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
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
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

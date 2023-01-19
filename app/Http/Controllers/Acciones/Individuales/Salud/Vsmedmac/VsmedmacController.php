<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Vsmedmac;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeEncuentroCrearRequest;
use App\Http\Requests\Actaencu\AeEncuentroEditarRequest;
use App\Models\Acciones\Individuales\Salud\Vsmedmac\Vsmedmac;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Roleext;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacAjaxTrait;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Vsmedmac\VsmedmacVistasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VsmedmacController extends Controller
{
    private $sinnajid;
    use VsmedmacParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VsmedmacPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use VsmedmacListadosTrait; // trait que arma las consultas para las datatables
    use VsmedmacCrudTrait; // trait donde se hace el crud de localidades
    use VsmedmacDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VsmedmacVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    use ManageTimeTrait;
    use VsmedmacAjaxTrait; // administrar los combos utilizados en las vistas
    use BotonesTrait; // traita arma los botones

    public function __construct()
    {
        $this->opciones['permisox'] = 'vsmedmac';
        $this->pestania[0][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['actualxx'] = explode('-', Carbon::now()->toDateString());
    }

    public function index(SisNnaj $sinnajid)
    {
        $this->opciones['usuariox']=$sinnajid->fiDatosBasico;
        $this->sinnajid=$sinnajid;
        $this->pestania[0][2] = [$this->sinnajid->id];
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisNnaj $sinnajid)
    {
        $this->opciones['usuariox']=$sinnajid->fiDatosBasico;
        $this->sinnajid=$sinnajid;
        $this->opciones['parametr'] = [$this->sinnajid->id];
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], [$this->sinnajid->id]], 2, 'VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones]);
    }

    public function store(AeEncuentroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);

        return $this->setVsmedmac([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Valoración mac creada con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }


    public function show(Vsmedmac $modeloxx)
    {
        $this->sinnajid=$modeloxx->sisNnnaj;
        $this->opciones['usuariox']=$this->sinnajid->fiDatosBasico;
        
        $this->opciones['botonpai'] = 'botonpai';
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'verxxxxx'], 'botonapi' => 'botonver']);
    }


    public function edit(Vsmedmac $modeloxx)
    {
        $this->sinnajid=$modeloxx->sisNnnaj;
        $this->opciones['usuariox']=$this->sinnajid->fiDatosBasico;
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
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        if (Auth::id() == $modeloxx->user_crea_id) {
            $dataxxxx = ['editarxx', 'formulario'];
            $this->getBotones(['editarxx', [], 1, 'GUARDAR VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        }

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>  $dataxxxx, 'todoxxxx' => $this->opciones, 'vercrear' => true]);
    }


    public function update(AeEncuentroEditarRequest $request,  Vsmedmac $modeloxx)
    {
        
        return $this->setVsmedmac([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Valoración mac editada con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(Vsmedmac $modeloxx)
    {
        $this->sinnajid=$modeloxx->sisNnnaj;
        $this->opciones['usuariox']=$this->sinnajid->fiDatosBasico;
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Vsmedmac $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Valoración mac inactivada correctamente');
    }

    public function activate(Vsmedmac $modeloxx)
    {
        $this->sinnajid=$modeloxx->sisNnnaj;
        $this->opciones['usuariox']=$this->sinnajid->fiDatosBasico;
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        $this->getBotones(['activarx', [], 1, 'ACTIVAR VALORACIÓN Y SEGUIMIENTO MAC-RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, Vsmedmac $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Valoración mac activada correctamente');
    }
}

<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Vnutricional;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Salud\Vnutricional\Vnutricion;

use App\Http\Requests\Acciones\Individuales\Salud\Vnutricional\VnutricionalCrearRequest;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalVistasTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalParametrizarTrait;

class VnutricionalController extends Controller
{
    use VnutricionalParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VnutricionalPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VnutricionalListadosTrait; // trait que arma las consultas para las datatables
    use VnutricionalCrudTrait; // trait donde se hace el crud de localidades
    use VnutricionalDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VnutricionalVistasTrait; // trait que arma la logica para lo metodos: crud
    use ManageTimeTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vnutrici';
        $this->opciones['routxxxx'] = 'vnutrici';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[0][4] = true;
        $this->pestania2[0][5] = 'active';
    }

    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        //activar pestanias 
        $this->pestania[0][2] = $padrexxx->id;
        $this->pestania2[0][2] = $padrexxx->id;

        $this->getPestanias([]);
        $this->getTablas($padrexxx->id);
        return view($this->opciones['rutacarp'] . 'Vnutricional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;

        $puedoCrear = $this->verificarPuedoCrear($padrexxx);

        if ($puedoCrear['puedo']) {
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
        } else {
            return redirect()
                ->route('vnutrici', [$padrexxx->id])
                ->with('info', $puedoCrear['meserror']);
        }
    }

    public function store(VnutricionalCrearRequest $request, SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->setVnutricional([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'VALORACIÓN NUTRICIONAL creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'show'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function edit($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);

        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fechdili,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
                $this->getBotones(['editarxx', [], 1, 'EDITAR VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->nnaj]);
            } else {
                return redirect()
                    ->route('vnutrici', [$modeloxx->sis_nnaj_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('vnutrici', [$modeloxx->sis_nnaj_id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(VnutricionalCrearRequest $request, $modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);

        return $this->setVnutricional([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'VALORACIÓN NUTRICIONAL editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);

        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
        return $this->viewActive(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function destroy(Request $request, $modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'VALORACIÓN NUTRICIONAL inactivado correctamente');
    }

    public function activate($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);

        $this->getBotones(['activarx', [], 1, 'ACTIVAR VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
        return $this->viewActive(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function activar(Request $request,  $modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($modeloxx);
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'VALORACIÓN NUTRICIONAL activado correctamente');
    }

    private function verificarPuedoCrear($padrexxx)
    {
        $data['puedo'] = true;
        return $data;
    }

    private function verificarPuedoEditar($modeloxx)
    {
        if ($modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1) {
            return true;
        } else {
            return false;
        }
    }
}

<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Vnutricional;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Salud\Vnutricional\Vnutricion;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional\VnutricionalDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Salud\Vnutricional\SeguimientoVnutricionalCrearRequest;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\SeguimientoVnutricional\SeguimientoVnutricionalVistasTrait;
use App\Traits\Acciones\Individuales\Salud\Vnutricional\SeguimientoVnutricional\SeguimientoVnutricionalParametrizarTrait;

class VnutricionalSeguimientoController extends Controller
{
    use SeguimientoVnutricionalParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VnutricionalPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VnutricionalListadosTrait; // trait que arma las consultas para las datatables
    use VnutricionalCrudTrait; // trait donde se hace el crud de localidades
    use VnutricionalDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use SeguimientoVnutricionalVistasTrait; // trait que arma la logica para lo metodos: crud
    use ManageTimeTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vnutsegu';
        $this->opciones['routxxxx'] = 'vnutsegu';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[1][4] = true;
        $this->pestania2[1][5] = 'active';
    }

    public function index($padrexxx)
    {
        $padrexxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($padrexxx);

        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        //activar pestanias 
        $this->pestania[0][2] = $padrexxx->nnaj->id;
        $this->pestania2[0][2] = $padrexxx->nnaj->id;
        $this->pestania2[1][2] = $padrexxx->id;

        $this->getPestanias([]);
        $this->getTablasSeguimientos($padrexxx->id);
        $this->getBotones(['leerxxxx', ['vnutrici.verxxxxx', [$padrexxx->id]], 2, 'VOLVER A VALORACIÓN NUTRICIONAL COMPLETA', 'btn btn-sm btn-primary']);

        return view($this->opciones['rutacarp'] . 'SeguimientoVnutricional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create($padrexxx)
    {
        $padrexxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($padrexxx);

        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;

        $puedoCrear = $this->verificarPuedoCrear($padrexxx);

        if ($puedoCrear['puedo']) {
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR SEGUIMIENTO VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
        } else {
            return redirect()
                ->route('vnutsegu', [$padrexxx->id])
                ->with('info', $puedoCrear['meserror']);
        }
    }

    public function store(SeguimientoVnutricionalCrearRequest $request, $padrexxx)
    {
        $padrexxx = Vnutricion::where('is_seguimiento', 0)->FindOrFail($padrexxx);

        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->sis_nnaj_id]);
        $request->request->add(['vnutricion_id' => $padrexxx->id]);
        return $this->setSeguimientoVnutricional([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Seguimiento VALORACIÓN NUTRICIONAL creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'show'], 'padrexxx' => $modeloxx->vnutricional]);
    }

    public function edit($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);

        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fechdili,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->getBotones(['editarxx', [], 1, 'EDITAR SEGUIMIENTO NUTRICIONAL', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->vnutricional]);
            } else {
                return redirect()
                    ->route('vnutsegu', [$modeloxx->dast_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('vnutsegu', [$modeloxx->dast_id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(SeguimientoVnutricionalCrearRequest $request,  $modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);

        return $this->setSeguimientoVnutricional([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Seguimiento VALORACIÓN NUTRICIONAL editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);

        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
        return $this->viewActive(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->vnutricional]);
    }

    public function destroy(Request $request, $modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->vnutricional])
            ->with('info', 'Seguimiento VALORACIÓN NUTRICIONAL inactivado correctamente');
    }

    public function activate($modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);

        $this->getBotones(['activarx', [], 1, 'ACTIVAR VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
        return $this->viewActive(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->vnutricional]);
    }

    public function activar(Request $request, $modeloxx)
    {
        $modeloxx = Vnutricion::where('is_seguimiento', 1)->FindOrFail($modeloxx);

        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->vnutricional])
            ->with('info', 'Seguimiento VALORACIÓN NUTRICIONAL activado correctamente');
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

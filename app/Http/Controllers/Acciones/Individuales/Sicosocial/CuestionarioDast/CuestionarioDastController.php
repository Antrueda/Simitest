<?php

namespace App\Http\Controllers\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastCrudTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastVistasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastListadosTrait;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDastCrearRequest;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastPestaniasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastDataTablesTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastParametrizarTrait;

class CuestionarioDastController extends Controller
{
    use DastParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DastPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DastListadosTrait; // trait que arma las consultas para las datatables
    use DastCrudTrait; // trait donde se hace el crud de localidades
    use DastDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use DastVistasTrait; // trait que arma la logica para lo metodos: crud
    use ManageTimeTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'cuesdast';
        $this->opciones['routxxxx'] = 'cuesdast';
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
        return view($this->opciones['rutacarp'] . 'CuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
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
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
        } else {
            return redirect()
                ->route('cuesdast', [$padrexxx->id])
                ->with('info', $puedoCrear['meserror']);
        }
    }

    public function store(CuestionarioDastCrearRequest $request, SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->setCuestionarioDast([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Cuestionario dast creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(Dast $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'show'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function edit(Dast $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
                $this->getBotones(['editarxx', [], 1, 'EDITAR CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->nnaj]);
            } else {
                return redirect()
                    ->route('cuesdast', [$modeloxx->sis_nnaj_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('cuesdast', [$modeloxx->sis_nnaj_id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(CuestionarioDastCrearRequest $request,  Dast $modeloxx)
    {
        return $this->setCuestionarioDast([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Cuestionario dast editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Dast $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
        return $this->viewActive(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function destroy(Request $request, Dast $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Cuestionario dast inactivado correctamente');
    }

    public function activate(Dast $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
        return $this->viewActive(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function activar(Request $request, Dast $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Cuestionario dast activado correctamente');
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

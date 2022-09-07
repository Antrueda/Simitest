<?php

namespace App\Http\Controllers\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastSeguimiento;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastCrudTrait;
use App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\SeguimientoDastCrearRequest;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastListadosTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastPestaniasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast\DastDataTablesTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\SeguimientoDast\SeguimientoDastVistasTrait;
use App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\SeguimientoDast\SeguimientoDastParametrizarTrait;

class DastSeguimientoController extends Controller
{
    use SeguimientoDastParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DastPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DastListadosTrait; // trait que arma las consultas para las datatables
    use DastCrudTrait; // trait donde se hace el crud de localidades
    use DastDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use SeguimientoDastVistasTrait; // trait que arma la logica para lo metodos: crud

    use ManageTimeTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'dastsegu';
        $this->opciones['routxxxx'] = 'dastsegu';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[1][4] = true;
        $this->pestania2[1][5] = 'active';
    }

    public function index(Dast $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        //activar pestanias 
        $this->pestania[0][2] = $padrexxx->nnaj->id;
        $this->pestania2[0][2] = $padrexxx->nnaj->id;
        $this->pestania2[1][2] = $padrexxx->id;

        $this->getPestanias([]);
        $this->getTablasSeguimientos($padrexxx->id);
        $this->getBotones(['leerxxxx', ['cuesdast.verxxxxx', [$padrexxx->id]], 2, 'VOLVER AL CUESTIONARIO DAST', 'btn btn-sm btn-primary']);

        return view($this->opciones['rutacarp'] . 'CuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(Dast $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;

        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR SEGUIMIENTO DAST', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    public function store(SeguimientoDastCrearRequest $request, Dast $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['dast_id' => $padrexxx->id]);
        return $this->setSeguimientoDast([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Seguimiento Cuestionario dast creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(DastSeguimiento $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'padrexxx' => $modeloxx->dast]);
    }


    public function edit(DastSeguimiento $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->getBotones(['editarxx', [], 1, 'EDITAR SEGUIMIENTO DAST', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->dast]);
            } else {
                return redirect()
                    ->route('pvocacif', [$modeloxx->sis_nnaj_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('dastsegu', [$modeloxx->dast->id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(SeguimientoDastCrearRequest $request,  DastSeguimiento $modeloxx)
    {
        return $this->setSeguimientoDast([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Seguimiento Cuestionario dast editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(DastSeguimiento $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR SEGUIMIENTO DAST', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->dast]);
    }

    public function destroy(Request $request, DastSeguimiento $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->dast])
            ->with('info', 'Seguimiento Cuestionario dast inactivado correctamente');
    }

    public function activate(DastSeguimiento $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR SEGUIMIENTO DAST', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->dast]);
    }

    public function activar(Request $request, DastSeguimiento $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->dast])
            ->with('info', 'Seguimiento Cuestionario dast activado correctamente');
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

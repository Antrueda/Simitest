<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionSicorrd;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\Vsrrd;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdCrearRequest;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd\VpsiCrudTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd\VpsiVistasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd\VpsiListadosTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd\VpsiPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd\VpsiDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd\VpsiParametrizarTrait;

class ValoracionSicorrdController extends Controller
{
    use VpsiParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VpsiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VpsiListadosTrait; // trait que arma las consultas para las datatables
    use VpsiCrudTrait; // trait donde se hace el crud de localidades
    use VpsiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VpsiVistasTrait; // trait que arma la logica para lo metodos: crud
    use  ManageTimeTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vapsirrd';
        $this->opciones['routxxxx'] = 'vapsirrd';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[0][4] = true;
        $this->pestania2[0][5] = 'active';
        $this->opciones['conthabi'] = [];
    }

    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestania2[0][2] = $padrexxx->id;
        $this->pestania[0][2] = $padrexxx->id;

        $this->getPestanias([]);
        $this->getTablas($padrexxx->id);
        return view($this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.pestanias', ['todoxxxx' => $this->opciones]);
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

            $this->getBotones(['crearxxx', [], 1, 'GUARDAR VALORACIÓN', 'btn btn-sm btn-primary submit-viho-guardar']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
        } else {
            return redirect()
                ->route('vapsirrd', [$padrexxx->id])
                ->with('info', $puedoCrear['meserror']);
        }
    }
    public function store(VsrrdCrearRequest $request, SisNnaj $padrexxx)
    {
        $request->request->add(['num_sesion' => 1]);
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->setVsrrdSave([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Valoración psicosocial componente de RRD creado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(Vsrrd $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function edit(Vsrrd $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
                $this->getBotones(['editarxx', [], 1, 'EDITAR VALORACIÓN ', 'btn btn-sm btn-primary submit-viho-guardar']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->nnaj]);
            } else {
                return redirect()
                    ->route('vapsirrd', [$modeloxx->sis_nnaj_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('vapsirrd', [$modeloxx->sis_nnaj_id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(VsrrdCrearRequest $request,  Vsrrd $modeloxx)
    {
        return $this->setVsrrdSave([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Valoración psicosocial componente de RRD editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Vsrrd $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function destroy(Request $request, Vsrrd $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Valoración psicosocial componente de RRD inactivado correctamente');
    }

    public function activate(Vsrrd $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR VALORACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->nnaj]);
    }

    public function activar(Request $request, Vsrrd $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Valoración psicosocial componente de RRD activado correctamente');
    }

    private function verificarPuedoCrear($padrexxx)
    {

        $data = [];

        $dast = Dast::where('sis_esta_id', 1)->where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at', 'desc')->first();
        if ($dast != null) {
            $data['puedo'] = true;
        } else {
            $data['puedo'] = false;
            $data['meserror'] = 'Nnaj no tiene CUESTIONARIO DAST (test DAST- 10).';
        }

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

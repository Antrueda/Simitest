<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Labrrd;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Salud\Labrrd\Labrrd;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdSeg;
use App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd\LabrrdCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd\LabrrdListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd\LabrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd\LabrrdDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Salud\Labrrd\SeguimientoLabrrdCrearRequest;
use App\Traits\Acciones\Individuales\Salud\Labrrd\SeguimientoLabrrd\SeguimientoLabrrdVistasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\SeguimientoLabrrd\SeguimientoLabrrdParametrizarTrait;

class LabrrdSeguimientoController extends Controller
{
    use SeguimientoLabrrdParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use LabrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use LabrrdListadosTrait; // trait que arma las consultas para las datatables
    use LabrrdCrudTrait; // trait donde se hace el crud de localidades
    use LabrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use SeguimientoLabrrdVistasTrait; // trait que arma la logica para lo metodos: crud
    use ManageTimeTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'labrrseg';
        $this->opciones['routxxxx'] = 'labrrseg';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[1][4] = true;
        $this->pestania2[1][5] = 'active';
    }

    public function index(Labrrd $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        //activar pestanias 
        $this->pestania[0][2] = $padrexxx->nnaj->id;
        $this->pestania2[0][2] = $padrexxx->nnaj->id;
        $this->pestania2[1][2] = $padrexxx->id;

        $this->getPestanias([]);
        $this->getTablasSeguimientos($padrexxx->id);
        $this->getBotones(['leerxxxx', ['labrrdvs.verxxxxx', [$padrexxx->id]], 2, 'VOLVER A VALORACIÓN (LAB- RRD)', 'btn btn-sm btn-primary']);

        return view($this->opciones['rutacarp'] . 'SeguimientoLabrrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(Labrrd $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;

        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR SEGUIMIENTO VALORACIÓN (LAB- RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    public function store(SeguimientoLabrrdCrearRequest $request, Labrrd $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['labrrd_id' => $padrexxx->id]);

        return $this->setSeguimientoLabrrd([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Seguimiento LAB- RRD creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(LabrrdSeg $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'padrexxx' => $modeloxx->labrrd]);
    }

    public function edit(LabrrdSeg $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fechdili,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->getBotones(['editarxx', [], 1, 'EDITAR SEGUIMIENTO LAB- RRD', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->labrrd]);
            } else {
                return redirect()
                    ->route('labrrseg', [$modeloxx->sis_nnaj_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('labrrseg', [$modeloxx->labrrd->id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(SeguimientoLabrrdCrearRequest $request,  LabrrdSeg $modeloxx)
    {
        return $this->setSeguimientoLabrrd([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Seguimiento LAB- RRD editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(LabrrdSeg $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR SEGUIMIENTO LAB- RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->labrrd]);
    }

    public function destroy(Request $request, LabrrdSeg $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->labrrd])
            ->with('info', 'Seguimiento LAB- RRD inactivado correctamente');
    }

    public function activate(LabrrdSeg $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR SEGUIMIENTO LAB- RRD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->labrrd]);
    }

    public function activar(Request $request, LabrrdSeg $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->labrrd])
            ->with('info', 'Seguimiento LAB- RRD activado correctamente');
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

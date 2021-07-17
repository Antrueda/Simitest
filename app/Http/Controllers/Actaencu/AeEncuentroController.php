<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeEncuentroCrearRequest;
use App\Http\Requests\Actaencu\AeEncuentroEditarRequest;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\AeRecurso;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use app\Models\Sistema\SisLocalidad;
use App\Models\Temacombo;
use App\Models\User;
use App\Traits\Actaencu\Actaencu\ActaencuParametrizarTrait;
use App\Traits\actaencu\actaencu\ActaencuVistasTrait;
use App\Traits\Actaencu\ActaencuAjaxTrait;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
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
    use ActaencuAjaxTrait;// administrar los combos utilizados en las vistas

    public function __construct()
    {
        $this->opciones['permisox'] = 'actaencu';
        $this->opciones['routxxxx'] = 'actaencu';
        $this->pestania[0][5] = 'active';
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
        $this->opciones['fechdili'] = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => Carbon::now()->toDateString()
        ]);
        $this->opciones['sis_depens'] = SisDepen::pluck('nombre', 'id')->toArray();
        $this->opciones['sis_localidads'] = SisLocalidad::pluck('s_localidad', 'id')->toArray();
        $this->opciones['prm_accion_id'] = Temacombo::find(393)->parametros->pluck('nombre', 'id')->toArray();
        $this->opciones['entidades'] = SisEntidad::pluck('nombre', 'id')->toArray();
        $this->opciones['recursos'] = AgRecurso::pluck('s_recurso', 'id')->toArray();
        $this->opciones['save_disabled'] = true;
        $this->opciones['funccont'] = User::whereIn('prm_tvinculacion_id', [1673, 1674])->pluck('name', 'id')->toArray();
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
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);

        return redirect()->route($this->opciones['routxxxx'] . '.editarxx')->with(['infoxxxx' => 'Acta de encuentro creada con éxito']);
    }


    public function show(AeEncuentro $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AeEncuentro $modeloxx)
    {
        $this->opciones['fechdili'] = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => Carbon::now()->toDateString()
        ]);;
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones]);
    }


    public function update(AeEncuentroEditarRequest $request,  AeEncuentro $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AeEncuentro $modeloxx)
    {
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

    public function saveAeContacto(Request $request)
    {
        try {
            foreach ($request->data as $key => $contacto) {
                $aeContacto = AeContacto::where('ae_encuentro_id', $request->acta_encuentro_id)->where('index', $contacto['index'])->first();
                if (is_null($aeContacto)) {
                    $aeContacto = new AeContacto();
                    $aeContacto->ae_encuentro_id    = $request->acta_encuentro_id;
                    $aeContacto->user_crea_id       = Auth::id();
                    $aeContacto->sis_esta_id        = 1;
                    $aeContacto->index              = $contacto['index'];
                }
                $aeContacto->nombres_apellidos  = $contacto['nombres'];
                $aeContacto->sis_entidad_id     = $contacto['entidad'];
                $aeContacto->cargo              = $contacto['cargo'];
                $aeContacto->phone              = $contacto['telefono'];
                $aeContacto->email              = $contacto['email'];
                $aeContacto->user_edita_id      = Auth::id();
                $aeContacto->save();
            }
            return response()->json(['success' => 200]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th]);
        }
    }

    public function saveAeRecurso(Request $request)
    {
        try {
            $aeRecursos = AeRecurso::where('ae_encuentro_id', $request->acta_encuentro_id)->pluck('id')->toArray();
            if (!empty($aeRecursos)) {
                AeRecurso::deleted($aeRecursos);
            }
            foreach ($request->data as $key => $recurso) {
                $aeRecurso = new AeRecurso();
                $aeRecurso->ae_encuentro_id = $request->acta_encuentro_id;
                $aeRecurso->ag_recurso_id = $recurso;
                $aeRecurso->save();
            }
            return response()->json(['success' => 200]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th]);
        }
    }

}

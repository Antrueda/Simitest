<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use app\Http\Requests\Actaencu\AeEncuentroCrearRequest;
use app\Http\Requests\Actaencu\AeEncuentroEditarRequest;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\AeRecurso;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepen;
use app\Models\Sistema\SisLocalidad;
use app\Models\Sistema\SisServicio;
use app\Models\Sistema\SisUpz;
use App\Traits\Actaencu\Actaencu\ActaencuParametrizarTrait;
use App\Traits\actaencu\actaencu\ActaencuVistasTrait;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
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

    public function __construct()
    {
        $this->opciones['permisox'] = 'actaencu';
        $this->opciones['routxxxx'] = 'actaencu';
        $this->pestania[0][5]='active';
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
        $this->opciones['fechdili'] = Carbon::now()->toDateString();
        $this->opciones['sis_depens'] = SisDepen::pluck('nombre', 'id')->toArray();
        $this->opciones['sis_servicios'] = SisServicio::pluck('s_servicio', 'id')->toArray();
        $this->opciones['sis_localidads'] = SisLocalidad::pluck('s_localidad', 'id')->toArray();
        $this->opciones['fechdili'] = Carbon::now()->toDateString();
        $this->opciones['fechdili'] = Carbon::now()->toDateString();
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones]);
    }

    public function store(AeEncuentroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);

        // $aeEncuentro = new AeEncuentro();
        // $aeEncuentro->sis_depen_id            = $request->sis_depen_id;
        // $aeEncuentro->sis_servicio_id         = $request->sis_servicio_id;
        // $aeEncuentro->sis_localidad_id        = $request->sis_localidad_id;
        // $aeEncuentro->sis_upz_id              = $request->sis_upz_id;
        // $aeEncuentro->sis_barrio_id           = $request->sis_barrio_id;
        // $aeEncuentro->accion_parametro_id     = $request->accion_parametro_id;
        // $aeEncuentro->actividad_parametro_id  = $request->actividad_parametro_id;
        // $aeEncuentro->objetivo                = $request->objetivo;
        // $aeEncuentro->desarrollo_actividad    = $request->desarrollo_actividad;
        // $aeEncuentro->metodologia             = $request->metodologia;
        // $aeEncuentro->sis_esta_id             = $request->sis_esta_id;
        // $aeEncuentro->user_crea_id            = Auth::id();
        // $aeEncuentro->user_edita_id           = Auth::id();
        // $aeEncuentro->save();

        // foreach ($request as $key => $value) {
        //     $aeContacto = new AeContacto();
        //     $aeContacto->actas_encuentro_id = $aeEncuentro->id;
        //     $aeContacto->nombres_apellidos  = $value->nombres_apellidos;
        //     $aeContacto->sis_entidad_id     = $value->sis_entidad_id;
        //     $aeContacto->cargo              = $value->cargo;
        //     $aeContacto->phone              = $value->phone;
        //     $aeContacto->email              = $value->email;
        //     $aeContacto->save();
        // }

        // foreach ($request as $key => $value) {
        //     $aeRecurso = new AeRecurso();
        //     $aeRecurso->actas_encuentro_id = $aeEncuentro->id;
        //     $aeRecurso->ag_recurso_id = $value->ag_recurso_id;
        //     $aeRecurso->save();
        // }

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
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
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

    public function saveAeContacto(Request $request, AeEncuentro $aeEncuentro)
    {
        foreach ($request as $key => $value) {
            $aeContacto = AeContacto::find($value);
            if(is_null($aeContacto)) {
                $aeContacto = new AeContacto();
                $aeContacto->actas_encuentro_id = $aeEncuentro->id;
                $aeContacto->user_crea_id       = Auth::id();
                $aeContacto->sis_esta_id        = 1;
                $aeContacto->index              = $value->index;
            }
            $aeContacto->nombres_apellidos  = $value->nombres_apellidos;
            $aeContacto->sis_entidad_id     = $value->sis_entidad_id;
            $aeContacto->cargo              = $value->cargo;
            $aeContacto->phone              = $value->phone;
            $aeContacto->email              = $value->email;
            $aeContacto->user_edita_id      = Auth::id();
            $aeContacto->save();
        }
    }

    public function saveAeRecurso(Request $request, AeEncuentro $aeEncuentro)
    {
        $aeRecurso = AeRecurso::where('actas_encuentro_id', $aeEncuentro->id)->pluck('id')->toArray();
        AeRecurso::deleted($aeRecurso);
        foreach ($request as $key => $value) {
            $aeRecurso = new AeRecurso();
            $aeRecurso->actas_encuentro_id = $aeEncuentro->id;
            $aeRecurso->ag_recurso_id = $value->ag_recurso_id;
            $aeRecurso->save();
        }
    }

    public function getUPZ(Request $request)
    {
        $upzs = SisUpz::join('sis_localupzs', 'sis_localupzs.sis_upz_id', 'sis_upzs.id')
            ->where('sis_localupzs.sis_localidad_id', $request->sis_localidad_id)
            ->pluck('sis_upzs.s_upz', 'sis_upzs.id')->toArray();

        return response()->json($upzs);
    }

    public function getBarrio(Request $request)
    {
        $barrios = SisBarrio::join('sis_upzbarris', 'sis_upzbarris.sis_barrio_id', 'sis_barrios.id')
            ->join('sis_localupzs', 'sis_localupzs.id', 'sis_upzbarris.sis_localupz_id')
            ->where('sis_localupzs.sis_localidad_id', $request->sis_localidad_id)
            ->where('sis_localupzs.sis_upz_id', $request->sis_upz_id)
            ->pluck('sis_barrios.s_barrio', 'sis_barrios.id')->toArray();

        return response()->json($barrios);
    }
}

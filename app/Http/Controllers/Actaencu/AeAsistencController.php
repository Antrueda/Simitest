<?php

namespace App\Http\Controllers\Actaencu;

use App\Models\Actaencu\AeAsistencia;
use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeAsistencCrearRequest;
use App\Http\Requests\Actaencu\AeAsistencEditarRequest;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Sistema\SisEntidad;
use app\Models\sistema\SisNnaj;
use App\Models\User;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Asistenc\AsistencParametrizarTrait;
use App\Traits\Actaencu\Asistenc\AsistencVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AeAsistencController extends Controller
{
    use AsistencParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait;
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsistencVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'asistenc';
        $this->opciones['pernunna'] = 'asisnnaj';
        $this->opciones['routxxxx'] = 'asistenc';
        $this->pestania[1][4]=true;
        $this->pestania[1][5]='active';
        // $this->pestania[2][4]=true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(AeEncuentro $padrexxx)
    {
        $this->opciones['asistenc']=[0];
        // $this->pestania[1][2]=[$padrexxx->id];
        $this->pestania[1][2]=[$padrexxx->id];
        $this->getPestanias([]);
        $this->getTablasAsistenciaADTT($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(AeEncuentro $padrexxx)
    {
        $this->opciones['asistenc']=[0];
        $this->opciones['parametr'][]=$padrexxx->id;
        $this->opciones['readchcx'] = false;

        $funccont=[$padrexxx->user_funcontr_id, $padrexxx->user_contdili_id];

        $this->opciones['funccont'] = User::select(
            'users.id AS id',
            DB::raw("users.s_documento||' - '||users.name||' ('||sis_cargos.s_cargo||')' AS name")
        )
        ->join('sis_cargos', 'users.sis_cargo_id', 'sis_cargos.id')
        ->whereIn('users.id', $funccont)->distinct()
        ->pluck('name', 'id')->toArray();

        $this->opciones['responsa'] = User::select('users.name', 'users.id')
        ->join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
        ->where('sis_depen_user.sis_depen_id', $padrexxx->sis_depen_id)
        ->where('sis_depen_user.i_prm_responsable_id', 227)->pluck('name', 'id')->toArray();

        if (!$padrexxx->getVerCrearAttribute(9, 'contactos')) {
            return redirect()->route($this->opciones['permisox'], $padrexxx->id)->with(['infoxxxx' => 'Ha llegado al limite de contactos registrados (10)']);
        }

        $this->getBotones(['crearxxx', [$padrexxx->id], 1, 'GUARDAR ASISTENCIA', 'btn btn-sm btn-primary']);

        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $padrexxx]);
    }

    public function store(AeAsistencCrearRequest $request, AeEncuentro $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['ae_encuentro_id' => $padrexxx->id]);

        return $this->setAeAsistencia([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Asistencia creada con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);

        return redirect()->route($this->opciones['permisox'] . '.editarxx')->with(['infoxxxx' => 'Acta de encuentro creada con éxito']);
    }


    public function show(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['aedirreg'] = $modeloxx->aeDirregis;
        $this->opciones['readchcx'] = true;

        $funccont=[$modeloxx->aeEncuentro->user_funcontr_id, $modeloxx->aeEncuentro->user_contdili_id];

        $this->opciones['funccont'] = User::select(
            'users.id AS id',
            DB::raw("users.s_documento||' - '||users.name||' ('||sis_cargos.s_cargo||')' AS name")
        )
        ->join('sis_cargos', 'users.sis_cargo_id', 'sis_cargos.id')
        ->whereIn('users.id', $funccont)->distinct()
        ->pluck('name', 'id')->toArray();

        $this->opciones['responsa'] = User::select('users.name', 'users.id')
        ->join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
        ->where('sis_depen_user.sis_depen_id', $modeloxx->aeEncuentro->sis_depen_id)
        ->where('sis_depen_user.i_prm_responsable_id', 227)->pluck('name', 'id')->toArray();

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx'=>$modeloxx->aeEncuentro]);
    }


    public function edit(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['aedirreg'] = $modeloxx->aeDirregis;
        $this->opciones['readchcx'] = false;

        $funccont=[$modeloxx->aeEncuentro->user_funcontr_id, $modeloxx->aeEncuentro->user_contdili_id];

        $this->opciones['funccont'] = User::select(
            'users.id AS id',
            DB::raw("users.s_documento||' - '||users.name||' ('||sis_cargos.s_cargo||')' AS name")
        )
        ->join('sis_cargos', 'users.sis_cargo_id', 'sis_cargos.id')
        ->whereIn('users.id', $funccont)->distinct()
        ->pluck('name', 'id')->toArray();

        $this->opciones['responsa'] = User::select('users.name', 'users.id')
        ->join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
        ->where('sis_depen_user.sis_depen_id', $modeloxx->aeEncuentro->sis_depen_id)
        ->where('sis_depen_user.i_prm_responsable_id', 227)->pluck('name', 'id')->toArray();

        $this->getBotones(['editarxx', [], 1, 'GUARDAR ASISTENCIA', 'btn btn-sm btn-primary']);

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->aeEncuentro]);
    }


    public function update(AeAsistencEditarRequest $request,  AeAsistencia $modeloxx)
    {
        return $this->setAeAsistencia([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asistencia editada con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx'
        ]);
    }

    public function inactivate(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['readchcx'] = true;
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASISTENCIA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->aeEncuentro]);
    }


    public function destroy(Request $request, AeAsistencia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['readchcx'] = true;
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASISTENCIA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx'=>$modeloxx->aeEncuentro]);
    }

    public function activar(Request $request, AeAsistencia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro activada correctamente');
    }

    public function setAsignar($padrexxx, Request $request)
    {
        $dataxxxx['mensajex'] = 'Primero guarde la asistencia para asignar el asistente.';
        $dataxxxx['mostrarx'] = false;
        if ($padrexxx) {
            $dataxxxx['mostrarx'] = true;
            $asistent = AeAsistencia::find($padrexxx);
            $nnajxxxx = $asistent->sis_nnaj_id->where('id', $request->valuexxx)->first();
            if(is_null($nnajxxxx)) {
                $nnajxxxx = SisNnaj::find($request->valuexxx);
                // * Si no existe el nnaj en la lista de asistencia, se busca el nnaj.
                if($nnajxxxx->prm_escomfam_id == 227) {
                    // * Si es nnaj, se asigna directamente a la lista de asistencia.
                    $asistent->sis_nnaj_id()->attach([$request->valuexxx => [
                        'sis_esta_id'   => 1,
                        'user_crea_id'  => Auth::id(),
                        'user_edita_id' => Auth::id()
                    ]]);
                    $dataxxxx['mensajex'] = 'NNAJ asignado con exito.';
                } else {
                    $nnajcoun = $nnajxxxx->ae_asistencias->count();
                    if ($nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 651) {
                        // * Si el nnaj que es contacto unico y el tipo de poblacion es en riesgo de habitar la calle.
                        if($nnajcoun < 3) {
                            // * Se verifica que tenga menos de 3 asistencias para agregar a la lista de asistencia
                            // * sin que sea necesario crear ficha de ingreso.
                            $asistent->sis_nnaj_id()->attach([$request->valuexxx => [
                                'sis_esta_id'   => 1,
                                'user_crea_id'  => Auth::id(),
                                'user_edita_id' => Auth::id()
                            ]]);
                            $dataxxxx['mensajex'] = 'NNAJ asignado con exito.';
                        } else {
                            $dataxxxx['mensajex'] = 'Para continuar debe crear ficha de ingreso del NNAJ.';
                        }
                    } else if ($nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 650){
                        // * Si el nnaj que es contacto unico y el tipo de poblacion es habitante de calle.
                        if($nnajcoun == 1) {
                            // * se verifica que tenga por lo menos una asistencia y se solicita que se le genere ficha de ingreso.
                            $dataxxxx['mensajex'] = 'Para continuar debe crear ficha de ingreso del NNAJ.';
                        } else if (!$nnajcoun) {
                            $asistent->sis_nnaj_id()->attach([$request->valuexxx => [
                                'sis_esta_id'   => 1,
                                'user_crea_id'  => Auth::id(),
                                'user_edita_id' => Auth::id()
                            ]]);
                            $dataxxxx['mensajex'] = 'NNAJ asignado con exito.';
                        }
                    }
                }
            } else {
                $asistent->sis_nnaj_id()->detach($request->valuexxx);
                // * Eliminamos el nnaj seleccionado de la lista de asistencia.
                $dataxxxx['mensajex'] = 'NNAJ eliminado de la lista.';
            }
        }
        return response()->json($dataxxxx);
    }

}

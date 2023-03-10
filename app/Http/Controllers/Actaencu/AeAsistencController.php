<?php

namespace App\Http\Controllers\Actaencu;

use App\Models\Actaencu\AeAsistencia;
use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeAsistencCrearRequest;
use App\Http\Requests\Actaencu\AeAsistencEditarRequest;
use App\Models\Actaencu\AeEncuentro;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Asistenc\AsistencParametrizarTrait;
use App\Traits\Actaencu\Asistenc\AsistencVistasTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class AeAsistencController extends Controller
{
    use AsistencParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait;
    use ManageTimeTrait;
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsistencVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'asistenc';
        $this->opciones['pernunna'] = 'asisnnaj';
        $this->opciones['routxxxx'] = 'asistenc';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(AeEncuentro $padrexxx)
    {
        $this->opciones['asistenc'] = [0];
        $this->pestania[1][2] = [$padrexxx->id];
        $this->getPestanias([]);
        $this->getTablasAsistenciaADTT($padrexxx, $this->puedeCrearOEditar($padrexxx));
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(AeEncuentro $padrexxx)
    {
        $this->opciones['asistenc'] = [0];
        $this->opciones['parametr'][] = $padrexxx->id;
        $this->opciones['readchcx'] = false;

        $funccont = [$padrexxx->user_funcontr_id, $padrexxx->user_contdili_id];

        $this->opciones['funccont'] = User::select(
            'users.id AS id',
            DB::raw("users.s_documento||' - '||users.name||' ('||sis_cargos.s_cargo||')' AS name")
        )
            ->join('sis_cargos', 'users.sis_cargo_id', 'sis_cargos.id')
            ->whereIn('users.id', $funccont)->distinct()
            ->pluck('name', 'id')->toArray();

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
        if (Auth::user()->s_documento == '17496705') {
            $menorxxx = Carbon::now();
            $mayorxxx = Carbon::now();
            $menorxxx->subYears(6);
            $mayorxxx->subYears(29);
            $mayorxxx->addDay(1);
            $menorxxx = $menorxxx->format('Y-m-d');
            $mayorxxx = $mayorxxx->format('Y-m-d');
           // ddd($mayorxxx, $menorxxx);
        }
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['aedirreg'] = $modeloxx->aeDirregis;
        $this->opciones['readchcx'] = true;

        $funccont = [$modeloxx->aeEncuentro->user_funcontr_id, $modeloxx->aeEncuentro->user_contdili_id];

        $this->opciones['funccont'] = User::select(
            'users.id AS id',
            DB::raw("users.s_documento||' - '||users.name||' ('||sis_cargos.s_cargo||')' AS name")
        )
            ->join('sis_cargos', 'users.sis_cargo_id', 'sis_cargos.id')
            ->whereIn('users.id', $funccont)->distinct()
            ->pluck('name', 'id')->toArray();

        // $this->opciones['responsa'] = User::select('users.name', 'users.id')
        // ->join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
        // ->where('sis_depen_user.sis_depen_id', $modeloxx->aeEncuentro->sis_depen_id)
        // ->where('sis_depen_user.i_prm_responsable_id', 227)->pluck('name', 'id')->toArray();

        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->aeEncuentro, 'vercrear' => false]);
    }


    public function edit(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['aedirreg'] = $modeloxx->aeDirregis;
        $this->opciones['readchcx'] = false;

        if (!$this->puedeCrearOEditar($modeloxx->aeEncuentro)) {
            return redirect()
                ->route($this->opciones['permisox'] . '.verxxxxx', [$modeloxx->id]);
        }

        $funccont = [$modeloxx->aeEncuentro->user_funcontr_id, $modeloxx->aeEncuentro->user_contdili_id];

        $this->opciones['funccont'] = User::select(
            'users.id AS id',
            DB::raw("users.s_documento||' - '||users.name||' ('||sis_cargos.s_cargo||')' AS name")
        )
            ->join('sis_cargos', 'users.sis_cargo_id', 'sis_cargos.id')
            ->whereIn('users.id', $funccont)->distinct()
            ->pluck('name', 'id')->toArray();

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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->aeEncuentro]);
    }


    public function destroy(Request $request, AeAsistencia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Asistencia inactivada correctamente');
    }

    public function activate(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->opciones['asistenc'] = [$modeloxx->id];
        $this->opciones['readchcx'] = true;
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASISTENCIA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->aeEncuentro]);
    }

    public function activar(Request $request, AeAsistencia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Asistencia activada correctamente');
    }

    /**
     * Realizar la asignación de la persona a la asitencia
     *
     * @param array $dataxxxx
     * @param AeAsistencia $request
     * @param object $asistent
     * @return array
     */
    public function setAsignarNnaj($dataxxxx, $request, $asistent)
    {
        $asistent->sis_nnaj_id()->attach([$request->valuexxx => [
            'sis_esta_id'   => 1,
            'user_crea_id'  => Auth::id(),
            'user_edita_id' => Auth::id()
        ]]);
        $dataxxxx['mensajex'] = 'NNAJ asignado con exito.';

        return $dataxxxx;
    }

    /**
     * Solicitar que se le cree la ficha de ingreso
     *
     * @param SisNnaj $nnajxxxx
     * @return array
     */
    public function getSolicitarFI($nnajxxxx, $dataxxxx)
    {
        $dataxxxx['mostrarx'] = false;
        $dataxxxx['mensajex'] = 'Para continuar debe crear ficha de ingreso del NNAJ.';
        $dataxxxx['createfi'] = true;
        $dataxxxx['contacto'] = route('asistenc.crearfix', [$nnajxxxx->fi_datos_basico->id]);
        return $dataxxxx;
    }

    /**
     * Realizar las validaciones para cuando la persona que se está asignando es un contacto
     *
     * @param SisNnaj $nnajxxxx
     * @param int $nnajcoun
     * @param array $dataxxxx
     * @param Request $request
     * @param AeAsistencia $asistent
     * @return array
     */
    public function setContacto($nnajxxxx, $nnajcoun, $dataxxxx, $request, $asistent)
    {
        if ($nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 651) {
            // * Si el nnaj que es contacto unico y el tipo de poblacion es en riesgo de habitar la calle.
            if ($nnajcoun < 5) {
                // * Se verifica que tenga menos de 5 asistencias para agregar a la lista de asistencia
                // * sin que sea necesario crear ficha de ingreso.
                $dataxxxx = $this->setAsignarNnaj($dataxxxx, $request, $asistent);
                $dataxxxx['mostrarx'] = false;
                $asistenc = $asistent + 1;
                $dataxxxx['mensajex'] = "La persona cuenta con:  $asistenc asistencias.";
            } else {
                // * Se solicita que se le genere ficha de ingreso.
                $dataxxxx = $this->getSolicitarFI($nnajxxxx, $dataxxxx);
            }
        } else if ($nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 650) {
            // * Si el nnaj que es contacto unico y el tipo de poblacion es habitante de calle.
            if ($nnajcoun == 1) {
                // * Se verifica que tenga por lo menos una asistencia y se solicita que se le genere ficha de ingreso.
                $dataxxxx = $this->getSolicitarFI($nnajxxxx, $dataxxxx);
            } else if (!$nnajcoun) {
                $dataxxxx = $this->setAsignarNnaj($dataxxxx, $request, $asistent);
            }
        }
        return $dataxxxx;
    }

    /**
     * Realizar las validaciones para cuando la persona que se está asignando a la asitencia es un NNAJ
     *
     * @param int $nnajcoun
     * @param SisNnaj $nnajxxxx
     * @param array $dataxxxx
     * @param Request $request
     * @param AeAsistencia $asistent
     * @return array
     */
    public function setNnaj($nnajcoun, $nnajxxxx, $dataxxxx, $request, $asistent)
    {
        // * El nnaj se puede asignar a la asistencia
        if ($nnajcoun < 5 && $nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 651) {
            $dataxxxx = $this->setAsignarNnaj($dataxxxx, $request, $asistent);
            $dataxxxx['mostrarx'] = false;
            $asistenc = $nnajcoun + 1;
            $dataxxxx['mensajex'] = "El NNAJ cuenta con: $asistenc asistencias.";
        } else { // * El nnj ya ha cumplido con el tope de las asistencias
            [$validacion, $mensaje] = $this->validacionDatosCompletosNnaj($nnajxxxx->fi_datos_basico);
            if ($validacion) {
                // * Si es nnaj, se asigna directamente a la lista de asistencia.
                $dataxxxx = $this->setAsignarNnaj($dataxxxx, $request, $asistent);
            } else {
                $dataxxxx['mostrarx'] = false;
                $dataxxxx['mensajex'] = "Completa la(s) seccion(es) de $mensaje de la ficha de ingreso para agregar el NNAJ a la lista de asistencia.";
            }
        }
        return $dataxxxx;
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param array $dataxxxx
     * @param AeAsistencia $asistent
     * @return array
     */
    public function setNnajContacto($request, $dataxxxx, $asistent)
    {
        $nnajxxxx = SisNnaj::find($request->valuexxx);
        // * Saber cuántas asistencias tiene la persona
        $nnajcoun = $nnajxxxx->ae_asistencias->count();
        // * Si no existe el nnaj en la lista de asistencia, se busca el nnaj.
        if ($nnajxxxx->prm_escomfam_id == 227) {
            $dataxxxx = $this->setNnaj($nnajcoun, $nnajxxxx, $dataxxxx, $request, $asistent);
        } else {
            $dataxxxx = $this->setContacto($nnajxxxx, $nnajcoun, $dataxxxx, $request, $asistent);
        }
        return $dataxxxx;
    }

    public function setAsignar($padrexxx, Request $request)
    {
        $dataxxxx['mensajex'] = 'Primero guarde la asistencia para asignar el asistente.';
        $dataxxxx['mostrarx'] = false;
        $dataxxxx['createfi'] = false;
        if ($padrexxx) {
            $dataxxxx['mostrarx'] = true;
            $asistent = AeAsistencia::find($padrexxx);
            $nnajxxxx = $asistent->sis_nnaj_id->where('id', $request->valuexxx)->first();
            if (is_null($nnajxxxx)) {
                $dataxxxx = $this->setNnajContacto($request, $dataxxxx, $asistent);
            } else {
                $asistent->sis_nnaj_id()->detach($request->valuexxx);
                // * Eliminamos el nnaj seleccionado de la lista de asistencia.
                $dataxxxx['mensajex'] = 'NNAJ eliminado de la lista.';
            }
        }
        return response()->json($dataxxxx);
    }

    public function crearFichaDeIngreso(Request $request)
    {
        if (!is_null($request->padrexxx)) {
            $sisNnajId = FiDatosBasico::find($request->contacto)->sis_nnaj->id;
            AeAsistencia::find($request->padrexxx)->sis_nnaj_id()->detach($sisNnajId);
        }
        return redirect()->route('fidatbas.editcont', [$request->contacto]);
    }

    private function puedeCrearOEditar(AeEncuentro $modeloxx)
    {
        $respuest = $this->getPuedeCargar([
            'estoyenx' => 2,
            'upixxxxx' => $modeloxx->sis_depen_id,
            'fechregi' => explode(' ', $modeloxx->fechdili)[0]
        ]);

        return $respuest['tienperm'];
    }

    public function setEliminarContacto(AeAsistencia $padrexxx, $nnajxxxx)
    {
        $padrexxx->sis_nnaj_id()->detach($nnajxxxx);
        return redirect()
            ->route($this->opciones['permisox'] . '.editarxx', [$padrexxx->id])
            ->with('info', 'NNAJ eliminado de la lista.');
    }
}

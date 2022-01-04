<?php

namespace App\Http\Controllers\AsisSema;

use App\Http\Controllers\Controller;
use app\Http\Requests\AsisSema\AeEncuentroCrearRequest;
use app\Http\Requests\AsisSema\AeEncuentroEditarRequest;
use App\Models\AsisSema\AeEncuentro;
use App\Traits\AsisSema\AsisSema\AsisSemaParametrizarTrait;
use App\Traits\AsisSema\AsisSema\AsisSemaVistasTrait;
use App\Traits\AsisSema\AsisSemaAjaxTrait;
use App\Traits\AsisSema\AsisSemaCrudTrait;
use App\Traits\AsisSema\AsisSemaDataTablesTrait;
use App\Traits\AsisSema\AsisSemaListadosTrait;
use App\Traits\AsisSema\AsisSemaPestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsisSemaController extends Controller
{
    use AsisSemaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AsisSemaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AsisSemaListadosTrait; // trait que arma las consultas para las datatables
    use AsisSemaCrudTrait; // trait donde se hace el crud de localidades

    use AsisSemaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsisSemaVistasTrait; // trait que arma la logica para lo metodos: crud

    use CombosTrait;
    use AsisSemaAjaxTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'asissema';
        $this->opciones['routxxxx'] = 'asissema';
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
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(AeEncuentroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Asistencia Semanal creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AeEncuentro $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AeEncuentro $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AeEncuentroEditarRequest $request,  AeEncuentro $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asistencia Semanal editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AeEncuentro $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asistencia Semanal inactivada correctamente');
    }

    public function activate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }

    public function activar(Request $request, AeEncuentro $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asistencia Semanal activada correctamente');
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
            if(is_null($nnajxxxx)) {
                $nnajxxxx = SisNnaj::find($request->valuexxx);
                // * Si no existe el nnaj en la lista de asistencia, se busca el nnaj.
                if($nnajxxxx->prm_escomfam_id == 227) {
                    [$validacion, $mensaje] = $this->validacionDatosCompletosNnaj($nnajxxxx->fi_datos_basico);
                    if ($validacion) {
                        // * Si es nnaj, se asigna directamente a la lista de asistencia.
                        $asistent->sis_nnaj_id()->attach([$request->valuexxx => [
                            'sis_esta_id'   => 1,
                            'user_crea_id'  => Auth::id(),
                            'user_edita_id' => Auth::id()
                        ]]);
                        $dataxxxx['mensajex'] = 'NNAJ asignado con exito.';
                    } else {
                        $dataxxxx['mostrarx'] = false;
                        $dataxxxx['mensajex'] = "Completa la(s) seccion(es) de $mensaje de la ficha de ingreso para agregar el NNAJ a la lista de asistencia.";
                    }
                } else {
                    $nnajcoun = $nnajxxxx->ae_asistencias->count();
                    if ($nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 651) {
                        // * Si el nnaj que es contacto unico y el tipo de poblacion es en riesgo de habitar la calle.
                        if($nnajcoun < 5) {
                            // * Se verifica que tenga menos de 5 asistencias para agregar a la lista de asistencia
                            // * sin que sea necesario crear ficha de ingreso.
                            $asistent->sis_nnaj_id()->attach([$request->valuexxx => [
                                'sis_esta_id'   => 1,
                                'user_crea_id'  => Auth::id(),
                                'user_edita_id' => Auth::id()
                            ]]);
                            $dataxxxx['mensajex'] = 'NNAJ asignado con exito.';
                        } else {
                             // * Se solicita que se le genere ficha de ingreso.
                            $dataxxxx['mostrarx'] = false;
                            $dataxxxx['mensajex'] = 'Para continuar debe crear ficha de ingreso del NNAJ.';
                            $dataxxxx['createfi'] = true;
                            $dataxxxx['contacto'] = route('asistenc.crearfix',[$nnajxxxx->fi_datos_basico->id]);
                        }
                    } else if ($nnajxxxx->fi_datos_basico->prm_tipoblaci_id == 650){
                        // * Si el nnaj que es contacto unico y el tipo de poblacion es habitante de calle.
                        if($nnajcoun == 1) {
                            // * Se verifica que tenga por lo menos una asistencia y se solicita que se le genere ficha de ingreso.
                            $dataxxxx['mostrarx'] = false;
                            $dataxxxx['mensajex'] = 'Para continuar debe crear ficha de ingreso del NNAJ.';
                            $dataxxxx['createfi'] = true;
                            $dataxxxx['contacto'] = route('asistenc.crearfix',[$nnajxxxx->fi_datos_basico->id]);
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

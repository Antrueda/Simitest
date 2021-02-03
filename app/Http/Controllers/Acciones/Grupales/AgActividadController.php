<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgActividadCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgActividadEditarRequest;
use App\Models\Acciones\Grupales\AgActividad;
use App\Traits\Acciones\Grupales\Tallacciones\CrudTrait;
use App\Traits\Acciones\Grupales\Tallacciones\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Tallacciones\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgActividadController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'agactividad';
        $this->opciones['routxxxx'] = 'agactividad';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['tablinde'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }

    public function create()
    {

        $activida = AgActividad::where('user_crea_id', Auth::user()->id)->where('incompleto', 1)->first();
        if(isset( $activida->id)){
            return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$activida->id])
            ->with('info', 'Tiene un taller por terminar, por favor complételo para que pueda crear uno nuevo');
        }

        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR TALLER', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(AgActividadCrearRequest $request)
    {

        return $this->setAgActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $request,
            'infoxxxx' =>       'Taller creado con exito',
            'routxxxx' => 'agrespon.nuevo'
        ]);
    }


    public function show(AgActividad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVO TALLER', 'btn btn-sm btn-primary']);
        return $this->view(
            $do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $modeloxx->id]
        );
    }


    public function edit(AgActividad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'VOLVER A TALLER', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR TALLER', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', ['agrespon.nuevo',[$modeloxx->id]], 2, 'AGREGAR RESPONSABLE', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', ['agasiste.nuevo',[$modeloxx->id]], 2, 'AGREGAR PARTICIPANTES', 'btn btn-sm btn-primary']);
        $this->getBotones(['crear', ['agrelacion.nuevo',[$modeloxx->id]], 2, 'AGREGAR RECURSOS', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->sis_nnaj]], 2, 'CREAR TALLER', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $modeloxx->sis_nnaj]
        );
    }


    public function update(AgActividadEditarRequest $request,  AgActividad $modeloxx)
    {
        return $this->setAgActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Taller editado con exito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(AgActividad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR TALLER', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, AgActividad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Taller inactivado correctamente');
    }

    public function activate(AgActividad $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR TALLER', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->sis_nnaj]
        );
    }
    public function activar(Request $request, AgActividad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Taller activado correctamente');
    }
}

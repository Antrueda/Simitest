<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\Administ\InLineaBaseCrearRequest;
use App\Http\Requests\Indicadores\Administ\InLineaBaseEditarRequest;
use App\Models\Indicadores\Administ\InLineaBase;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Linebase\LinebaseVistasTrait;
use App\Traits\Indicadores\IndimoduCrudTrait;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * realizar la unión del área con sus indicadores
 */
class InLinebaseController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use LinebaseVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // trait arma los botones
    use CombosTrait; // trait que arma los combos
    private $opciones = [
        'permisox' => 'linebase',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'inadmini',
        'botoform' => [],
    ];


    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['cardhead'] = "ADMINISTRACI{$this->opciones['vocalesx'][3]}N";
    }



    public function index()
    {
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getLinebaseIndex(['paralist' => $this->opciones['parametr']]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->opciones['tituloxx'] = 'NUEVA LÍNEA BASE';
        $botonxxx = ['btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }

    public function store(InLineaBaseCrearRequest $request)
    {
        $this->requestx = $request;
        $this->infoxxxx = 'Indicador creado correctamente';
        return  $this->setInLineaBase();
    }
    public function edit(InLineaBase $modeloxx)
    {
        $this->opciones['tituloxx'] = 'EDITAR LÍNEA BASE';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }


    public function update(InLineaBaseEditarRequest $request,  InLineaBase $modeloxx)
    {
        $this->infoxxxx = 'Línea base actualizado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setInLineaBase();
    }

    public function show(InLineaBase $modeloxx)
    {
        $this->opciones['tituloxx'] = 'VER LÍNEA BASE';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }




    public function inactivate(InLineaBase $modeloxx)
    {
        $this->estadoid = 2;
        $this->opciones['tituloxx'] = 'INACTIVAR LÍNEA BASE';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        $this->padrexxx = $modeloxx->area;
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR']);
        return $this->view();
    }


    public function destroy(InLineaBase $modeloxx, Request $request)
    {
        return $this->actinact($modeloxx,$request,'Línea base inactivado correctamente');
    }

    public function activate(InLineaBase $modeloxx)
    {
        $this->opciones['tituloxx'] = 'ACTIVAR LÍNEA BASE';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        $this->padrexxx = $modeloxx->area;
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR']);
        return $this->view();
    }
    public function activar(InLineaBase $modeloxx, Request $request)
    {
        return $this->actinact($modeloxx, $request, 'Línea base activado correctamente');
    }
}

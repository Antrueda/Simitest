<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\Administ\InIndilibaCrearRequest;
use App\Http\Requests\Indicadores\Administ\InIndilibaEditarRequest;
use App\Models\Indicadores\Administ\InAreaindi;
use App\Models\Indicadores\Administ\InIndiliba;
use App\Models\Indicadores\Administ\InLineaBase;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Indiliba\IndilibaVistasTrait;
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
class InIndilibaController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndilibaVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // trait arma los botones
    use CombosTrait; // trait que arma los combos
    private $opciones = [
        'permisox' => 'indiliba',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'indimodu',
        'botoform' => [],
        'categori' => ['' => 'Seleccione'],
    ];
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(InAreaindi $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['parametr'] = [$this->padrexxx->id];
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getIndilibaIndex(['paralist' => $this->opciones['parametr']]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(InAreaindi $padrexxx, InLineaBase $linebase)
    {

        $this->opciones['linebase'] = [$linebase->id => $linebase->s_linea_base];
        $this->padrexxx = $padrexxx;
        $this->opciones['parametr'][] = $this->padrexxx->id;
        $botonxxx = ['btnxxxxx' => 'b',];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }

    public function store(InIndilibaCrearRequest $request, $padrexxx)
    {
        $request->request->add(['in_areaindi_id' => $padrexxx,]);
        $this->requestx = $request;
        $this->infoxxxx = 'Línea base creada correctamente';
        return  $this->setInIndiliba();
    }

    public function formular(Request $request)
    {
        $inlinbas = InLineaBase::select(['id as valuexxx', 's_linea_base as optionxx'])->find($request);

        return response()->json($inlinbas);
    }

    public function getCategori($dataxxxx)
    {
        $nivelsx = [938 => 412, 939 => 415, 940 => 416];
        return $this->getTemacomboCT(['temaxxxx' => $nivelsx[$dataxxxx['valuexxx']], 'ajaxxxxx' => $dataxxxx['ajaxxxxx'], 'selected' => $dataxxxx['selected']])['comboxxx'];
    }

    public function categori(Request $request)
    {
        $respuest = $this->getCategori([
            'valuexxx' => $request->valuexxx,
            'ajaxxxxx' => true,
            'selected' => $request->selected
        ]);
        return response()->json($respuest);
    }

    public function edit(InIndiliba $modeloxx)
    {
        $linebase = $modeloxx->inLineaBase;
        $this->opciones['linebase'] = [$linebase->id => $linebase->s_linea_base];
        $this->padrexxx = $modeloxx->inAreaindi;
        $this->opciones['tituloxx'] = 'CREAR';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }


    public function update(InIndilibaEditarRequest $request,  InIndiliba $modeloxx)
    {
        $this->infoxxxx = 'Línea base actualizada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setInIndiliba();
    }

    public function show(InIndiliba $modeloxx)
    {
        $this->padrexxx = $modeloxx->inAreaindi;
        $this->opciones['tituloxx'] = 'VER LINEA BASE';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }

    public function inactivate(InIndiliba $modeloxx)
    {
        $this->estadoid = 2;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'destroyx']];
        $this->padrexxx = $modeloxx->inAreaindi;
        $this->opciones['parametr'][] = $modeloxx->in_areaindi_id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR']);
        return $this->view();
    }


    public function destroy(InIndiliba $modeloxx, Request $request)
    {
        return $this->actinact($modeloxx, $request, 'Línea base inactivada correctamente', [$modeloxx->in_areaindi_id]);
    }

    public function activate(InIndiliba $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        $this->padrexxx = $modeloxx->inAreaindi;
        $this->opciones['parametr'][] = $modeloxx->in_areaindi_id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR']);
        return $this->view();
    }
    public function activar(InIndiliba $modeloxx, Request $request)
    {
        return $this->actinact($modeloxx,  $request, 'Línea base inactivada correctamente',[$modeloxx->in_areaindi_id]);
    }
}

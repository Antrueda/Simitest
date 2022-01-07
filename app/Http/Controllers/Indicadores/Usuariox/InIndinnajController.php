<?php

namespace App\Http\Controllers\Indicadores\Usuariox;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\Administ\InIndicadoCrearRequest;
use App\Http\Requests\Indicadores\Administ\InIndicadoEditarRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Indicadores\Administ\InIndicado;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\IndimoduCrudTrait;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use App\Traits\Indicadores\Usuariox\Indinnaj\ArmarIndicadorTrait;
use App\Traits\Indicadores\Usuariox\Indinnaj\IndinnajVistasTrait;
use Illuminate\Http\Request;

/**
 * realizar la unión del área con sus indicadores
 */
class InIndinnajController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndinnajVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // trait arma los botones
    use CombosTrait; // trait que arma los combos
    use ArmarIndicadorTrait;
    private $opciones = [
        'permisox' => 'indinnaj',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'indiagno',
        'botoform' => [],
    ];


    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['cardhead'] = "INDICADORES NNAJ";
        $this->opciones['rutacarp'] = 'Indicadores.Usuariox.';
    }



    public function index()
    {
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getInIndinnajIndex(['paralist' => $this->opciones['parametr']]);
        return view($this->opciones['rutacomp']. 'Pestania.pestania', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $botonxxx = ['btnxxxxx' => 'b',];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }
    
    public function store(InIndicadoCrearRequest $request)
    {
        $this->requestx=$request;
        $this->infoxxxx='Indicador creado correctamente';
        return  $this->setInIndicado();
    }
    public function edit(FiDatosBasico $modeloxx)
    {
       
        $this->opciones['tituloxx'] = 'CREAR';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['datatabl', 'formulario']];
        $this->getiIndiagnoDiagnost(['paralist' => $this->opciones['parametr']]);
        // $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        // $this->getRespuesta($botonxxx);
        return $this->view();
    }


    public function update(InIndicadoEditarRequest $request,  InIndicado $modeloxx)
    {
        $this->infoxxxx = 'Indicador actualizado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setInIndicado();
    }

    public function show(InIndicado $modeloxx)
    {
        $this->opciones['tituloxx'] = 'VER INDICADOR';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }

    


    public function inactivate(InIndicado $modeloxx)
    {
        $this->estadoid = 2;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['borrarxx', 'borrarxx']];
        $this->padrexxx = $modeloxx->area;
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR']);
        return $this->view();
    }

    public function destroy(InIndicado $modeloxx, Request $request)
    {
        return $this->actinact($modeloxx, $request, 'Indicador inactivado correctamente');
    }

    public function activate(InIndicado $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['activarx', 'activarx']];
        $this->padrexxx = $modeloxx->area;
        $this->opciones['parametr'][] = $modeloxx->id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR']);
        return $this->view();
    }
    public function activar(InIndicado $modeloxx, Request $request)
    {
        return $this->actinact($modeloxx, $request, 'Indicador activado correctamente');
    }
}

<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\Administ\InIndicadoCrearRequest;
use App\Http\Requests\Indicadores\Administ\InIndicadoEditarRequest;
use App\Models\Indicadores\Administ\Area;
use App\Models\Indicadores\Administ\InIndicado;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Indicador\IndicadorVistasTrait;
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
class InIndicadoController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use IndicadorVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // trait arma los botones
    use CombosTrait; // trait que arma los combos
    private $opciones = [
        'permisox' => 'indicado',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'indimodu',
        'botoform' => [],
    ];


    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
    }



    public function index(Area $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getAreaindiIndex(['paralist' => $this->opciones['parametr']]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(Area $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        $this->opciones['parametr'][] = $this->padrexxx->id;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'CREAR', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }
    public function edit(InIndicado $modeloxx)
    {
        $this->padrexxx=$modeloxx->area;
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        return $this->view();
    }


    public function update(InIndicadoEditarRequest $request,  InIndicado $modeloxx)
    {
        $this->infoxxxx='Asignatura actualizada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setInIndicado();
    }
    public function store(InIndicadoCrearRequest $request)
    {
        $this->infoxxxx = 'Indicador creado con éxito';
        $this->requestx = $request;
        return   $this->setInIndicado();
    }


    public function show(InIndicado $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->area_id;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['leerxxxx', 'leerxxxx']]);
    }

    public function inactivate(InIndicado $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->area_id;
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR INDICADOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(InIndicado $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Indicador inactivado correctamente');
    }

    public function activate(InIndicado $modeloxx)
    {
        $this->opciones['parametr'][] = $modeloxx->area_id;
        $this->getBotones(['activarx', [], 1, 'ACTIVAR INIDICADOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }
    public function activar(InIndicado $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Indicador activado correctamente');
    }
}

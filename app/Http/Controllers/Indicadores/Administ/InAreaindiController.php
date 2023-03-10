<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Administ\Area;
use App\Models\Indicadores\Administ\InAreaindi;
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
class InAreaindiController extends Controller
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
        'permisox' => 'areaindi',
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
    
    public function store(Request $request, $padrexxx)
    {
        $request->request->add(['area_id' => $padrexxx, 'in_indicado_id' => $request->valuexxx]);
        $this->setInAreaindiAjax([
            'requestx' => $request,
            'modeloxx' => null,
        ]);
        return response()->json('');
    }


    public function inactivate(InAreaindi $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['borrarxx', 'destroyx']];
        $this->padrexxx = $modeloxx->area;
        $this->opciones['parametr'][] = $modeloxx->area_id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR']);
        return $this->view();
    }


    public function destroy(InAreaindi $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Indicador inactivado correctamente');
    }

    public function activate(InAreaindi $modeloxx)
    {
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['activarx', 'activarx']];
        $this->padrexxx = $modeloxx->area;
        $this->opciones['parametr'][] = $modeloxx->area_id;
        $this->getRespuesta(['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR']);
        return $this->view();
    }
    public function activar(InAreaindi $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->area_id])
            ->with('info', 'Indicador activado correctamente');
    }
}

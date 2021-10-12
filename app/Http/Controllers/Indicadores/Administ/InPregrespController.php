<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\Administ\InPregrespEditarRequest;
use App\Models\Indicadores\Administ\InGrupregu;
use App\Models\Indicadores\Administ\InPregresp;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Pregresp\PregrespVistasTrait;
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
class InPregrespController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use PregrespVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    private $opciones = [
        'permisox' => 'pregresp',
        'modeloxx' => null,
        'vistaxxx' => null,
        'botoform' => [],
    ];
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->redirect = $this->opciones['permisox'].'.editarxx';
    }

    public function index(InGrupregu $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getPestanias(['tipoxxxx'=>5]);
        $this->getPregrespIndex(['paralist' => [$padrexxx->id]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }



    public function store(Request $request, $padrexxx)
    {
        $request->request->add([
            'in_libagrup_id' => $padrexxx,
            'temacombo_id' => $request->valuexxx,
            'prm_disparar_id' => 2732,
        ]);
        $this->requestx = $request;
        $this->setInPregrespAjax([
            'requestx' => $request,
            'modeloxx' => '',
        ]);
        return response()->json('');
    }

    public function edit(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'EDITAR PREGUNTA';
        $this->padrexxx=$modeloxx->inLibagrup;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['editarxx', 'formulario']];
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }


    public function update(InPregrespEditarRequest $request,  InPregresp $modeloxx)
    {
        $this->infoxxxx='Pregunta actualizada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setInPregresp();
    }

    public function show(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'VER PREGUNTA';
        $this->padrexxx=$modeloxx->inLibagrup;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }

    public function inactivate(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'INACTIVAR PREGUNTA';
        $this->padrexxx=$modeloxx->inLibagrup;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['borrarxx', 'borrarxx']];
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR','parametr'=>[$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->estadoid=2;
        return $this->view();
    }


    public function destroy(InPregresp $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_libagrup_id])
            ->with('info', 'Pregunta inactivada correctamente');
    }

    public function activate(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'ACTIVAR PREGUNTA';
        $this->padrexxx=$modeloxx->inLibagrup;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR','parametr'=>[$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx['accionxx'] = ['activarx', 'activarx'];
        return $this->view();
    }
    public function activar(InPregresp $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_libagrup_id])
            ->with('info', 'Pregunta activada correctamente');
    }
}

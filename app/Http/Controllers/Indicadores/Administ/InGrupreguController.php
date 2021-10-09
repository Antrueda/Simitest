<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\Administ\InGrupreguEditarRequest;
use App\Models\Indicadores\Administ\InGrupregu;
use App\Models\Indicadores\Administ\InLibagrup;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Grupregu\GrupreguVistasTrait;
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
class InGrupreguController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use GrupreguVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'grupregu',
        'modeloxx' => null,
        'vistaxxx' => null,
        'botoform' => [],
    ];

    private $dataxxxx = [];
    private $requestx = null;
    private $padrexxx = null;
    private $infoxxxx = 'Asignatura crada con éxito';
    private $redirect = '';

    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(InLibagrup $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getPestanias(['tipoxxxx'=>5]);
        $this->getGrupreguIndex(['paralist' => [$padrexxx->id]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }



    public function store(Request $request, $padrexxx)
    {
        $request->request->add([
            'in_libagrup_id' => $padrexxx,
            'temacombo_id' => $request->valuexxx,
            'prm_disparar_id' => 227,
        ]);
        $this->setInGrupreguAjax([
            'requestx' => $request,
            'modeloxx' => '',
        ]);
        return response()->json('');
    }

    public function edit(InGrupregu $modeloxx)
    {
        $this->padrexxx=$modeloxx->inLibagrup;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx=['accionxx' => ['editarxx', 'formulario']];
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }


    public function update(InGrupreguEditarRequest $request,  InGrupregu $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(InGrupregu $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['leerxxxx', 'leerxxxx'], 'padrexxx' => $modeloxx->in_indiliba]);
    }

    public function inactivate(InGrupregu $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER '];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->in_indiliba]);
    }


    public function destroy(InGrupregu $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
            ->with('info', 'Línea base inactivada correctamente');
    }

    public function activate(InGrupregu $modeloxx)
    {

        $this->getBotones(['activarx', [], 1, 'ACTIVAR LINEA BASE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->in_indiliba]);
    }
    public function activar(InGrupregu $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
            ->with('info', 'Línea base activada correctamente');
    }
}

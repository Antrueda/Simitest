<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Administ\InIndiliba;
use App\Models\Indicadores\Administ\InLibagrup;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Libagrup\LibagrupVistasTrait;
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
class InLibagrupController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use LibagrupVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // traita arma los botones
    use CombosTrait;

    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'grupregu',
        'modeloxx' => null,
        'vistaxxx' => null,
        'botoform' => [],
    ];

    private $dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
    private $requestx = null;
    private $padrexxx = null;
    private $infoxxxx = 'Asignatura crada con éxito';
    private $redirect = '';

    public function __construct()
    {
        $this->opciones['permisox'] = 'libagrup';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(InIndiliba $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr'] = [$this->padrexxx->id];
        $this->getPestanias(['tipoxxxx'=>3]);
        $this->getLibagrupIndex(['paralist' => $this->opciones['parametr']]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(InIndiliba $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'CREAR','parametr'=>[$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }

    public function store(Request $request)
    {
        return  $this->setInLibagrup([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Grupo creado con éxito',
            'permisox' => $this->opciones['permisox']
        ]);
    }


    public function show(InLibagrup $modeloxx)
    {
        $this->padrexxx=$modeloxx->inIndiliba;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx['accionxx'] = ['verxxxxx', 'verxxxxx'];
        return $this->view();
    }

    public function inactivate(InLibagrup $modeloxx)
    {
        $this->padrexxx=$modeloxx->inIndiliba;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR','parametr'=>[$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->estadoid=2;
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx['accionxx'] = ['destroyx', 'destroyx'];
        return $this->view();
    }


    public function destroy(InLibagrup $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
            ->with('info', 'Grupo inactivado correctamente');
    }

    public function activate(InLibagrup $modeloxx)
    {
        $this->padrexxx=$modeloxx->inIndiliba;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR','parametr'=>[$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->opciones['modeloxx']=$modeloxx;
        $this->dataxxxx['accionxx'] = ['activarx', 'activarx'];

        return $this->view();
    }
    public function activar(InLibagrup $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
            ->with('info', 'Grupo activado correctamente');
    }
}

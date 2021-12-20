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
    private $opciones = [
        'permisox' => 'libagrup',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr'=>'indimodu',
        'botoform' => [],
    ];
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(InIndiliba $padrexxx)
    {
        $this->padrexxx=$padrexxx;
        $this->opciones['parametr'] = [$this->padrexxx->id];
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        $this->getLibagrupIndex(['paralist' => $this->opciones['parametr']]);
        return view( 'Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
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
            'infoxxxx' => 'Grupo creado correctamente',
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
        $this->dataxxxx['accionxx'] = ['borrarxx', 'destroyx'];
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

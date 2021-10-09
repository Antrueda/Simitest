<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Administ\InIndiliba;
use App\Models\Indicadores\Administ\InLibagrup;
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

    public function __construct()
    {
        $this->opciones['vistaxxx'] = 'indiadmi';
        $this->opciones['permisox'] = 'libagrup';
        $this->pestania[0]['activexx'] = 'active';
        $this->pestania[0]['pesthija'][1]['muespest'] = true;
        $this->pestania[0]['pesthija'][2]['muespest'] = true;
        $this->pestania[0]['pesthija'][3]['muespest'] = true;
        $this->pestania[0]['pesthija'][3]['activexx'] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(InIndiliba $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->pestania[0]['pesthija'][1]['parametr'] = [$padrexxx->in_areaindi->area_id];
        $this->pestania[0]['pesthija'][2]['parametr'] = [$padrexxx->in_areaindi_id];
        $this->pestania[0]['pesthija'][3]['parametr'] = [$padrexxx->id];
        $this->getPestanias([]);
        $this->getLibagrupIndex(['paralist' => [$padrexxx->id]]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(InIndiliba $padrexxx)
    {
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['leerxxxx', 'leerxxxx'],'padrexxx' => $modeloxx->in_indiliba]);
    }

    public function inactivate(InLibagrup $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR LINEA BASE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->in_indiliba]);
    }


    public function destroy(InLibagrup $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
            ->with('info', 'Línea base inactivada correctamente');
    }

    public function activate(InLibagrup $modeloxx)
    {

        $this->getBotones(['activarx', [], 1, 'ACTIVAR LINEA BASE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->in_indiliba]);
    }
    public function activar(InLibagrup $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
            ->with('info', 'Línea base activada correctamente');
    }
}

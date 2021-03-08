<?php

namespace App\Http\Controllers\Administracion\Temas;

use App\Http\Controllers\Controller;
use App\Models\Parametro;
use App\Models\Temacombo;
use App\Traits\Administracion\Temas\Combpara\CrudTrait;
use App\Traits\Administracion\Temas\Combpara\DataTablesTrait;
use App\Traits\Administracion\Temas\Combpara\ParametrizarTrait;
use App\Traits\Administracion\Temas\Combpara\VistasTrait;
use App\Traits\Administracion\Temas\ListadosTrait;
use App\Traits\Administracion\Temas\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComboParametroController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'combpara';
        $this->opciones['routxxxx'] = 'combpara';
        $this->pestania[1][4] = true;
        $this->pestania[2][5] = 'active';
        $this->pestania[2][4] = true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(Temacombo $padrexxx)
    {
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['tituhead'] = $padrexxx->nombre;
        $this->pestania[1][2] = [$padrexxx->tema_id];
        $this->pestania[2][2] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getPestanias([]);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(Temacombo $padrexxx)
    {
        $this->opciones['padrexxx'] = $padrexxx;
        $this->getBotones(['crear', [], 1, "GUARDAR RESPUESTA", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],]);
    }
    public function store(Request $request, Temacombo $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return response()->json($this->setComboParametro([
            'requestx' => $request,
            'modeloxx' => '',
            'accionxx' => 1,
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Parámetro creado con éxito',
        ]));
    }


    public function show(Parametro $modeloxx)
    {
        $this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, "NUEVO RESPUESTA", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(Temacombo $padrexxx, Parametro $modeloxx)
    {
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id, $modeloxx->id];
        $this->getBotones(['editar', [], 1, "EDITAR RESPUESTA", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],]);
    }


    public function update(Request $request,  Temacombo $padrexxx, Parametro $modeloxx)
    {

        $this->setComboParametro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'accionxx' => 2,
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Parámetro editado con éxito',
        ]);
        return  redirect()
            ->route($this->opciones['routxxxx'], [$padrexxx->id])
            ->with('info', '');
    }

    public function inactivate(Parametro $modeloxx)
    {
        $this->getBotones(['borrar', [], 1, "INACTIVAR RESPUESTA", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Temacombo $padrexxx)
    {
        return response()->json($this->setComboParametro([
            'requestx' => $request,
            'modeloxx' => Parametro::find($request->parametro_id),
            'accionxx' => 3,
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Parámetro inactivado correctamente',
        ]));
    }

    public function activate(Parametro $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, "ACTIVAR RESPUESTA", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar']]);
    }
    public function activar(Request $request, Temacombo $padrexxx, Parametro $modeloxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return response()->json($this->setComboParametro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'accionxx' => 3,
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Parámetro activado correctamente',
        ]));
    }
}

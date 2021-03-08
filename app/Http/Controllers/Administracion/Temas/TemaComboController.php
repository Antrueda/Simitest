<?php

namespace App\Http\Controllers\Administracion\Temas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Temas\TemaComboCrearRequest;
use App\Http\Requests\Administracion\Temas\TemaComboEditarRequest;
use App\Models\Tema;
use App\Models\Temacombo;
use App\Traits\Administracion\Temas\Combo\CrudTrait;
use App\Traits\Administracion\Temas\Combo\DataTablesTrait;
use App\Traits\Administracion\Temas\Combo\ParametrizarTrait;
use App\Traits\Administracion\Temas\Combo\VistasTrait;
use App\Traits\Administracion\Temas\ListadosTrait;
use App\Traits\Administracion\Temas\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemaComboController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'comboxxx';
        $this->opciones['routxxxx'] = 'comboxxx';
        $this->pestania[1][5] = 'active';
        $this->pestania[1][4] = true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(Tema $padrexxx)
    {
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['tituhead'] = $padrexxx->nombre;
        $this->pestania[1][2] = [$padrexxx->id];
        $this->getPestanias($this->opciones);
        $this->getTablas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(Tema $padrexxx)
    {
        $this->opciones['padrexxx'] = $padrexxx;
        $this->getBotones(['crear', [$padrexxx->id], 1, 'GUARDAR COMBO', 'btn btn-sm btn-primary']);
        return $this->view(
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],]
        );
    }
    public function store(TemaComboCrearRequest $request,Tema $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['tema_id' => $padrexxx->id]);
        return $this->setCombo([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Combo creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Temacombo $modeloxx)
    {
        $this->opciones['padrexxx'] = $modeloxx->tema;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario']]);
    }


    public function edit(Temacombo $modeloxx)
    {
        $this->opciones['padrexxx'] = $modeloxx->tema;
        $this->getBotones(['editar', [], 1, 'EDITAR COMBO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);
    }


    public function update(TemaComboEditarRequest $request,  Temacombo $modeloxx)
    {
        return $this->setCombo([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Combo editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Temacombo $modeloxx)
    {
        $this->opciones['padrexxx'] = $modeloxx->tema;
        $this->getBotones(['borrar', [], 1, 'INACTIVAR COMBO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, Temacombo $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->tema_id])
            ->with('info', 'Combo inactivado correctamente');
    }

    public function activate(Temacombo $modeloxx)
    {
        $this->opciones['padrexxx'] = $modeloxx->tema;
        $this->getBotones(['activarx', [], 1, 'ACTIVAR COMBO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }
    public function activar(Request $request, Temacombo $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->tema_id])
            ->with('info', 'Combo activado correctamente');
    }
}

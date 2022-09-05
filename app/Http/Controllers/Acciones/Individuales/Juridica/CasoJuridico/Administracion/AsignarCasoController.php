<?php

namespace App\Http\Controllers\Acciones\Individuales\Juridica\CasoJuridico\Administracion;



use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Sociolegal\AsignarCasoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Sociolegal\AsignarCasoEditarRequest;
use App\Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use App\Models\Acciones\Individuales\SocialLegal\TipoCaso;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\AsignarCaso\CrudTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\AsignarCaso\DataTablesTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\AsignarCaso\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\AsignarCaso\VistasTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Sociolegal\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * FOS Tipo de seguimiento
 */
class AsignarCasoController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'asignacaso';
        $this->opciones['routxxxx'] = 'asignacaso';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create(TipoCaso $padrexxx)
    {
        $this->pestanix['asignacaso'] = [true, $padrexxx];
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [$padrexxx], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]
        );
    }
    public function store(AsignarCasoCrearRequest $request)
    {
        return $this->setAsignarcaso([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Se realizó la asignación ',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(AsociarCaso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A ASIGNACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'], []], 2, 'CREAR ASIGNACIÓN', 'btn btn-sm btn-primary']);

        return $this->view(
            $do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }


    public function edit(AsociarCaso $modeloxx)
    {
        $this->pestanix['asignacaso'] = [true, $modeloxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A ASIGNACIÓN', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR', 'btn btn-sm btn-primary']);
        $do = $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->id]], 2, 'NUEVA ASIGNACION', 'btn btn-sm btn-primary']);
        return $this->view($do, ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]);

    }


    public function update(AsignarCasoEditarRequest $request,  AsociarCaso $modeloxx)
    {
        return $this->setAsignarcaso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Se actualizó la asignación',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(AsociarCaso $modeloxx)
    {
        $this->pestanix['asignacaso'] = [true, $modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR ASIGNACIÓN', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }


    public function destroy(Request $request, AsociarCaso $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Se desactivó la asignación correctamente');
    }

    public function activate(AsociarCaso $modeloxx)
    {
        $this->pestanix['asignacaso'] = [true, $modeloxx->fos_tse_id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR ASIGNACIÓN', 'btn btn-sm btn-primary']),
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'], 'padrexxx' => $modeloxx->fos_tse]
        );
    }
    public function activar(Request $request, AsociarCaso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Caso activado correctamente');
    }
}

<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Asignatura\EdaAsignatuCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Asignatura\EdaAsignatuEditarRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Asignatura\EdaAsignatuInactivarRequest;
use App\Models\Educacion\Administ\Pruediag\EdaAsignatu;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edasignatur\EdasignaturParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edasignatur\EdasignaturVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\PestaniasGeneralTrait;

/**
 * Administración de la asignatura
 */
class EdaAsignatuController extends Controller
{
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'edaasign',
        'modeloxx' => null,
        'botoform' => [],
    ];
    private $dataxxxx = [];
    private $requestx = null;
    private $infoxxxx = 'Asignatura crada con éxito';
    private $redirect = '';
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use EdasignaturParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use EdasignaturVistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasGeneralTrait;
    use PruediagPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->pestania[$this->opciones['permisox']][4] = 'active';
        $this->redirect = $this->opciones['permisox'].'.editarxx';
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getDtAsignaturas();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'crearxxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
        return $this->view();
    }

    public function store(EdaAsignatuCrearRequest $request)
    {
        $this->requestx = $request;
        return $this->setEdaAsignatu();
    }


    public function show(EdaAsignatu $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }


    public function edit(EdaAsignatu $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        return $this->view();
    }


    public function update(EdaAsignatuEditarRequest $request,  EdaAsignatu $modeloxx)
    {
        $this->infoxxxx='Asignatura actualizada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaAsignatu();
    }

    public function inactivate(EdaAsignatu $modeloxx)
    {
        $this->estadoid=2;
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'borrarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        return $this->view();
    }


    public function destroy(EdaAsignatuInactivarRequest $request, EdaAsignatu $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Asignatura inactivada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaAsignatu();
    }

    public function activate(EdaAsignatu $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'activarx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        return $this->view();
    }
    public function activar(EdaAsignatuInactivarRequest $request, EdaAsignatu $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Asignatura activada correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaAsignatu();
    }
}

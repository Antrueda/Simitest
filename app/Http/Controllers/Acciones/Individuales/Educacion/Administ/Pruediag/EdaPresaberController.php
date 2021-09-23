<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Edapresaber\EdaPresaberCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Edapresaber\EdaPresaberEditarRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Edapresaber\EdaPresaberInactivarRequest;
use App\Models\Educacion\Administ\Pruediag\EdaPresaber;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edapresaber\EdapresaberParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edapresaber\EdapresaberVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\PestaniasGeneralTrait;

/**
 * Administración de los presaberes
 */
class EdaPresaberController extends Controller
{
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'edapresa',
        'modeloxx' => null,
        'botoform' => [],
    ];
    private $dataxxxx = [];
    private $requestx = null;
    private $infoxxxx = 'Presaber crado con éxito';
    private $redirect = '';
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use EdapresaberParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use EdapresaberVistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasGeneralTrait;
    use PruediagPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->pestanix=$this->opciones['permisox'];
        $this->redirect = $this->opciones['permisox'].'.editarxx';
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getDtPresaberes();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRESABERES'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'crearxxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
        return $this->view();
    }

    public function store(EdaPresaberCrearRequest $request)
    {
        $this->requestx = $request;
        return $this->setEdaPresaber();
    }


    public function show(EdaPresaber $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRESABERES'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }


    public function edit(EdaPresaber $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRESABERES'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        return $this->view();
    }


    public function update(EdaPresaberEditarRequest $request,  EdaPresaber $modeloxx)
    {
        $this->infoxxxx='Presaber actualizado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaPresaber();
    }

    public function inactivate(EdaPresaber $modeloxx)
    {
        $this->estadoid=2;
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRESABERES'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'borrarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        return $this->view();
    }


    public function destroy(EdaPresaberInactivarRequest $request, EdaPresaber $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Presaber inactivado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaPresaber();
    }

    public function activate(EdaPresaber $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A PRESABERES'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'activarx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        return $this->view();
    }

    public function activar(EdaPresaberInactivarRequest $request, EdaPresaber $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Presaber activado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaPresaber();
    }
}

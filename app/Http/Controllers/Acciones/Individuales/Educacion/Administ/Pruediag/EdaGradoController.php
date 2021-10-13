<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\EdaGradoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\EdaGradoEditarRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\EdaGradoInactivarRequest;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edagrado\EdagradoParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edagrado\EdagradoVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\PestaniasGeneralTrait;
use Illuminate\Support\Facades\Auth;

/**
 * Administración de la asignatura
 */
class EdaGradoController extends Controller
{
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'edagrado',
        'modeloxx' => null,
        'botoform' => [],
    ];
    private $dataxxxx = [];
    private $requestx = null;
    private $infoxxxx = 'Grado crado con éxito';
    private $redirect = '';
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use EdagradoParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use EdagradoVistasTrait; // trait que arma la logica para lo metodos: crud
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
        $this->getDtGrados();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A GRADOS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'crearxxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['crearxxx', 'formulario']];
        return $this->view();
    }

    public function store(EdaGradoCrearRequest $request)
    {
        $this->requestx = $request;
        return $this->setEdaGrado();
    }


    public function show(EdaGrado $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A GRADOS'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }


    public function edit(EdaGrado $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A GRADOS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['editarxx', 'formulario']];
        return $this->view();
    }


    public function update(EdaGradoEditarRequest $request,  EdaGrado $modeloxx)
    {
        $this->infoxxxx='Grado actualizado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaGrado();
    }

    public function inactivate(EdaGrado $modeloxx)
    {
        $this->estadoid=2;
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A GRADOS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'borrarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        return $this->view();
    }


    public function destroy(EdaGradoInactivarRequest $request, EdaGrado $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Grado inactivado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaGrado();
    }

    public function activate(EdaGrado $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A GRADOS'];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'activarx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        return $this->view();
    }
    public function activar(EdaGradoInactivarRequest $request, EdaGrado $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Grado activado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaGrado();
    }
}

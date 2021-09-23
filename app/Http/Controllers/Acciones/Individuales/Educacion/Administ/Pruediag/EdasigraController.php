<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\Administ\Pruediag\Edasigra\EdasigraInactivarRequest;
use App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edasigra\EdasigraParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edasigra\EdasigraVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\PruediagPestaniasTrait;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\PestaniasGeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Administración de los presaberes
 */
class EdasigraController extends Controller
{
    private $estadoid = 1;
    private $opciones = [
        'permisox' => 'edasigra',
        'modeloxx' => null,
        'botoform' => [],
    ];
    private $dataxxxx = [];
    private $requestx = null;
    private $infoxxxx = 'Presaber crado con éxito';
    private $redirect = '';
    use PruediagListadosTrait; // trait que arma las consultas para las datatables
    use PruediagCrudTrait; // trait donde se hace el crud de localidades
    use EdasigraParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PruediagDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use EdasigraVistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasGeneralTrait;
    use PruediagPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->pestanix=$this->opciones['permisox'];
        $this->pestania[$this->opciones['permisox']][3] = true;
    }

    public function index(EdaGrado $padrexxx)
    {
        $this->opciones['tituhead']='GRADO: '.$padrexxx->s_grado;
        $this->opciones['parametr']=[$padrexxx->id];
        $this->pestania[$this->opciones['permisox']][1] = [$padrexxx->id];
        $this->getPestanias([]);
        $this->getDtEdasigras(['padrexxx'=>$padrexxx->id]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function store(Request $request,EdaGrado $padrexxx)
    {
        if ($request->ajax()) {
            $padrexxx->edaAsignatus()->attach([$request->valuexxx => [
                'user_crea_id' => Auth::id(),
                'user_edita_id' => Auth::id(),
                'sis_esta_id' => 1,
            ]]);
            return response()->json(['mensajex'=>'Asignatura asignada al grado: '.$padrexxx->s_grado.' correctamente']);
        }
    }



    public function inactivate(EdaAsignatuEdaGrado $modeloxx)
    {
        $this->estadoid=2;
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS','parametr'=>[$modeloxx->eda_grado_id]];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'borrarxx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        return $this->view();
    }


    public function destroy(EdasigraInactivarRequest $request, EdaAsignatuEdaGrado $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Presaber inactivado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaAsignatuEdaGrado();
    }

    public function activate(EdaAsignatuEdaGrado $modeloxx)
    {
        $this->opciones['modeloxx'] = $modeloxx;
        $botonxxx = ['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER ASIGNATURAS','parametr'=>[$modeloxx->eda_grado_id]];
        $this->getRespuesta($botonxxx);
        $botonxxx = ['accionxx' => 'activarx', 'btnxxxxx' => 'b'];
        $this->getRespuesta($botonxxx);
        $this->dataxxxx = ['accionxx' => ['activarx', 'activarx']];
        return $this->view();
    }

    public function activar(EdasigraInactivarRequest $request, EdaAsignatuEdaGrado $modeloxx)
    {
        $this->redirect=$this->opciones['permisox'];
        $this->infoxxxx='Presaber activado correctamente';
        $this->opciones['modeloxx'] = $modeloxx;
        $this->requestx = $request;
        return $this->setEdaAsignatuEdaGrado();
    }
}

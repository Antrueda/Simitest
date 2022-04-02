<?php

namespace App\Http\Controllers\CuestionarioGustos;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdTiactividad;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiCrudTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\AdmiAsd\TiacCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\AdmiAsd\TiacEditarRequest;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiActiDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiTiac\AdmiTiacVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\AdmiActiAsd\AdmiTiac\AdmiTiacParametrizarTrait;



class AdmiCateCgihController extends Controller
{

    use AdmiTiacVistasTrait;
    use AdmiActiDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiActiListadosTrait; // trait que arma las consultas para las datatables
    use AdmiActiPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiTiacParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiActiCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aasdtiac';
        $this->opciones['routxxxx'] = 'aasdtiac';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasTiposActividad();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(TiacCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setTiposActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tipo de actividad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AsdTiactividad $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AsdTiactividad $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(TiacEditarRequest $request,  AsdTiactividad $modeloxx)
    {
        return $this->setTiposActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tipo de actividad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AsdTiactividad $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AsdTiactividad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de actividad inactivada correctamente');
    }

    public function activate(AsdTiactividad $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AsdTiactividad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de actividad activada correctamente');
    }
}

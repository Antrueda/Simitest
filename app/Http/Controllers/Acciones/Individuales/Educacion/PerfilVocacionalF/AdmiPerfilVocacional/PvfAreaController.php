<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfArea;

use App\Http\Requests\Administracion\AdmiPerfilVocacional\PvfAreaCrearRequest;

use App\Http\Requests\Administracion\AdmiPerfilVocacional\PvfAreaEditarRequest;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiPvfDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiArea\PvfAreaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional\AdmiArea\PvfAreaParametrizarTrait;


class PvfAreaController extends Controller
{
    use PvfAreaVistasTrait;
    use PvfAreaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiPvfDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiPvfListadosTrait; // trait que arma las consultas para las datatables
    use AdmiPvfPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiPvfCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'apvfarea';
        $this->opciones['routxxxx'] = 'apvfarea';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasAreas();
        return view($this->opciones['rutacarp'] . 'AdmiPerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ÁREA DE INTERÉS', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(PvfAreaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Área de interés creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(PvfArea $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(PvfArea $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR ÁREA DE INTERÉS', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(PvfAreaEditarRequest $request,PvfArea $modeloxx)
    {
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Área de interés editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(PvfArea $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ÁREA DE INTERÉS', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, PvfArea $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Área de interés inactivada correctamente');
    }

    public function activate(PvfArea $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ÁREA DE INTERÉS', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, PvfArea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Área de interés activada correctamente');
    }
}

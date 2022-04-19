<?php


namespace App\Http\Controllers\Acciones\Individuales\Educacion\CuestionarioGustos;


use Illuminate\Http\Request;
use App\Models\Permissionext;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\AdminCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\AdminHabilidad;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiCuesCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiCuesListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiCuesPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiCuesDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiHabilidad\AdmiHabilidadVistasTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\HabilidadEditRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\HabilidadCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiHabilidad\AdmiHabilidadParametrizarTrait;


class AdmiHabiCgihController extends Controller
{
    
    use AdmiHabilidadVistasTrait;
    use AdmiCuesDataTablesTrait;
    use AdmiCuesListadosTrait;
    use AdmiCuesPestaniasTrait;
    use AdmiHabilidadParametrizarTrait;
    use AdmiCuesCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'cgihabi';
        $this->opciones['routxxxx'] = 'cgihabi';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index($padrexxx)
    {
        $this->pestania[1][2] = [$padrexxx];
        $this->getPestanias([]);
        $this->getTablasActividades($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create($padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }


    public function store(HabilidadCrearRequest $request,AdminCategoria $padrexxx)
    {

        dd($padrexxx);
        $request->request->add(['tipos_actividad_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'itemxxxx' =>$padrexxx->item,
            'infoxxxx' =>       'Actividad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AdminHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->tipos_actividad_id]);
    }


    public function edit(AdminHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->tipos_actividad_id]);
    }


    public function update(HabilidadEditRequest $request,  AdminHabilidad $modeloxx)
    {
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Actividad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AdminHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->tipos_actividad_id]);
    }


    public function destroy(Request $request, AdminHabilidad $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad inactivada correctamente');
    }

    public function activate(AdminHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipos_actividad_id];
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTIVIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->tipos_actividad_id]);

    }
    public function activar(Request $request, AdminHabilidad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Actividad activada correctamente');
    }
}

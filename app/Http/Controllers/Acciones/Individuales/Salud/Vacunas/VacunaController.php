<?php


namespace App\Http\Controllers\Acciones\Individuales\Salud\Vacunas;


use Illuminate\Http\Request;
use App\Models\Permissionext;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihHabilidad;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\HabilidadEditRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\HabilidadCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\CgihHabilidad\CgihHabilidadVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\CgihHabilidad\CgihHabilidadParametrizarTrait;



class VacunaController extends Controller
{
    
    use CgihHabilidadVistasTrait;
    use AdmiCuesDataTablesTrait;
    use AdmiCuesListadosTrait;
    use AdmiCuesPestaniasTrait;
    use CgihHabilidadParametrizarTrait;
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
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR HABILIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }


    public function store(HabilidadCrearRequest $request,CgihCategoria $padrexxx)
    {

        $request->request->add(['categorias_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'itemxxxx' =>$padrexxx->item,
            'infoxxxx' =>       'Habilidad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(CgihHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->categorias_id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->categorias_id]);
    }


    public function edit(CgihHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->categorias_id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR HABILIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->categorias_id]);
    }


    public function update(HabilidadEditRequest $request,  CgihHabilidad $modeloxx)
    {
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Habilidad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(CgihHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->categorias_id];
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR HABILIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->categorias_id]);
    }


    public function destroy(Request $request, CgihHabilidad $modeloxx)
    {


        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->categorias_id])
            ->with('info', 'Habilidad inactivada correctamente');
    }

    public function activate(CgihHabilidad $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->categorias_id];
        $this->getBotones(['activarx', [], 1, 'ACTIVAR HABILIDAD', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->categorias_id]);

    }
    public function activar(Request $request, CgihHabilidad $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->categorias_id])
            ->with('info', 'Habilidad activada correctamente');
    }
}

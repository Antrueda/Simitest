<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Vacunas;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Vacunas\Administracion\TipovacunaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Vacunas\Administracion\TipovacunaEditarRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;

use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\CgihCategoria\CgihCategoriaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\CgihCategoria\CgihCategoriaParametrizarTrait;



class TipoVacunaController extends Controller
{
    use CgihCategoriaVistasTrait;
    use AdmiCuesDataTablesTrait;
    use AdmiCuesListadosTrait;
    use AdmiCuesPestaniasTrait;
    use CgihCategoriaParametrizarTrait;
    use AdmiCuesCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'tipovacuna';
        $this->opciones['routxxxx'] = 'tipovacuna';
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
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR TIPO DE VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }
    public function store(TipovacunaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setTiposActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Tipo de Vacuna creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(CgihCategoria $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(CgihCategoria $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR TIPO DE VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(TipovacunaEditarRequest $request,  CgihCategoria $modeloxx)
    {
        return $this->setTiposActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Tipo de Vacuna editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(CgihCategoria $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR TIPO DE VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, CgihCategoria $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de Vacuna inactivada correctamente');
    }

    public function activate(CgihCategoria $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR TIPO DE VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, CgihCategoria $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Tipo de Vacuna activada correctamente');
    }
}

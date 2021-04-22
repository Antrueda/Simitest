<?php

namespace app\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Ubicacion\SisDepartamCrearRequest;
use App\Http\Requests\Administracion\Ubicacion\SisDepartamEditarRequest;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisPai;
use App\Traits\Administracion\Ubicacion\CrudTrait;
use App\Traits\Administracion\Ubicacion\Departamento\DataTablesTrait;
use App\Traits\Administracion\Ubicacion\Departamento\ParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Departamento\VistasTrait;
use App\Traits\Administracion\Ubicacion\ListadosTrait;
use App\Traits\Administracion\Ubicacion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisDepartamentoController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'departam';
        $this->opciones['routxxxx'] = 'departam';
        $this->pestania[1][5]='active';
        $this->pestania[1][4]=true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(SisPai $padrexxx)
    {
        $this->pestania[1][2]=[$padrexxx->id];

        $this->getPestanias([]);
        $this->getTablasIndex($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisPai $padrexxx)
    {
        $this->pestania[1][2]=[$padrexxx->id];
        $this->getBotones(['crear', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(SisDepartamCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setDepartamento([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => $this->opciones['infocont'].' creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisDepartam $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_pai]);
    }


    public function edit(SisDepartam $modeloxx)
    {

        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_pai]);
    }


    public function update(SisDepartamEditarRequest $request,  SisDepartam $modeloxx)
    {
        return $this->setDepartamento([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => $this->opciones['infocont'].' editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisDepartam $modeloxx)
    {
        $this->getBotones(['borrar', [$modeloxx->sis_pai_id], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_pai]);
    }


    public function destroy(Request $request, SisDepartam $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_pai_id])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(SisDepartam $modeloxx)
    {
        $this->getBotones(['activarx', [$modeloxx->sis_pai_id], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_pai]);

    }
    public function activar(Request $request, SisDepartam $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_pai_id])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}

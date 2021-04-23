<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Ubicacion\SisMunicipioCrearRequest;
use App\Http\Requests\Administracion\Ubicacion\SisMunicipioEditarRequest;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisMunicipio;
use App\Traits\Administracion\Ubicacion\Municipio\DataTablesTrait;
use App\Traits\Administracion\Ubicacion\Municipio\ParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Municipio\VistasTrait;
use App\Traits\Administracion\Ubicacion\UbicacionCrudTrait;
use App\Traits\Administracion\Ubicacion\UbicacionListadosTrait;
use App\Traits\Administracion\Ubicacion\UbicacionPestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisMunicipioController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use UbicacionPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use UbicacionListadosTrait; // trait que arma las consultas para las datatables
    use UbicacionCrudTrait; // trait donde se hace el crud de localidades

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'municipi';
        $this->opciones['routxxxx'] = 'municipi';
        $this->pestania[1][4]=true;
        $this->pestania[2][5]='active';
        $this->pestania[2][4]=true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(SisDepartam $padrexxx)
    {
        $this->pestania[1][2]=[$padrexxx->sis_pai_id];
        $this->pestania[2][2]=[$padrexxx->id];
        $this->getPestanias([]);
        $this->getTablasIndex($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisDepartam $padrexxx)
    {
        $this->getBotones(['crear', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(SisMunicipioCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setMunicipio([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => $this->opciones['infocont'].' creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisMunicipio $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_departam]);
    }


    public function edit(SisMunicipio $modeloxx)
    {

        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_departam]);
    }


    public function update(SisMunicipioEditarRequest $request,  SisMunicipio $modeloxx)
    {
        return $this->setMunicipio([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => $this->opciones['infocont'].' editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisMunicipio $modeloxx)
    {
        $this->getBotones(['borrar', [], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_departam]);
    }


    public function destroy(Request $request, SisMunicipio $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_departam_id])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(SisMunicipio $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_departam]);

    }
    public function activar(Request $request, SisMunicipio $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_departam_id])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}

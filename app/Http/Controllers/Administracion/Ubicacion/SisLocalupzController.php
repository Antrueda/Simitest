<?php

namespace app\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Ubicacion\SisLocalupzCrearRequest;
use App\Http\Requests\Administracion\Ubicacion\SisLocalupzEditarRequest;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use App\Traits\Administracion\Ubicacion\Localupz\LocalupzDataTablesTrait;
use App\Traits\Administracion\Ubicacion\Localupz\LocalupzParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Localupz\LocalupzVistasTrait;
use App\Traits\Administracion\Ubicacion\UbicacionCrudTrait;
use App\Traits\Administracion\Ubicacion\UbicacionListadosTrait;
use App\Traits\Administracion\Ubicacion\UbicacionPestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisLocalupzController extends Controller
{
    use LocalupzParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use UbicacionPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use UbicacionListadosTrait; // trait que arma las consultas para las datatables
    use UbicacionCrudTrait; // trait donde se hace el crud de localidades
    use LocalupzDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use LocalupzVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'localupz';
        $this->opciones['routxxxx'] = 'localupz';
        $this->pestania[4][5]='active';
        $this->pestania[4][4]=true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(SisLocalidad $padrexxx)
    {
        $this->pestania[4][2]=[$padrexxx->id];

        $this->getPestanias([]);
        $this->getTablasIndexLDT($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisLocalidad $padrexxx)
    {
        $this->getBotones(['crear', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(SisLocalupzCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setLocalupz([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => $this->opciones['infocont'].' asignada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisLocalupz $modeloxx)
    {
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_localidad]);
    }


    public function edit(SisLocalupz $modeloxx)
    {

        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_localidad]);
    }


    public function update(SisLocalupzEditarRequest $request,  SisLocalupz $modeloxx)
    {
        return $this->setLocalupz([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => $this->opciones['infocont'].' editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisLocalupz $modeloxx)
    {
        $this->getBotones(['borrar', [$modeloxx->sis_localidad_id], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_localidad]);
    }


    public function destroy(Request $request, SisLocalupz $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_localidad_id])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(SisLocalupz $modeloxx)
    {
        $this->getBotones(['activarx', [$modeloxx->sis_localidad_id], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_localidad]);

    }
    public function activar(Request $request, SisLocalupz $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_localidad_id])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}

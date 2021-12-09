<?php

namespace App\Http\Controllers\Administracion\Ubicacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Ubicacion\SisUpzbarriCrearRequest;
use App\Http\Requests\Administracion\Ubicacion\SisUpzbarriEditarRequest;
use App\Models\Sistema\SisLocalupz;
use App\Models\Sistema\SisUpzbarri;
use App\Traits\Administracion\Ubicacion\Upzbarri\UpzbarriDataTablesTrait;
use App\Traits\Administracion\Ubicacion\Upzbarri\UpzbarriParametrizarTrait;
use App\Traits\Administracion\Ubicacion\Upzbarri\UpzbarriVistasTrait;
use App\Traits\Administracion\Ubicacion\UbicacionCrudTrait;
use App\Traits\Administracion\Ubicacion\UbicacionListadosTrait;
use App\Traits\Administracion\Ubicacion\UbicacionPestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SisUpzbarriController extends Controller
{
    use UpzbarriParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use UbicacionPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use UbicacionListadosTrait; // trait que arma las consultas para las datatables
    use UbicacionCrudTrait; // trait donde se hace el crud de localidades
    use UpzbarriDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use UpzbarriVistasTrait; // trait que arma la logica para lo metodos: crud
    use CombosTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'barriupz';
        $this->opciones['routxxxx'] = 'barriupz';
        $this->pestania[4][4]=true;
        $this->pestania[6][5]='active';
        $this->pestania[6][4]=true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(SisLocalupz $padrexxx)
    {
        $this->pestania[4][2]=[$padrexxx->sis_localidad_id];
        $this->pestania[6][2]=[$padrexxx->id];

        $this->getPestanias([]);
        $this->getTablasIndexLDT($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisLocalupz $padrexxx)
    {
        $this->getBotones(['crear', [], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(SisUpzbarriCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setUpzbarri([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => $this->opciones['infocont'].' asignado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SisUpzbarri $modeloxx)
    {
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->sis_localupz]);
    }


    public function edit(SisUpzbarri $modeloxx)
    {

        $this->getBotones(['editar', [], 1, "EDITAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->sis_localupz]);
    }


    public function update(SisUpzbarriEditarRequest $request,  SisUpzbarri $modeloxx)
    {
        return $this->setUpzbarri([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => $this->opciones['infocont'].' editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SisUpzbarri $modeloxx)
    {
        $this->getBotones(['borrar', [$modeloxx->sis_localupz_id], 1, "INACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_localupz]);
    }


    public function destroy(Request $request, SisUpzbarri $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_localupz_id])
            ->with('info', $this->opciones['infocont'].' inactivado correctamente');
    }

    public function activate(SisUpzbarri $modeloxx)
    {
        $this->getBotones(['activarx', [$modeloxx->sis_localupz_id], 1, "ACTIVAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        return $this->getViewLVT(['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_localupz]);

    }
    public function activar(Request $request, SisUpzbarri $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_localupz_id])
            ->with('info', $this->opciones['infocont'].' activado correctamente');
    }
}

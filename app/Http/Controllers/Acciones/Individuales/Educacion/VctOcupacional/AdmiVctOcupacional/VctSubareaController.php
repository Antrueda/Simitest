<?php
namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoSubarea;

use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctSubareaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctSubareaEditarRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiSubarea\AdmiSubareaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiSubarea\AdmiSubareaParametrizarTrait;

class VctSubareaController extends Controller
{
    use AdmiSubareaVistasTrait;
    use AdmiSubareaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVctDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVctListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVctCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'avctsuba';
        $this->opciones['routxxxx'] = 'avctsuba';
        $this->pestania[1][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasSubareas();
        return view($this->opciones['rutacarp'] . 'AdmiVctOcupacional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VctSubareaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setSubarea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Sub-área creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VctoSubarea $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VctoSubarea $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(VctSubareaEditarRequest $request,VctoSubarea $modeloxx)
    {
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Sub-área editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VctoSubarea $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VctoSubarea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Sub-área inactivada correctamente');
    }

    public function activate(VctoSubarea $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }

    public function activar(Request $request, VctoSubarea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Sub-área activada correctamente');
    }
}

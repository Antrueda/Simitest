<?php
namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoArea;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctAreaEditRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctAreaCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiArea\AdmiAreaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiArea\AdmiAreaParametrizarTrait;

class VctAreaController extends Controller
{
    use AdmiAreaVistasTrait;
    use AdmiAreaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVctDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVctListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVctCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'avctarea';
        $this->opciones['routxxxx'] = 'avctarea';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasAreas();
        return view($this->opciones['rutacarp'] . 'AdmiVctOcupacional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VctAreaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Área creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VctoArea $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VctoArea $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(VctAreaEditRequest $request,VctoArea $modeloxx)
    {
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Área editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VctoArea $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VctoArea $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Área inactivada correctamente');
    }

    public function activate(VctoArea $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }

    public function activar(Request $request, VctoArea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Área activada correctamente');
    }
}

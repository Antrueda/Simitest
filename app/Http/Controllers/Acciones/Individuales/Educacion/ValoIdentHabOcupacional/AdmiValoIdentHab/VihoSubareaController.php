<?php
namespace App\Http\Controllers\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihSubarea;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiSubarea\AdmiSubareaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiSubarea\AdmiSubareaParametrizarTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\VihAreaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\VihSubareaEditarRequest;


class VihoSubareaController extends Controller
{
    use AdmiSubareaParametrizarTrait;
    use AdmiSubareaVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiVihDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVihListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVihPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVihCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $padre = request()->route('padrexxx');
        if ($padre != null) {
           $data = VihArea::select('id','nombre')->findOrFail($padre);
           $this->pestania[1][3] = 'SUB-ÁREAS '.strtoupper($data->nombre);
        }
        $this->opciones['permisox'] = 'avihsuba';
        $this->opciones['routxxxx'] = 'avihsuba';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index($padrexxx)
    {
        $this->pestania[1][2] = [$padrexxx];
        $this->getPestanias([]);
        $this->getTablasSubareas($padrexxx);
        return view($this->opciones['rutacarp'] . 'AdmiValoIdentHab.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create($padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }

    public function store(VihAreaCrearRequest $request,VihArea $padrexxx)
    {
        $request->request->add(['vih_area_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setSubarea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Sub-área creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VihSubarea $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->vih_area_id]);
    }

    public function edit(VihSubarea $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->vih_area_id]);
    }

    public function update(VihSubareaEditarRequest $request,  VihSubarea $modeloxx)
    {
        return $this->setSubarea([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Sub-área editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VihSubarea $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->vih_area_id]);
    }

    public function destroy(Request $request, VihSubarea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->vih_area_id])
            ->with('info', 'Sub-área inactivada correctamente');
    }

    public function activate(VihSubarea $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR SUB-ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->vih_area_id]);
    }

    public function activar(Request $request, VihSubarea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->vih_area_id])
            ->with('info', 'Sub-área activada correctamente');
    }
}

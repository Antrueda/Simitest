<?php
namespace App\Http\Controllers\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\VihAreaCrearRequest;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiVihDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiArea\AdmiAreaVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiArea\AdmiAreaParametrizarTrait;

class VihoAreaController extends Controller
{
    use AdmiAreaVistasTrait;
    use AdmiAreaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVihDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVihListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVihPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVihCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'aviharea';
        $this->opciones['routxxxx'] = 'aviharea';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasAreas();
        return view($this->opciones['rutacarp'] . 'AdmiValoIdentHab.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VihAreaCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Área creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VihArea $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VihArea $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(VihAreaCrearRequest $request,VihArea $modeloxx)
    {
        return $this->setArea([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Área editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VihArea $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VihArea $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Área inactivada correctamente');
    }

    public function activate(VihArea $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ÁREA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }

    public function activar(Request $request, VihArea $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Área activada correctamente');
    }
}

<?php
namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoItem;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiVctDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctItemCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctItemEditarRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiItem\AdmiItemVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\AdmiItem\AdmiItemParametrizarTrait;

class VctItemController extends Controller
{
    use AdmiItemVistasTrait;
    use AdmiItemParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVctDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVctListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVctCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'avctitem';
        $this->opciones['routxxxx'] = 'avctitem';
        $this->pestania[2][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        
        $this->getPestanias([]);
        $this->getTablasItems();
        return view($this->opciones['rutacarp'] . 'AdmiVctOcupacional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ITEM', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VctItemCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setItem([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Item creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VctoItem $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VctoItem $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ITEM', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(VctItemEditarRequest $request,VctoItem $modeloxx)
    {
        return $this->setItem([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Item editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VctoItem $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ITEM', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VctoItem $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Item inactivado correctamente');
    }

    public function activate(VctoItem $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ITEM', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }

    public function activar(Request $request, VctoItem $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Item activado correctamente');
    }
}

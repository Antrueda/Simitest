<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdAsoComponente;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\LabrrdAsocomponeteEditRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\LabrrdAsocomponeteCrearRequest;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiAsocomponentes\AsocomponenteVistasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiAsocomponentes\AsocomponenteParametrizarTrait;

class LabrrdAsocomponentesController extends Controller
{
    use AsocomponenteParametrizarTrait;
    use AsocomponenteVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiLabrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiLabrrdListadosTrait; // trait que arma las consultas para las datatables
    use AdmiLabrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiLabrrdCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'labrrdac';
        $this->opciones['routxxxx'] = 'labrrdac';
        $this->pestania[1][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablaAsocomponentes();
        return view($this->opciones['rutacarp'] . 'AdmiLabrrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ASOCIACIÓN COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(LabrrdAsocomponeteCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsocomponentes([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Asociación componente creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(LabrrdAsoComponente $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(LabrrdAsoComponente $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ASOCIACIÓN COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(LabrrdAsocomponeteEditRequest $request, LabrrdAsoComponente $modeloxx)
    {
        return $this->setAsocomponentes([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Asociación componente editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(LabrrdAsoComponente $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASOCIACIÓN COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->sis_nnaj]);
    }

    public function destroy(Request $request, LabrrdAsoComponente $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asociación componente inactivada correctamente');
    }

    public function activate(LabrrdAsoComponente $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASOCIACIÓN COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, LabrrdAsoComponente $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Asociación componente activada correctamente');
    }
}

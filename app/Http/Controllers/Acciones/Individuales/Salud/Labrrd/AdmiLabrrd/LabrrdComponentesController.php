<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdComponente;

use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiLabrrdDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\LabrrdComponenteEditRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\LabrrdComponenteCrearRequest;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiComponentes\AdmiComponentesVistasTrait;
use App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\AdmiComponentes\AdmiComponentesParametrizarTrait;


class LabrrdComponentesController extends Controller
{
    use AdmiComponentesParametrizarTrait;
    use AdmiComponentesVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiLabrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiLabrrdListadosTrait; // trait que arma las consultas para las datatables
    use AdmiLabrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiLabrrdCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'labrrdco';
        $this->opciones['routxxxx'] = 'labrrdco';
        $this->pestania[0][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablaComponentes();
        return view($this->opciones['rutacarp'] . 'AdmiLabrrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario']]);
    }

    public function store(LabrrdComponenteCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setLabrrdComponentes([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Componente creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(LabrrdComponente $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(LabrrdComponente $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario']]);
    }

    public function update(LabrrdComponenteEditRequest $request,  LabrrdComponente $modeloxx)
    {
        return $this->setLabrrdComponentes([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Componente editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(LabrrdComponente $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, LabrrdComponente $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'])
            ->with('info', 'Componente inactivada correctamente');
    }

    public function activate(LabrrdComponente $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR COMPONENTE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, LabrrdComponente $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'])
            ->with('info', 'Componente activada correctamente');
    }
}

<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionSicorrd\AdmiValoracionSicorrd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorno;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntornoCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntornoEditarRequest;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdCrudTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdListadosTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiEntornos\AdmiEntornosVistasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiEntornos\AdmiEntornosParametrizarTrait;

class EntornosController extends Controller
{
    use AdmiEntornosParametrizarTrait;
    use AdmiEntornosVistasTrait; // trait que arma la logica para lo metodos: crud
    use AdmiVsrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVsrrdListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVsrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVsrrdCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vsrrdent';
        $this->opciones['routxxxx'] = 'vsrrdent';

        $this->pestania[0][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablasEntornos();
        return view($this->opciones['rutacarp'] . 'AdmiValoracionSicorrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ENTORNO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VsrrdEntornoCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setEntorno([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Entorno creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VsrrdEntorno $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VsrrdEntorno $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ENTORNO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario']]);
    }

    public function update(VsrrdEntornoEditarRequest $request,  VsrrdEntorno $modeloxx)
    {
        return $this->setEntorno([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Entorno editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VsrrdEntorno $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ENTORNO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VsrrdEntorno $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Entorno inactivado correctamente');
    }

    public function activate(VsrrdEntorno $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ENTORNO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, VsrrdEntorno $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Entorno activado correctamente');
    }
}

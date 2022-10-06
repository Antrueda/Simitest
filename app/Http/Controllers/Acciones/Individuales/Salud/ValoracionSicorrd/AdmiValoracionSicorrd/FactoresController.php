<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionSicorrd\AdmiValoracionSicorrd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdFactore;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdFactorCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdFactorEditarRequest;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdCrudTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdListadosTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiFactores\AdmiFactoresVistasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiFactores\AdmiFactoresParametrizarTrait;

class FactoresController extends Controller
{
    use AdmiFactoresVistasTrait;
    use AdmiFactoresParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVsrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVsrrdListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVsrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVsrrdCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vsrrdfac';
        $this->opciones['routxxxx'] = 'vsrrdfac';
        $this->pestania[1][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablasFactores();
        return view($this->opciones['rutacarp'] . 'AdmiValoracionSicorrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR FACTOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VsrrdFactorCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setFactor([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Factor creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VsrrdFactore $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VsrrdFactore $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR FACTOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(VsrrdFactorEditarRequest $request, VsrrdFactore $modeloxx)
    {
        return $this->setFactor([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Factor editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VsrrdFactore $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR FACTOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VsrrdFactore $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Factor inactivado correctamente');
    }

    public function activate(VsrrdFactore $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR FACTOR', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, VsrrdFactore $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Factor activado correctamente');
    }
}

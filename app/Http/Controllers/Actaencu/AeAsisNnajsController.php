<?php

namespace App\Http\Controllers\Actaencu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeAsisNnajCrearRequest;
use app\Http\Requests\Actaencu\AeAsisNnajEditarRequest;
use App\Models\Actaencu\AeAsistencia;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Traits\Actaencu\ActaencuAjaxTrait;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Nnajs\NnajsParametrizarTrait;
use App\Traits\Actaencu\Nnajs\NnajsVistasTrait;
use App\Traits\Combos\CombosTrait;

class AeAsisNnajsController extends Controller
{
    use NnajsParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait;
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use NnajsVistasTrait; // trait que arma la logica para lo metodos: crud
    use ActaencuAjaxTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'asisnnaj';
        $this->opciones['routxxxx'] = 'asisnnaj';
        $this->pestania[1][4]=true;
        $this->pestania[2][4]=true;
        // $this->pestania[3][4]=true;
        $this->pestania[2][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(AeAsistencia $padrexxx)
    {
        $this->pestania[1][2]=[$padrexxx->aeEncuentro->id];
        // $this->pestania[2][2]=[$padrexxx->aeEncuentro->id];
        $this->pestania[2][2]=[$padrexxx->id];
        $this->getPestanias([]);
        return redirect()->route($this->opciones['permisox'] . '.nuevoxxx', $padrexxx->id);
    }

    public function create(AeAsistencia $padrexxx)
    {
        $this->pestania[2][2]=[$padrexxx->id];
        $this->opciones['parametr'][]=$padrexxx->id;
        $this->getBotones(['crearxxx', [$padrexxx->id], 1, 'GUARDAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $padrexxx]);
    }

    public function store(AeAsisNnajCrearRequest $request, AeAsistencia $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeAsisNnaj([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Nnaj creado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx',
            'padrexxx' => $padrexxx
        ]);
    }


    // public function show(FiDatosBasico $modeloxx)
    // {
    //     return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx'=>$modeloxx->actasEncuentro]);
    // }


    public function edit(AeAsistencia $padrexxx, FiDatosBasico $modeloxx)
    {
        $this->pestania[2][2]=[$padrexxx->id];
        $this->opciones['parametr'][]=$padrexxx->id;
        $this->getBotones(['editarxx', [], 1, 'EDITAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $padrexxx]);
    }


    public function update(AeAsistencia $padrexxx, AeAsisNnajEditarRequest $request,  FiDatosBasico $modeloxx)
    {
        return $this->setAeAsisNnaj([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Nnaj editado con éxito',
            'permisox' => $this->opciones['permisox'] . '.editarxx',
            'padrexxx' => $padrexxx
        ]);
    }

    // public function inactivate(FiDatosBasico $modeloxx)
    // {
    //     $this->getBotones(['borrarxx', [], 1, 'INACTIVAR CONTACTO', 'btn btn-sm btn-primary']);
    //     return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->actasEncuentro]);
    // }


    // public function destroy(Request $request, FiDatosBasico $modeloxx)
    // {

    //     $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
    //     return redirect()
    //         ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
    //         ->with('info', 'Acta de encuentro inactivada correctamente');
    // }

    // public function activate(FiDatosBasico $modeloxx)
    // {
    //     $this->getBotones(['activarx', [], 1, 'ACTIVAR CONTACTO', 'btn btn-sm btn-primary']);
    //     return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx'=>$modeloxx->actasEncuentro]);

    // }

    // public function activar(Request $request, FiDatosBasico $modeloxx)
    // {
    //     $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
    //     return redirect()
    //         ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
    //         ->with('info', 'Acta de encuentro activada correctamente');
    // }
}

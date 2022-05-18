<?php

namespace App\Http\Controllers\Acciones\Grupales\GestMatrAcademia;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Grupales\Educacion\IEstadoMs;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Traits\Acciones\Grupales\GestMatrAcademica\AjaxTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\CrudTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\ListadosTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\PestaniasTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\DataTablesTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica\VistasTrait;
use App\Http\Requests\Acciones\Grupales\GestMatrAcademia\IEstadoMatriculaCrearRequest;
use App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica\ParametrizarTrait;

class GestMatrAcademiaController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use AjaxTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'gestmaca';
        $this->opciones['routxxxx'] = 'gestmaca';
        $this->pestania[0][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablas();
        
        $this->opciones['ruarchjs'][] = 
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create($modeloxx)
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR GESTIÓN MATRÍCULA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $modeloxx]);
    }
    public function store(IEstadoMatriculaCrearRequest $request,IMatriculaNnaj $padrexx)
    {
        $request->request->add(['imatrinnaj_id' => $padrexx->id]);
        return $this->setImatriculaEstado([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexx'=>$padrexx,
            'infoxxxx' =>       'Estado de matrícula creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(IEstadoMs $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'ver'],'padrexxx' => $modeloxx->id]);
    }


    public function edit(IEstadoMs $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ESTADO MATRÍCULA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx' => $modeloxx->imatrinnaj_id]);
    }


    public function update(IEstadoMatriculaCrearRequest $request,IEstadoMs $modeloxx)
    {
        $padrexx = IMatriculaNnaj::find($modeloxx->imatrinnaj_id);
        return $this->setImatriculaEstado([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexx'=>$padrexx,
            'infoxxxx' => 'Estado de matrícula editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

}

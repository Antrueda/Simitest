<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilOcupacional\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PerfilOcupacionalAdmin\ListadosTrait;
use App\Traits\PerfilOcupacionalAdmin\PestaniasTrait;
use App\Models\perfilOcupacional\FpoDesempenioCategoria;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupCategoria\CrudTrait;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupCategoria\VistasTrait;
use App\Http\Requests\PerfilOcupacional\DesempenioCategoriaCreateRequest;
use App\Http\Requests\PerfilOcupacional\DesempenioCategoriaEditarRequest;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupCategoria\DataTablesTrait;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupCategoria\ParametrizarTrait;
/**
 * FOS Tipo de seguimiento
 */
class PerfilOcupCategoriaController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'perfilocupacionalcategorias';
        $this->opciones['routxxxx'] = 'perfilocupacionalcategorias';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR CATEGORÍA DE DESEMPEÑO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    
    public function store(DesempenioCategoriaCreateRequest $request)
    {
        
        return $this->setPerfilOcupCategoria([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'categoría de desempeño creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'],
        ]);
    }


    public function show(FpoDesempenioCategoria $modeloxx)
    {
        $this->opciones['evento']= 'ver';
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], ['']], 2, 'VOLVER A CATEGORÍAS DEL DESEMPEÑO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', ['']], 2, 'IR A CREAR NUEVO REGISTRO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(FpoDesempenioCategoria $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones['tituloxx'] = "ACTUALIZAR CATEGORÍA DE DESEMPEÑO";

        $this->getBotones(['leer', [$this->opciones['routxxxx'], ['']], 2, 'VOLVER A CATEGORÍAS DEL DESEMPEÑO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', ['']], 2, 'IR A CREAR NUEVO REGISTRO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]
        );
    }


    public function update(DesempenioCategoriaEditarRequest $request,  FpoDesempenioCategoria $modeloxx)
    {
        return $this->setPerfilOcupCategoria([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Categoría de desempeño editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'],
        ]);
    }

    public function inactivate(FpoDesempenioCategoria $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR CATEGORÍA DE DESEMPEÑO', 'btn btn-sm btn-danger'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>'']
        );
    }


    public function destroy(Request $request, FpoDesempenioCategoria $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [''])
            ->with('info', 'Categoría de desempeño inactivado correctamente');
    }

    public function activate(FpoDesempenioCategoria $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activar', [], 1, 'ACTIVAR CATEGORÍA DE DESEMPEÑO', 'btn btn-sm btn-success'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>'']
        );

    }
    public function activar(Request $request, FpoDesempenioCategoria $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
    
        return redirect()
            ->route($this->opciones['routxxxx'], [''])
            ->with('info', 'Categoría de desempeño activado correctamente');
    }
}

<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilOcupacional\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PerfilOcupacionalAdmin\ListadosTrait;
use App\Traits\PerfilOcupacionalAdmin\PestaniasTrait;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioItem;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;

use App\Traits\PerfilOcupacionalAdmin\PerfilOcupItems\CrudTrait;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupItems\VistasTrait;
use App\Http\Requests\PerfilOcupacional\DesempenioItemCreateRequest;
use App\Http\Requests\PerfilOcupacional\DesempenioItemEditarRequest;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupItems\DataTablesTrait;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupItems\ParametrizarTrait;

/**
 * FOS Tipo de seguimiento
 */
class PerfilOcupItemsController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'perfilocupacionalitems';
        $this->opciones['routxxxx'] = 'perfilocupacionalitems';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(FpoDesempenioComponente $model)
    {
        $this->opciones['modeloxx']=$model->id;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR ITEM A EVALUAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    
    public function store(DesempenioItemCreateRequest $request)
    {
        return $this->setPerfilOcupItem([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Item a evaluar creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'],
        ]);
    }


    public function show(FpoDesempenioItem $modeloxx)
    {
        $this->opciones['evento']= 'ver';
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->desempenio_id]], 2, 'VOLVER A ITEMS A EVALUAR', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', ['']], 2, 'IR A CREAR NUEVO REGISTRO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(FpoDesempenioItem $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones['tituloxx'] = "ACTUALIZAR ITEM COMPONENTE DE DESEMPEÑO";

        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->desempenio_id]], 2, 'VOLVER A ITEMS A EVALUAR', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', ['']], 2, 'IR A CREAR NUEVO REGISTRO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]
        );
    }


    public function update(DesempenioItemEditarRequest $request, FpoDesempenioItem $modeloxx)
    {
        return $this->setPerfilOcupItem([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Item a evaluar editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'],
        ]);
    }

    public function inactivate(FpoDesempenioItem $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR ITEM A EVALUAR', 'btn btn-sm btn-danger'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>'']
        );
    }


    public function destroy(Request $request, FpoDesempenioItem $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [$modeloxx->desempenio_id])
            ->with('info', 'Item inactivado correctamente');
    }

    public function activate(FpoDesempenioItem $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activar', [], 1, 'ACTIVAR ITEM A EVALUAR', 'btn btn-sm btn-success'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>'']
        );

    }
    public function activar(Request $request, FpoDesempenioItem $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
    
        return redirect()
            ->route($this->opciones['routxxxx'], [$modeloxx->desempenio_id])
            ->with('info', 'Item activado correctamente');
    }
}

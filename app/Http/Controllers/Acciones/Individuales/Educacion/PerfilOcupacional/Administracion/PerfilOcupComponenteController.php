<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilOcupacional\Administracion;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\PerfilOcupacionalAdmin\ListadosTrait;
use App\Traits\PerfilOcupacionalAdmin\PestaniasTrait;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupComponente\CrudTrait;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupComponente\VistasTrait;
use App\Http\Requests\PerfilOcupacional\DesempenioComponenteCreateRequest;
use App\Http\Requests\PerfilOcupacional\DesempenioComponenteEditarRequest;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupComponente\DataTablesTrait;
use App\Traits\PerfilOcupacionalAdmin\PerfilOcupComponente\ParametrizarTrait;
/**
 * FOS Tipo de seguimiento
 */
class PerfilOcupComponenteController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'perfilocupacionalcomponentes';
        $this->opciones['routxxxx'] = 'perfilocupacionalcomponentes';
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
            $this->getBotones(['crear', [], 1, 'GUARDAR COMPONENTE DE DESEMPEÑO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    
    public function store(DesempenioComponenteCreateRequest $request)
    {
        
        return $this->setPerfilOcupComponente([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Componente de desempeño creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'],
        ]);
    }


    public function show(FpoDesempenioComponente $modeloxx)
    {
        $this->opciones['evento']= 'ver';
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], ['']], 2, 'VOLVER A COMPONENTES DEL DESEMPEÑO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', ['']], 2, 'IR A CREAR NUEVO REGISTRO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(FpoDesempenioComponente $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->opciones['tituloxx'] = "ACTUALIZAR COMPONENTE DE DESEMPEÑO";

        $this->getBotones(['leer', [$this->opciones['routxxxx'], ['']], 2, 'VOLVER A COMPONENTES DEL DESEMPEÑO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'].'.nuevo', ['']], 2, 'IR A CREAR NUEVO REGISTRO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario']]
        );
    }


    public function update(DesempenioComponenteEditarRequest $request,  FpoDesempenioComponente $modeloxx)
    {
        return $this->setPerfilOcupComponente([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Componente de desempeño editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'],
        ]);
    }

    public function inactivate(FpoDesempenioComponente $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR COMPONENTE DE DESEMPEÑO', 'btn btn-sm btn-danger'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>'']
        );
    }


    public function destroy(Request $request, FpoDesempenioComponente $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [''])
            ->with('info', 'Componente de desempeño inactivado correctamente');
    }

    public function activate(FpoDesempenioComponente $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activar', [], 1, 'ACTIVAR COMPONENTE DE DESEMPEÑO', 'btn btn-sm btn-success'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>'']
        );

    }
    public function activar(Request $request, FpoDesempenioComponente $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
    
        return redirect()
            ->route($this->opciones['routxxxx'], [''])
            ->with('info', 'Componente de desempeño activado correctamente');
    }
}

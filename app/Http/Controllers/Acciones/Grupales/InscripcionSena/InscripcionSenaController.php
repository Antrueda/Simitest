<?php

namespace App\Http\Controllers\Acciones\Grupales\InscripcionSena;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\MatriculaCrearRequest;
use App\Http\Requests\Acciones\Grupales\MatriculaEditarRequest;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Simianti\Ped\PedMatricula;
use App\Traits\Acciones\Grupales\Matricula\CrudTrait;
use App\Traits\Acciones\Grupales\Matricula\ParametrizarTrait;
use App\Traits\Acciones\Grupales\Matricula\VistasTrait;
use App\Traits\Acciones\Grupales\ListadosTrait;
use App\Traits\Acciones\Grupales\Matricula\PestaniasTrait;
use App\Traits\Combos\UserCombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InscripcionSenaController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use UserCombosTrait;
    

    public function __construct()
    {
        $this->opciones['permisox'] = 'inscricon';
        $this->opciones['routxxxx'] = 'inscricon';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['tablinde']=true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones])]);
    }

    public function create()
    {
        $this->opciones['tablinde']=false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(MatriculaCrearRequest $request)
    {
        // en que caso de que no exista una matricula creada entonces se busca en el antiguo sistema para 
        // para saber en que consecutivo se encuentra allá
        $traslado= IMatricula::count();
        if($traslado==0){    
            $dataxxxx = PedMatricula::orderby('id_matricula', 'desc')->first()->id_matricula + 1;;
            $request->request->add(['id'=> $dataxxxx]);
        }
        $request->request->add(['sis_esta_id'=> 1]);
        return $this->setMatricula([
            'requestx' => $request,
            'modeloxx' => '',
            'padrexxx' => $request,
            'infoxxxx' =>       'Matricula creada con éxito, por favor asignar NNAJ',
            'routxxxx' => 'imatricula.editar'
            //'routxxxx' => 'salidajovenes.nuevo'
        ]);
    }


    public function show(IMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVO MATRICULA', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(IMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A MATRICULAS', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR NUEVO MATRICULA', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(MatriculaEditarRequest $request,  IMatricula $modeloxx)
    {
        return $this->setMatricula([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx,
            'infoxxxx' => 'Matricula editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(IMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, IMatricula $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Matricula inactivada correctamente');
    }

    public function activate(IMatricula $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }
    public function activar(Request $request, IMatricula $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Matricula activada correctamente');
    }
}

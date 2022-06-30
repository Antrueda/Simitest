<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use App\Imports\Reportes\AcademiaImport;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Reportes\Modulo\RepomoduVistasTrait;
use App\Traits\Reportes\RepomoduDataTablesTrait;
use App\Traits\Reportes\RepomoduListadosTrait;
use App\Traits\Reportes\RepomoduParametrizarTrait;
use App\Traits\Reportes\RepomoduPestaniasTrait;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RepomoduController extends Controller
{
    use RepomoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use RepomoduListadosTrait; // trait que arma las consultas para las datatables
    use RepomoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use RepomoduVistasTrait; // trait que arma la logica para lo metodos: crud
    use RepomoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use BotonesTrait; // trait arma los botones
    use CombosTrait; // trait que arma los combos

    private $opciones = [
        'permisox' => 'repomodu',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'repomodu',
        'botoform' => [],
    ];

    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(Request $requestx)
    {
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getAreaindiIndex(['paralist' => $this->opciones['parametr']]);
        $this->opciones['mostabsx'] = true;


        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {

        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'CREAR', 'parametr' => []];
        $this->getRespuesta($botonxxx);
        return $this->view();
    }

    public function store(Request $request)
    {
       
        $file = $request->file('archivo');
        
        Excel::import(new AcademiaImport,$file);

        // return  $this->setInLibagrup([
        //     'requestx' => $request,
        //     'modeloxx' => '',
        //     'infoxxxx' => 'Grupo creado correctamente',
        //     'permisox' => $this->opciones['permisox']
        // ]);
    }


    // public function show(InLibagrup $modeloxx)
    // {
    //     $this->padrexxx=$modeloxx->inIndiliba;
    //     $this->opciones['modeloxx']=$modeloxx;
    //     $this->dataxxxx['accionxx'] = ['verxxxxx', 'verxxxxx'];
    //     return $this->view();
    // }

    // public function inactivate(InLibagrup $modeloxx)
    // {
    //     $this->padrexxx=$modeloxx->inIndiliba;
    //     $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR','parametr'=>[$this->padrexxx->id]];
    //     $this->getRespuesta($botonxxx);
    //     $this->estadoid=2;
    //     $this->opciones['modeloxx']=$modeloxx;
    //     $this->dataxxxx['accionxx'] = ['borrarxx', 'destroyx'];
    //     return $this->view();
    // }


    // public function destroy(InLibagrup $modeloxx)
    // {
    //     $modeloxx->update(
    //         ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
    //     );
    //     return redirect()
    //         ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
    //         ->with('info', 'Grupo inactivado correctamente');
    // }

    // public function activate(InLibagrup $modeloxx)
    // {
    //     $this->padrexxx=$modeloxx->inIndiliba;
    //     $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR','parametr'=>[$this->padrexxx->id]];
    //     $this->getRespuesta($botonxxx);
    //     $this->opciones['modeloxx']=$modeloxx;
    //     $this->dataxxxx['accionxx'] = ['activarx', 'activarx'];

    //     return $this->view();
    // }
    // public function activar(InLibagrup $modeloxx)
    // {
    //     $modeloxx->update(
    //         ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
    //     );
    //     return redirect()
    //         ->route($this->opciones['permisox'], [$modeloxx->in_indiliba_id])
    //         ->with('info', 'Grupo activado correctamente');
    // }
}
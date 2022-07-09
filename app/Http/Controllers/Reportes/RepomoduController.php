<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use App\Imports\Reportes\AcademiaImport;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Simianti\Ped\PedMatricula;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Reportes\AcademiaTrait;
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
    use AcademiaTrait;
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
        $academia = $this->getAcademia();
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getAreaindiIndex(['paralist' => $this->opciones['parametr']]);
        $this->opciones['mostabsx'] = true;
        // ddd(count($this->getNnajs()));
        $matranti = PedMatricula::whereIn('nnaj_id', $this->getNnajs())->get();

         ddd(count($this->getNnajs()),$matranti->count());
        echo '[';
        foreach ($academia as $key => $value) {

            echo "";
            // $document=NnajDocu::where('s_documento',$value['numero_documento'])->first();
            // if (is_null($document)) {
            //     echo $value['numero_documento'].",<br>";
            // }
        //     $matranti = PedMatricula::where('nnaj_id', $value['nnaj_id'])->first();
        //    $nnajxxxx = SisNnaj::where('simianti_id', $value['nnaj_id'])->first();
            // if (is_null($nnajxxxx)) {
            //     // IMatricula::
            //    // echo $value['nnaj_id'] . '<br>';
            // } else {
            //     echo  "IMatricula::create([
            //             'fecha'=>, 
            //             'prm_upi_id'=>,
            //             'observaciones'=>, 
            //             'user_doc1'=>1,
            //             'user_doc2'=>1,
            //             'responsable_id'=>,
            //             'apoyo_id'=>1,
            //             'prm_grado'=>,
            //             'prm_grupo'=>,
            //             'prm_estra'=>,
            //             'prm_serv_id'=>,
            //             'prm_periodo'=>,
            //             'user_crea_id'=>1, 
            //             'user_edita_id'=>1, 
            //             'sis_esta_id'=>1,
            //         ]);<br>";
            // }
        }

        echo ']';

        //return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
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
        echo '[';
        Excel::import(new AcademiaImport, $file);

        echo '];';

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

<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use App\Imports\Reportes\AcademiaImport;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Simianti\Ped\PedMatricula;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisServicio;
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
    public function getDatos($matricul)
    {
        $datos = [
            'id_matricula',
            'ano',
            'fecha_inscripcion',
            'nnaj_id',
            'grado',
            'estrategia',
            'upi_id',
            'grupo',
            'fecha_insercion',
            'fecha_modificacion',
            'usuario_insercion',
            'usuario_modificacion',
            'nivel_educacion',
            'observaciones',
            'numero_matricula',
            'id_estretgia'
        ];
        echo "PedMatricula::create([";
        foreach ($datos as $key => $value) {
            echo "'" . $value . "'=>'" . $matricul[$value] . "',";
        }
        echo "]);<br>";
    }

    public function getMatriculaCon($value, $upinnajx, $servicio, $matricul)
    {
        $grupoxxx = [163 => 1, 22 => 3, 350 => 4, 21 => 2];
        $gradoxxx = [48 => 2, 45 => 5, 47 => 3, 44 => 6, 50 => 8, 43 => 7, 46 => 4, 41 => 9, 42 => 10, 40 => 11, 39 => 12, 38 => 13, 41 => 8, 49 => 1];
        $periodox = [26 => 2746, 25 => 2744, 27 => 2786];
        IMatricula::create([
            'id' => $matricul,
            'fecha' => $value->fecha_inscripcion,
            'prm_upi_id' => $upinnajx->id,
            'observaciones' => ' ',
            'user_doc1' => 1,
            'user_doc2' => 1,
            'responsable_id' => $upinnajx->getDepeResponsUsua[0]->id,
            'apoyo_id' => 1,
            'prm_grado' => $gradoxxx[$value->grado],
            'prm_grupo' => $grupoxxx[$value->grupo],
            'prm_estra' => 235,
            'prm_serv_id' => $servicio->id,
            'prm_periodo' => $periodox[$value->id_periodo],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ]);
    }


    public function getNnajMatricula($nnajxxxx, $matricul, $value)
    {
        echo "IMatriculaNnaj::create([
    'sis_nnaj_id'=> $nnajxxxx->id,
    'imatricula_id'=>$matricul,
    'prm_copdoc'=>227,
    'prm_certif'=>228,
    'prm_matric'=>227,
    'observaciones'=>'$value->observaciones',
    'user_crea_id'=>1,
    'user_edita_id'=>1,
    'numeromatricula'=>$value->numero_matricula,
    'prm_simianti'=>227,
    'sis_esta_id'=>1,
  ]); //$matricul<br>";
    }

    public function index(Request $requestx)
    {

        $consulta = PedMatricula::join('ped_estado_m', 'ped_matricula.id_matricula', '=', 'ped_estado_m.matricula_id')
            ->join('ped_periodos_matricula', 'ped_matricula.id_matricula', '=', 'ped_periodos_matricula.id_matricula')
            ->join('ge_nnaj_documento', 'ped_matricula.nnaj_id', '=', 'ge_nnaj_documento.id_nnaj')
            ->where('ped_matricula.ano', '>', 2015)
            ->where('ped_estado_m.estado', 'MATRICULADO')
            ->get([
                'ped_matricula.nnaj_id', 'ped_matricula.grado', 'ped_matricula.estrategia', 'ped_matricula.upi_id', 'ped_matricula.grupo',
                'ped_matricula.fecha_inscripcion', 'id_periodo', 'ge_nnaj_documento.numero_documento', 'ped_matricula.observaciones', 'ped_matricula.numero_matricula'
            ]);

        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getAreaindiIndex(['paralist' => $this->opciones['parametr']]);
        $this->opciones['mostabsx'] = true;
        $matricul = 12;
        foreach ($consulta as $key => $value) {
            // $periodoy= PedPeriodoM::where('id_periodo',$value->id_periodo)->first(['ano','periodo']);

            ///echo  $periodoy-> periodo.' '.$periodoy-> ano.' <br>';
            $upinnajx = SisDepen::where('sis_depens.simianti_id', $value->upi_id)
                ->first();
            $nnajxxxx = SisNnaj::where('simianti_id', $value->nnaj_id)->first();
            $servicio = SisServicio::where('s_servicio', $value['estrategia'])->first();
            if (is_null($nnajxxxx)) {
                $cedulaxx = NnajDocu::where('s_documento', $value->numero_documento)->first();
                if (!is_null($cedulaxx)) {
                    //$this->getNnajMatricula($cedulaxx->fi_datos_basico->sis_nnaj, $matricul, $value);
                    $this->getMatriculaCon($value, $upinnajx, $servicio, $matricul);
                    if ($matricul == 500) {
                        break;
                    }
                    $matricul++;
                } else {
                    //echo $value['numero_documento'] . ',<br><br><br><br><br>';
                }
            } else {
                //$this->getNnajMatricula($nnajxxxx, $matricul, $value);
                $this->getMatriculaCon($value, $upinnajx, $servicio, $matricul);
                if ($matricul == 500) {
                    break;
                }
                $matricul++;
            }
        }

        //echo ']';

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

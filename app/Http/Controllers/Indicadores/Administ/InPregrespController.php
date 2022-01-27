<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Indicadores\Administ\InGrupregu;
use App\Models\Indicadores\Administ\InPregresp;
use App\Models\sicosocial\Pivotes\VsiRelsolDificulta;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use App\Traits\BotonesTrait;
use App\Traits\Combos\CombosTrait;
use App\Traits\Indicadores\Administ\Pregresp\PregrespVistasTrait;
use App\Traits\Indicadores\IndimoduCrudTrait;
use App\Traits\Indicadores\IndimoduDataTablesTrait;
use App\Traits\Indicadores\IndimoduListadosTrait;
use App\Traits\Indicadores\IndimoduPestaniasTrait;
use App\Traits\Indicadores\IndimoduParametrizarTrait;
use App\Traits\Indicadores\IndisplibaTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * realizar la unión del área con sus indicadores
 */
class InPregrespController extends Controller
{
    use IndimoduParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use IndimoduPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use IndimoduListadosTrait; // trait que arma las consultas para las datatables
    use IndimoduCrudTrait; // trait donde se hace el crud de localidades
    use IndimoduDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use PregrespVistasTrait; // trait que arma la logica para lo metodos: crud
    use BotonesTrait; // traita arma los botones
    use CombosTrait;
    use IndisplibaTrait;
    private $opciones = [
        'permisox' => 'pregresp',
        'modeloxx' => null,
        'vistaxxx' => null,
        'pestpadr' => 'indimodu',
        'botoform' => [],
    ];
    public function __construct()
    {
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->redirect = $this->opciones['permisox'] . '.editarxx';
    }

    public function getScript($value)
    {
        $noxxxxxx = ['id', 'deleted_at', 'rn'];
        $scriptxx = '::create([';
        foreach ((array)$value as $key => $values) {
            if (!in_array($key, $noxxxxxx))
                $scriptxx .= "'$key'=>'$values',";
        }
        $scriptxx .= ']);';
        return $scriptxx;
    }


    public function index(InGrupregu $padrexxx, Request $requestx)
    {
        $fechinac = Carbon::now()->addDay()->format('Y-m-d');
        // if (Carbon::now()->gt($fechinac)) {
            
        $maximoxx = 1000;
        $minimoxx = $maximoxx-1000;
        $respuest = DB::table('nnaj_docus')
            ->orderBy('id', 'ASC')
            // ->offset($minimoxx)
            // ->limit($maximoxx)

            ->get();
        $anterior = 0;
        $i = 1;
        foreach ($respuest as $key => $value) {
            // if ($value->id > $maximoxx) {
            //     break;
            // }
            $anterior = $value->id;
            if ($key > 0)
                $anterior = $respuest[$key - 1]->id;


            if ($value->id - $anterior > 1) {


                for ($j = $anterior + 1; $j < $value->id; $j++) {
                    $document=str_replace(['-',':',' '],'',date('Y-m-d H:m:s')); 
                    NnajDocu::create(['id' => $j, 
                    's_documento' => "$document", 
                    'fi_datos_basico_id' => FiDatosBasico::leftjoin('nnaj_docus','fi_datos_basicos.id','=','nnaj_docus.fi_datos_basico_id')
                    ->where('nnaj_docus.fi_datos_basico_id',null)
                    ->orderby('fi_datos_basicos.id','ASC')
                    ->first(['fi_datos_basicos.id'])->id, 
                    'prm_ayuda_id' => 1, 
                    'prm_tipodocu_id' => 145, 
                    'prm_doc_fisico_id' => 445, 
                    'sis_municipio_id' => 1121, 
                    'sis_esta_id' => 1, 
                    'user_crea_id' => 1, 
                    'user_edita_id' => 1, 
                    'sis_docfuen_id' => 2,]); // 1

        
                   
                }
                // echo 'Actual==> ' . $value->id . ' Anterior ==> ' . $anterior . '<br>';
            }
            // echo "NnajDocu" . $this->getScript($value) . " // $value->id => $i<br>";
            $i++;
        }

        // $dataxxxx['nnajidxx']=7;
        // $dataxxxx['tablaidx']=150;
        // $temporal = VsiRelsolDificulta::where('vsi_relsocial_id', 7)->get();
        // // echo $temporal->count();
        // foreach ($temporal as $key => $value) {
        // $this->getLinaBaseNnaj(['modeloxx'=>$value,'nnajidxx'=>9]);
        // }
        // ddd($temporal->getTable());
        //     $requestx->request->add(['PARAMETRO_ID'=>1,'VSI_RELSOCIAL_ID'=>1]);
        //     //  
        //    $this->getCamposTabla(['tablaidx'=>150,'requestx'=>$requestx]);
        $this->padrexxx = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getPestanias(['tipoxxxx' => $this->opciones['permisox']]);
        $this->getPregrespIndex(['paralist' => [$padrexxx->id]]);
        // return view( 'Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);

    }



    public function store(Request $request, $padrexxx)
    {
        $request->request->add([
            'in_grupregu_id' => $padrexxx,
            'prm_respuest_id' => $request->valuexxx,
        ]);
        $this->requestx = $request;
        $this->setInPregrespAjax([
            'requestx' => $request,
            'modeloxx' => '',
        ]);
        return response()->json('');
    }

    // public function edit(InPregresp $modeloxx)
    // {
    //     $this->opciones['tituloxx'] = 'EDITAR RESPUESTA';
    //     $this->padrexxx=$modeloxx->inGrupregu;
    //     $this->opciones['modeloxx']=$modeloxx;
    //     $this->dataxxxx=['accionxx' => ['editarxx', 'formulario']];
    //     $botonxxx = ['accionxx' => 'editarxx', 'btnxxxxx' => 'b'];
    //     $this->getRespuesta($botonxxx);
    //     return $this->view();
    // }


    // public function update(InPregrespEditarRequest $request,  InPregresp $modeloxx)
    // {
    //     $this->infoxxxx='RESPUESTA actualizada correctamente';
    //     $this->opciones['modeloxx'] = $modeloxx;
    //     $this->requestx = $request;
    //     return $this->setInPregresp();
    // }

    public function show(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'VER RESPUESTA';
        $this->padrexxx = $modeloxx->inGrupregu;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['verxxxxx', 'verxxxxx']];
        return $this->view();
    }

    public function inactivate(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'INACTIVAR RESPUESTA';
        $this->padrexxx = $modeloxx->inGrupregu;
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx = ['accionxx' => ['borrarxx', 'borrarxx']];
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'INACTIVAR', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->estadoid = 2;
        return $this->view();
    }


    public function destroy(InPregresp $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_grupregu_id])
            ->with('info', 'Respuesta inactivada correctamente');
    }

    public function activate(InPregresp $modeloxx)
    {
        $this->opciones['tituloxx'] = 'ACTIVAR RESPUESTA';
        $this->padrexxx = $modeloxx->inGrupregu;
        $botonxxx = ['btnxxxxx' => 'b', 'tituloxx' => 'ACTIVAR', 'parametr' => [$this->padrexxx->id]];
        $this->getRespuesta($botonxxx);
        $this->opciones['modeloxx'] = $modeloxx;
        $this->dataxxxx['accionxx'] = ['activarx', 'activarx'];
        return $this->view();
    }
    public function activar(InPregresp $modeloxx)
    {
        $modeloxx->update(
            ['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]
        );
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->in_grupregu_id])
            ->with('info', 'Respuesta activada correctamente');
    }
}

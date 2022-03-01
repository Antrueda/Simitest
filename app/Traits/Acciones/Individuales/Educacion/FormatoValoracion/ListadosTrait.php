<?php

namespace app\Traits\Acciones\Individuales\Educacion\FormatoValoracion;


use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;

use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeNnajModulo;

use App\Models\Sistema\SisNnaj;

use App\Traits\DatatableTrait;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function getDttb($queryxxx, $requestx)
    {
        return datatables()
            ->eloquent($queryxxx)
            ->addColumn('btns', 'Acciones/Grupales/Agtema/botones/botonesapi', 2)
            ->addColumn('s_estado', $requestx->estadoxx)
            ->rawColumns(['btns', 's_estado'])
            ->toJson();
    }

    public function getCursosTp($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = MatriculaCurso::select('curso_id')->where('id', $dataxxxx['tipocurs'])
            ->where('sis_esta_id', 1)->first()->curso_id;
            $dataxxxx['dataxxxx']=count(CursoModulo::where('cursos_id', $dataxxxx['dataxxxx'])->where('sis_esta_id', 1)->get());     
        $respuest = $dataxxxx;
        return    $respuest;
    }


    public function getCurso(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getCursosTp($dataxxxx));
        return $respuest;
    }
    
    public function listaMatriculaCursos(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  ValoraComp::select([
                'valora_comps.id',
                'valora_comps.fecha',
                'sis_estas.s_estado',
                'cargue.name as cargue',
                'valora_comps.sis_esta_id',
                'cursos.s_cursos as curso',
                

            ])
                ->join('sis_estas', 'valora_comps.sis_esta_id', '=', 'sis_estas.id')
                ->join('cursos', 'valora_comps.cursos_id', '=', 'cursos.id')
                ->join('users as cargue', 'valora_comps.user_id', '=', 'cargue.id')
                ->where('valora_comps.sis_esta_id', 1)
                ->where('sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtGeneral($dataxxxx, $request);
        }
    }


    public function listaCursosSimianti(Request $request,SisNnaj $padrexxx)
    {
        $simianti= $this->getNnajSimi($padrexxx);
        
        if($padrexxx->simianti_id>1){
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesapi';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $dataxxxx =  GeNnajModulo::select([
                    'ge_nnaj_modulo.id',
                    'ge_nnaj_modulo.fecha_insercion',
                    'ge_nnaj_modulo.estado',
                    'ge_programa.nombre as curso',
                    'ge_programa.descripcion',
                ])
                    ->join('ge_programa', 'ge_nnaj_modulo.id_programa', '=', 'ge_programa.id_programa')
                    ->where('ge_nnaj_modulo.id_nnaj',$padrexxx->simianti_id)
                    ->where('ge_nnaj_modulo.estado', 'A');
                    

                return $this->getDt($dataxxxx, $request);
            }
        }    
    }

    public function getNnajSimiss($dataxxxx)
    {
        
        if ($dataxxxx->simianti_id < 1) {
            $simianti = GeNnajDocumento::where('numero_documento',$dataxxxx->fi_datos_basico->nnaj_docu->s_documento)->first();
            
            if($simianti!=null){
            $dataxxxx->update([
                'simianti_id' => $simianti->id_nnaj,
                'usuario_insercion' => Auth::user()->s_documento,
            ]);
            $dataxxxx->simianti_id = $simianti->id_nnaj;
         
            }
        }
        return $dataxxxx;
    }

    public function getGeNnaj()
    {
        $inxxxxxx = [];
        foreach (Auth::user()->sis_depens as $key => $value) {
            if ($value->simianti_id == 30) {
                $inxxxxxx[] = 3;
            }
            if ($value->simianti_id == 107) {
                $inxxxxxx[] = 7;
            }
            $inxxxxxx[] = $value->simianti_id;
        }
        $dataxxxx = GeNnajModulo::query()->select([
            'ge_nnaj.id_nnaj as id',
            'ge_nnaj.tipo_documento as tipodocumento',
            'ge_nnaj_documento.numero_documento as s_documento',
            'ge_nnaj.primer_nombre as s_primer_nombre',
            'ge_nnaj.segundo_nombre as s_segundo_nombre',
            'ge_nnaj.primer_apellido as s_primer_apellido',
            'ge_nnaj.segundo_apellido as s_segundo_apellido',
            //'ge_nnaj.fecha_nacimiento as d_nacimiento',
            'ge_nnaj.estado',
            'ge_nnaj.fecha_insercion as created_at',
        ])
            ->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            ->join('ge_nnaj_documento', 'ge_nnaj.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
            ->join('ficha_acercamiento_ingreso', 'ge_nnaj.id_nnaj', '=', 'ficha_acercamiento_ingreso.id_nnaj')
            ->groupBy([
                'ge_nnaj.id_nnaj',
                'ge_nnaj.tipo_documento',
                'ge_nnaj_documento.numero_documento',
                'ge_nnaj.primer_nombre',
                'ge_nnaj.segundo_nombre',
                'ge_nnaj.primer_apellido',
                'ge_nnaj.segundo_apellido',
                'ge_nnaj.estado',
                'ge_nnaj.fecha_insercion'
            ])
            ->whereIn('ge_upi_nnaj.id_upi', $inxxxxxx)
            ->where('ge_nnaj_documento.estado', 'A')
            ->whereNotIn('ge_nnaj_documento.numero_documento', NnajDocu::select(['s_documento'])->get());
        return  $dataxxxx;
    }

    public function getTodoComFami(Request $request,ValoraComp $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  UniComp::select([
                'uni_comps.id',
                'uni_comps.valora_id',
                'uni_comps.conocimiento',
                'uni_comps.desempeno',
                'uni_comps.producto',
                'uni_comps.concepto',
                'uni_comps.sis_esta_id',
                'uni_comps.created_at',
                'sis_estas.s_estado',
    
            ])
                ->join('valora_comps', 'uni_comps.valora_id', '=', 'valora_comps.id')
                ->where('uni_comps.valora_id', $padrexxx->id)->get();
                

            return $this->getDt($dataxxxx, $request);
        }
    }
       

     

    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_doc_id', ''],
                'parentes' => ['prm_parentezco_id', ''],
                'edadxxxx' => '',

            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            if (isset($document->id)) {
                $dataxxxx['tipodocu'][1] = $document->prm_tipodocu_id;
                $dataxxxx['parentes'][1] = FiCompfami::where('sis_nnaj_id', $request->padrexxx)->first()->Parentesco;
            }

            return response()->json($dataxxxx);
        }
    }
}

/*


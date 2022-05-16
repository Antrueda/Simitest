<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos;


use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajUpi;
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

        $dataxxxx['dataxxxx'] = Curso::select(['cursos.id as valuexxx', 'cursos.s_cursos as optionxx'])
            ->where('cursos.tipo_curso_id', $dataxxxx['tipocurs'])
            ->where('cursos.sis_esta_id', 1)
            ->orderBy('cursos.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
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
            $dataxxxx =  MatriculaCurso::select([
                'matricula_cursos.id',
                'matricula_cursos.fecha',
                'sis_estas.s_estado',
                'cargue.name as cargue',
                'grupo_matriculas.s_grupo',
                'matricula_cursos.sis_esta_id',
                'tipocurso.nombre as tipocurso',
                'cursos.s_cursos as curso',
                

            ])
                ->join('parametros as tipocurso', 'matricula_cursos.prm_curso', '=', 'tipocurso.id')
                ->join('sis_estas', 'matricula_cursos.sis_esta_id', '=', 'sis_estas.id')
                ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
                ->join('grupo_matriculas', 'matricula_cursos.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('users as cargue', 'matricula_cursos.user_id', '=', 'cargue.id')
                ->where('matricula_cursos.sis_esta_id', 1)
                ->where('sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtGeneral($dataxxxx, $request);
        }
    }


    public function listaCursosSimianti(Request $request,SisNnaj $padrexxx)
    {
        $simianti= $this->getNnajSimi($padrexxx);
        
        
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
            ->whereIn('ge_upi_nnaj.id_upi', $inxxxxxx)
            ->where('ge_nnaj_documento.estado', 'A')
            ->whereNotIn('ge_nnaj_documento.numero_documento', NnajDocu::select(['s_documento'])->get());
        return  $dataxxxx;
    }

    public function getTodoComFami(Request $request,SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisNnaj::select([
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_compfamis.s_telefono',
                'tipodocu.nombre as tipodocu',
                'sis_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
    
            ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->join('fi_compfamis', 'sis_nnajs.id', '=', 'fi_compfamis.sis_nnaj_id')
                ->where('fi_compfamis.prm_reprlega_id', 227)
                ->wherein('sis_nnajs.id', FiCompfami::select('sis_nnaj_id')->where('sis_nnajnnaj_id', $padrexxx->id)->get());
                

            return $this->getDt($dataxxxx, $request);
        }
    }
       
    public function getServiciosUpiNNAJCombo($dataxxxx)
    {
        $upixxxxx = NnajUpi::select(['nnaj_upis.id'])
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->join('parametros', 'nnaj_upis.prm_principa_id', '=', 'parametros.id')
                ->join('sis_nnajs', 'nnaj_upis.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->where('nnaj_upis.sis_esta_id', 1)
                ->where('nnaj_upis.sis_depen_id', $dataxxxx['dependen'])
                ->where('nnaj_upis.sis_nnaj_id', $dataxxxx['nnajxxxx'])->first();

        $dataxxxx['dataxxxx'] = NnajDese::select(['sis_servicios.id as valuexxx', 'sis_servicios.s_servicio as optionxx'])
                    ->join('sis_servicios', 'nnaj_deses.sis_servicio_id', '=', 'sis_servicios.id')
                    ->where('nnaj_deses.nnaj_upi_id', $upixxxxx->id)
                    ->where('nnaj_deses.sis_esta_id',1)->get();
                    $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
                    return    $respuest;
    }
    

    public function getServiciosUpi(Request $request,SisNnaj $nnaj)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx,
            'nnajxxxx' => $request->nnajxxxx
        ];
        $respuest = response()->json($this->getServiciosUpiNNAJCombo($dataxxxx));
        return $respuest;
    }
     

    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_doc_id', ''],
                'parentes' => ['prm_parentezco_id', ''],
                

            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first();
            if (isset($document->id)) {
                $dataxxxx['tipodocu'][1] = $document->nnaj_docu->prm_tipodocu_id;
                $dataxxxx['parentes'][1] = FiCompfami::where('sis_nnaj_id', $request->padrexxx)->first()->Parentesco;
            }

            return response()->json($dataxxxx);
        }
    }
}

/*


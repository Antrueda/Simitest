<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\VDiagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;
use App\Models\Acciones\Individuales\SocialLegal\CasoJur;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\CentroZonal\CentroZosec;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
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
    
    public function listaAtencionCaso(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  CasoJur::select([
                'caso_jurs.id',
                'caso_jurs.fecha',
                'tipo.nombre as tipo',
                'tema.nombre as tema',
                'estado.nombre as estado',
                'sis_estas.s_estado',
                'depen.nombre as depen',
                'cargue.name as cargue',
                'caso_jurs.sis_esta_id',
                ])
                
                ->join('sis_estas', 'caso_jurs.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_depens as depen', 'caso_jurs.upi_id', '=', 'depen.id')
                ->join('tipo_casos as tipo', 'caso_jurs.tipoc_id', '=', 'tipo.id')
                ->join('tema_casos as tema', 'caso_jurs.temac_id', '=', 'tema.id')
                ->join('parametros as estado', 'caso_jurs.estacaso', '=', 'estado.id')
                ->join('users as cargue', 'caso_jurs.user_id', '=', 'cargue.id')
                ->where('caso_jurs.sis_esta_id', 1)
                ->where('caso_jurs.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtMedicina($dataxxxx, $request);
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
                    'ge_nnaj_modulo.id_modulo',
                    'ge_nnaj_modulo.estado',
                    'ge_programa.nombre as curso',
                    'ge_programa.descripcion',
                ])
                    ->join('ge_programa', 'ge_nnaj_modulo.id_programa', '=', 'ge_programa.id_programa')
                    ->where('ge_nnaj_modulo.id_modulo',5)
                    ->where('ge_nnaj_modulo.id_nnaj',$padrexxx->simianti_id);
                    
                    

                return $this->getDt($dataxxxx, $request);
            
        }    
    }

    public function listaDiagnostico(Request $request,Vsmedicina $padrexxx)
    {
        
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'formatov'];
                $request->padrexxx = $padrexxx;
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesuni';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $request->fechacrea = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.fechacrea';
                $dataxxxx =  VDiagnostico::select([
                    'v_diagnosticos.id',
                    'v_diagnosticos.vmg_id',
                    'v_diagnosticos.concepto',
                    'v_diagnosticos.codigo',
                    'v_diagnosticos.created_at',
                    'diagnosticos.nombre as diagnostico',
                    'estados.nombre as estados',
                    'sis_estas.s_estado',
                    'v_diagnosticos.sis_esta_id',
                ])
                    ->join('vsmedicinas', 'v_diagnosticos.vmg_id', '=', 'vsmedicinas.id')
                    ->join('diagnosticos', 'v_diagnosticos.diag_id', '=', 'diagnosticos.id')
                    ->join('parametros as estados', 'v_diagnosticos.esta_id', '=', 'estados.id')
                    ->join('sis_estas', 'vsmedicinas.sis_esta_id', '=', 'sis_estas.id')
                    ->where('v_diagnosticos.vmg_id','<=',$padrexxx->id)
                    ->where('vsmedicinas.sis_nnaj_id',$padrexxx->sis_nnaj_id)
                    ->where('v_diagnosticos.sis_esta_id', 1);
                    

                return $this->getDtuni($dataxxxx, $request);
            }
            
    }

    public function listaDiagnosticoNnaj(Request $request,SisNnaj $padrexxx)
    {
        
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'formatov'];
                $request->padrexxx = $padrexxx;
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesdiag';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $request->fechacrea = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.fechacrea';
                $dataxxxx =  VDiagnostico::select([
                    'v_diagnosticos.id',
                    'v_diagnosticos.vmg_id',
                    'v_diagnosticos.concepto',
                    'v_diagnosticos.codigo',
                    'v_diagnosticos.created_at',
                    'diagnosticos.nombre as diagnostico',
                    'estados.nombre as estados',
                    'sis_estas.s_estado',
                    'v_diagnosticos.sis_esta_id',
                ])
                    ->join('vsmedicinas', 'v_diagnosticos.vmg_id', '=', 'vsmedicinas.id')
                    ->join('diagnosticos', 'v_diagnosticos.diag_id', '=', 'diagnosticos.id')
                    ->join('parametros as estados', 'v_diagnosticos.esta_id', '=', 'estados.id')
                    ->join('sis_estas', 'vsmedicinas.sis_esta_id', '=', 'sis_estas.id')
                    ->where('vsmedicinas.sis_nnaj_id',$padrexxx->id)
                    ->where('v_diagnosticos.sis_esta_id', 1);
                    

                return $this->getDtuni($dataxxxx, $request);
            }
            
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

    public function getCentroTp($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = CentroZosec::select(['centro_zosecs.id as valuexxx', 'centro_zosecs.nombre as optionxx'])
            ->join('asignar_centros', 'centro_zosecs.id', '=', 'asignar_centros.censec_id')
            ->where('asignar_centros.centro_id', $dataxxxx['tipocurs'])
            ->where('centro_zosecs.sis_esta_id', 1)
            ->orderBy('centro_zosecs.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }


    public function getCentro(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getCentroTp($dataxxxx));
        return $respuest;
    }

    public function getTemaTp($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = TemaCaso::select(['tema_casos.id as valuexxx', 'tema_casos.nombre as optionxx'])
            ->join('asociar_casos', 'tema_casos.id', '=', 'asociar_casos.tema_id')
            ->where('asociar_casos.tipo_id', $dataxxxx['tipocurs'])
            ->where('tema_casos.sis_esta_id', 1)
            ->orderBy('tema_casos.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }


    public function getTema(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getTemaTp($dataxxxx));
        return $respuest;
    }

  

     


}

/*


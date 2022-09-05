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
use App\Models\Acciones\Individuales\SocialLegal\SeguiJuridico;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\CentroZonal\CentroZosec;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeNnajModulo;
use App\Models\Simianti\Sl\SlCasoJuridico;
use App\Models\sistema\SisBarrio;
use App\Models\Sistema\SisNnaj;
use App\Models\sistema\SisUpz;
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
    public function getNnajSimi($dataxxxx)
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

    public function listaCasosSimianti(Request $request,SisNnaj $padrexxx)
    {
        $simianti= $this->getNnajSimi($padrexxx);
        
        
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesapi';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $dataxxxx =  SlCasoJuridico::select([
                    'sl_caso_juridico.id_caso_juridico',
                    'sl_caso_juridico.fecha_insercion',
                    'm1.descripcion as tipo',
                    'g.NOMBRE as tema_caso',
                    'sl_caso_juridico.CONSULTA_CASO',
                    'sl_caso_juridico.ASESORIA_CASO',
                    'ge_upi.NOMBRE',
                    'z.descripcion as estado',
                    'sl_caso_juridico.USUARIO_INSERCION',
                    ])
                    ->join('sis_multivalores as m1', function ($join) {
                        $join->on('sl_caso_juridico.tipo_caso_juridico', '=', 'm1.codigo')
                             ->where('m1.tabla', 'TIPO_CASO_JURIDICO');
                    })
                    ->join('sis_multivalores as z', function ($join) {
                        $join->on('sl_caso_juridico.ESTADO_CASO', '=', 'z.codigo')
                             ->where('z.tabla', 'ESTADO_CASO');
                    })
                    //->join('SIS_MULTIVALORES as z', 'sl_caso_juridico.ESTADO_CASO', '=', 'm1.codigo')
                    ->join('SIS_TEMA_JURIDICO as g', 'sl_caso_juridico.TEMA_CASO_JURIDICO', '=', 'g.CODIGO_TEMA_JURIDICO')
                    ->join('ge_upi', 'sl_caso_juridico.id_upi', '=', 'ge_upi.id_upi')
                    ->where('sl_caso_juridico.id_nnaj',$padrexxx->simianti_id);
                    
                    

                return $this->getDt($dataxxxx, $request);
            
        }    
    }

    public function listaSeguimientoCaso(Request $request,CasoJur $padrexxx)
    {
        
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'formatov'];
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesapi';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $dataxxxx =  SeguiJuridico::select([
                    'segui_juridicos.id',
                    'segui_juridicos.casojur_id',
                    'segui_juridicos.fecha',
                    'estado.nombre as estado',
                    'depen.nombre as depen',
                    'segui_juridicos.created_at',
                    'tipo.nombre as tipo',
                    'tema.nombre as tema',
                    'sis_estas.s_estado',
                    'cargue.name as cargue',
                    'segui_juridicos.sis_esta_id',
                ])
                    ->join('caso_jurs', 'segui_juridicos.casojur_id', '=', 'caso_jurs.id')
                    ->join('sis_depens as depen', 'segui_juridicos.upi_id', '=', 'depen.id')
                    ->join('tipo_casos as tipo', 'segui_juridicos.tipoc_id', '=', 'tipo.id')
                    ->join('tema_casos as tema', 'segui_juridicos.temac_id', '=', 'tema.id')
                    ->join('parametros as estado', 'segui_juridicos.estadocaso', '=', 'estado.id')
                    ->join('users as cargue', 'caso_jurs.user_id', '=', 'cargue.id')
                    ->join('sis_estas', 'caso_jurs.sis_esta_id', '=', 'sis_estas.id')
                    ->where('segui_juridicos.casojur_id','=',$padrexxx->id)
                    ->where('caso_jurs.sis_nnaj_id',$padrexxx->sis_nnaj_id)
                    ->where('segui_juridicos.sis_esta_id', 1);
                    

                return $this->getDtMedicina($dataxxxx, $request);
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
    public function upzs(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(SisUpz::combo($dataxxxx['upzxxx'], true));
        }
    }
    public function barrios(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            return response()->json(SisBarrio::combo($dataxxxx['barrio'], true));
        }
    }

  

     


}

/*



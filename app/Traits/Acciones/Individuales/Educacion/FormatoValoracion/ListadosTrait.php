<?php

namespace app\Traits\Acciones\Individuales\Educacion\FormatoValoracion;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\ModuloUnidad;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;



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
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->modulo = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.modulo';
            $request->unidads = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.unidads';
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
                ->join('matricula_cursos', 'valora_comps.cursos_id', '=', 'matricula_cursos.id')
                ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
                ->join('users as cargue', 'valora_comps.user_id', '=', 'cargue.id')
                ->where('valora_comps.sis_esta_id', 1)
                ->where('valora_comps.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtMTaller($dataxxxx, $request);
        }
    }


    public function listaUnidades(Request $request,ValoraComp $padrexxx)
    {
        
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'formatov'];
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesuni';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $request->fechacrea = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.fechacrea';
                $dataxxxx =  UniComp::select([
                    'uni_comps.id',
                    'uni_comps.conocimiento',
                    'uni_comps.desempeno',
                    'uni_comps.producto',
                    'uni_comps.concepto',
                    'uni_comps.created_at',
                    'sis_estas.s_estado',
                    'denominas.s_denominas as denomina',
                    'modulos.s_modulo as modulo',
                    'uni_comps.sis_esta_id',
                ])
                    ->join('modulos', 'uni_comps.modulo_id', '=', 'modulos.id')
                    ->join('denominas', 'uni_comps.unidad_id', '=', 'denominas.id')
                    ->join('valora_comps', 'uni_comps.valora_id', '=', 'valora_comps.id')
                    ->join('sis_estas', 'valora_comps.sis_esta_id', '=', 'sis_estas.id')
                    ->where('uni_comps.valora_id',$padrexxx->id)
                    ->where('uni_comps.sis_esta_id', 1);
                    

                return $this->getDtuni($dataxxxx, $request);
            }
            
    }


    public function getUnidadesModulo($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = ModuloUnidad::select(['denominas.id as valuexxx', 'denominas.s_denominas as optionxx'])
                    ->join('modulos', 'modulo_unidads.modulo_id', '=', 'modulos.id')
                    ->join('denominas', 'modulo_unidads.denomina_id', '=', 'denominas.id')
                    ->where('modulo_unidads.modulo_id', $dataxxxx['dependen'])
                    ->where('modulo_unidads.sis_esta_id', 1)
                    ->orderBy('modulo_unidads.id', 'asc')
                    ->get();
                    $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
                    return    $respuest;
    }
    

    public function getUnidades(Request $request,ValoraComp $padrexxx)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx,
            'nnajxxxx' => $request->nnajxxxx
        ];
        $respuest = response()->json($this->getUnidadesModulo($dataxxxx));
        return $respuest;
    }

  

     


}

/*


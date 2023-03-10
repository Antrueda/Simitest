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
                'modulos.s_modulo as modulo',
                   ])
                ->join('sis_estas', 'valora_comps.sis_esta_id', '=', 'sis_estas.id')
                ->join('modulos', 'valora_comps.modulo_id', '=', 'modulos.id')
                ->join('cursos', 'valora_comps.cursos_id', '=', 'cursos.id')
                ->join('users as cargue', 'valora_comps.user_id', '=', 'cargue.id')
                // ->where('valora_comps.sis_esta_id', 1)
                // ->where('valora_comps.sis_nnaj_id',$padrexxx->id);
                
                ->where(function ($queryxxx) use ($request,$padrexxx) {
                    $usuariox=Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('valora_comps.sis_esta_id', 1);
                    }
                    $queryxxx->where('valora_comps.sis_nnaj_id', $padrexxx->id);
                });


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

    public function getModuloTp($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = CursoModulo::select(['modulos.id as valuexxx', 'modulos.s_modulo as optionxx'])
            ->join('modulos', 'curso_modulos.modulo_id', '=', 'modulos.id')
            ->join('cursos', 'curso_modulos.cursos_id', '=', 'cursos.id')
            ->where('curso_modulos.cursos_id', $dataxxxx['tipocurs'])
            ->where('curso_modulos.sis_esta_id', 1)
            ->orderBy('curso_modulos.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }


    public function getModulo(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getModuloTp($dataxxxx));
        return $respuest;
    }

    public function getUnicount(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'unidades' => count(ModuloUnidad::where('modulo_id',$request->dataxxxx)->where('sis_esta_id',1)->get()),
                'campoxxx' => '#unidades',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }
    



  

     


}

/*


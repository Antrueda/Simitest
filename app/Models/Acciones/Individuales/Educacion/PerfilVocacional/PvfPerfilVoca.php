<?php

namespace App\Models\Acciones\Individuales\Educacion\PerfilVocacional;

use App\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

class PvfPerfilVoca extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 
        'fecha',
        'observaciones', 
        'concepto', 
        'user_fun_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    
    public function actividades(){
        return $this->belongsToMany(PvfActividade::class, 'pvf_perfil_activis', 'pvf_perfil_voca_id', 'pvf_actividad_id');
    }

    public function getActividades(){
       $actividadesarray= [];
       foreach ($this->actividades->toArray() as $ey => $value) {
        $actividadesarray[]=$value['id'];
       }
        return $actividadesarray;
    }

    public function areasCountActividades(){

        return PvfArea::select([
                    'pvf_areas.id',
                    'pvf_areas.nombre', 
                    // 'cursos.s_cursos',
                    // 'tipocurso.nombre as tipocurso', 
                    DB::raw("(SELECT COUNT(*) FROM pvf_actividades left join pvf_perfil_activis on pvf_perfil_activis.pvf_actividad_id = pvf_actividades.id
                    WHERE pvf_actividades.area_id = pvf_areas.id 
                    AND pvf_perfil_activis.pvf_perfil_voca_id = '".$this->id."') AS inasistencias") 
                    // DB::raw("SELECT COUNT(*) FROM pvf_actividades WHERE pvf_actividades.area_id = pvf_areas.id"),
                ])
                ->orderBy('inasistencias','DESC')
                ->get();


                // DB::raw("(SELECT COUNT(*) FROM asissema_asistens 
                // WHERE asissema_asistens.asissema_matri_id = asisema_matriculas.id 
                // AND asisema_matriculas.sis_esta_id = 1
                // AND asissema_asistens.valor_asis = 0 
                // AND TRUNC(asissema_asistens.fecha) <=  DATE '".$this->id."') AS inasistencias");
                // $dataxxxx = MatriculaCurso::select([
                //     'matricula_cursos.id',
                //     'grupo_matriculas.s_grupo', 
                //     'cursos.s_cursos',
                //     'tipocurso.nombre as tipocurso',       
                // ])
                //     ->join('grupo_matriculas', 'matricula_cursos.prm_grupo', '=', 'grupo_matriculas.id')
                //     ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
                //     ->join('parametros as tipocurso', 'matricula_cursos.prm_curso', '=', 'tipocurso.id')
                //     ->where('matricula_cursos.sis_esta_id', 1)
                //     ->where('matricula_cursos.sis_nnaj_id', $sis_nnaj)->firstOrFail();
    
    }

}

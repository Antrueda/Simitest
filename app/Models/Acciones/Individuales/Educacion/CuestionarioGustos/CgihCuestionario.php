<?php

namespace App\Models\Acciones\Individuales\Educacion\CuestionarioGustos;
use App\Models\User;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisNnaj;
use App\Models\Usuario\Estusuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

class CgihCuestionario extends Model
{
    use SoftDeletes;

    protected $table = 'cgih_cuestionarios';


    protected $fillable = [
        'sis_nnaj_id',
        'fecha',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',      
    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    
    public function habilidades(){
        return $this->belongsToMany(CgihHabilidad::class, 'cgih_resultados', 'cgih_cuestionario_id', 'cgih_habilidad_id');
    }

    public function getHabilidades(){
       $habilidadesarray= [];
       foreach ($this->habilidades->toArray() as $ey => $value) {
        $habilidadesarray[]=$value['id'];
       }
        return $habilidadesarray;
    }
    public function CategoriasCounthabilidades(){
        $sumaactivis=0;

        $data['perfilactividades'] =  CgihCategoria::select([
                    'cgih_categorias.id',
                    'cgih_categorias.nombre', 
                    'cgih_categorias.descripcion',
                    DB::raw("(SELECT COUNT(*) FROM cgih_habilidads left join cgih_resultados on cgih_resultados.cgih_habilidad_id = cgih_habilidads.id
                    WHERE cgih_habilidads.cgih_categoria_id = cgih_categorias.id 
                    AND cgih_resultados.cgih_cuestionarios_id = '".$this->id."') AS habilidadscategoria"),
                ])
                ->orderBy('habilidadscategoria','DESC')
                ->get();    
        
        
        foreach ($data['perfilactividades'] as $key => $value) {
           $sumaactivis = $sumaactivis+$value->habilidadscategoria;
        }

        $data['tatalactividades']=$sumaactivis;
        
        return $data;
    }

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
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

    // public function areasCountActividades(){
    //     $sumaactivis=0;
        
    //     $data['perfilactividades'] =  PvfArea::select([
    //                 'pvf_areas.id',
    //                 'pvf_areas.nombre', 
    //                 'pvf_areas.descripcion',
    //                 DB::raw("(SELECT COUNT(*) FROM pvf_actividades left join pvf_perfil_activis on pvf_perfil_activis.pvf_actividad_id = pvf_actividades.id
    //                 WHERE pvf_actividades.area_id = pvf_areas.id 
    //                 AND pvf_perfil_activis.pvf_perfil_voca_id = '".$this->id."') AS actividadesarea"),
    //             ])
    //             ->orderBy('actividadesarea','DESC')
    //             ->get();    
        
        
    //     foreach ($data['perfilactividades'] as $key => $value) {
    //        $sumaactivis = $sumaactivis+$value->actividadesarea;
    //     }

    //     $data['tatalactividades']=$sumaactivis;
        
    //     return $data;
    // }
   
    
}

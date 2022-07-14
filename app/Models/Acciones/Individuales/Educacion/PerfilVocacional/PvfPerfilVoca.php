<?php

namespace App\Models\Acciones\Individuales\Educacion\PerfilVocacional;

use App\Models\User;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

class PvfPerfilVoca extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 
        'fecha',
        'sis_depen_id',
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
    
    public function dependencia(){
        return $this->belongsTo(SisDepen::class, 'sis_depen_id');
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
        $sumaactivis=0;
        
        $data['perfilactividades'] =  PvfArea::select([
                    'pvf_areas.id',
                    'pvf_areas.nombre', 
                    'pvf_areas.descripcion',
                    DB::raw("(SELECT COUNT(*) FROM pvf_actividades left join pvf_perfil_activis on pvf_perfil_activis.pvf_actividad_id = pvf_actividades.id
                    WHERE pvf_actividades.area_id = pvf_areas.id 
                    AND pvf_perfil_activis.pvf_perfil_voca_id = '".$this->id."') AS actividadesarea"),
                ])
                ->orderBy('actividadesarea','DESC')
                ->get();    
        
        
        foreach ($data['perfilactividades'] as $key => $value) {
           $sumaactivis = $sumaactivis+$value->actividadesarea;
        }

        $data['tatalactividades']=$sumaactivis;
        
        return $data;
    }
    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

}

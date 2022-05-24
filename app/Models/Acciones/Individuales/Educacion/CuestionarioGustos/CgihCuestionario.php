<?php

namespace App\Models\Acciones\Individuales\Educacion\CuestionarioGustos;
use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CgihCuestionario extends Model
{
    use SoftDeletes;

    protected $table = 'cgih_cuestionarios';


    protected $fillable = [
        'sis_nnaj_id',
        'fecha',
        'observaciones',
        'habilidads_id',
        'concepto',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',      
    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    
    public function habilidades(){
        return $this->belongsToMany(AdminHabilidad::class, 'pvf_perfil_activis', 'pvf_perfil_voca_id', 'pvf_actividad_id');
    }

    public function getHabilidades(){
       $habilidadesarray= [];
       foreach ($this->habilidades->toArray() as $ey => $value) {
        $habilidadesarray[]=$value['id'];
       }
        return $habilidadesarray;
    }

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
    }

    
}

<?php

namespace App\Models\Acciones\Individuales\Educacion\CuestionarioGustos;
use App\Models\User;
use App\Models\sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CgihCuestionario extends Model
{
    use SoftDeletes;
    use CombosTrait;

    protected $table = 'cgih_cuestionarios';


    protected $fillable = [
        'sis_nnaj_id',
        'sis_depen_id',
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
        return $this->belongsToMany(CgihHabilidad::class,
        'cgih_resultados', 'cgih_cuestionario_id', 'cgih_habilidad_id');
    }
    
    public function getHabilidades(){
       $habilidadesarray= [];
       foreach ($this->habilidades->toArray() as $ey => $value) {
        $habilidadesarray[]=$value['id'];
       }
        return $habilidadesarray;
    }

    public function getlimites()
    {
        return $this->belongsTo(CgihLimite::class, 'cgih_limite_id');
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

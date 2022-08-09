<?php

namespace App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional;

use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihSubarea;

class Vih extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 
        'fecha',
        'sis_depen_id',
        'antecede_clin',
        'prm_dinconsumo',
        'obs_sustanpsico',
        'prm_autocuidado',
        'prm_rutinas',
        'obs_habitos',
        'antece_ocupa',
        'antece_tiempo',
        'prospeccion',
        'familia_nucleo', 
        'conc_ocupa', 
        'prm_remitir', 
        'interinstitu', 
        'user_fun_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function descriptareas(){
        return $this->belongsToMany(VihArea::class, 'vih_descrips', 'vih_id', 'vih_area_id');
    }

    public function fortalecer(){
        return $this->belongsToMany(Parametro::class, 'vih_area_forts', 'vih_id', 'prm_area');
    }

    public function intrainstitucional(){
        return $this->belongsToMany(Parametro::class, 'vih_intras', 'vih_id', 'prm_intrainsti');
    }

    public function descriptareasPrivot(){
        return $this->belongsToMany(VihArea::class, 'vih_descrips', 'vih_id', 'vih_area_id')->withPivot('descripcion');
    }

    public function resultssubareas(){
        return $this->belongsToMany(VihSubarea::class, 'vih_results', 'vih_id', 'vih_subarea_id');
    }

    public function resultssubareasPrivot(){
        return $this->belongsToMany(VihSubarea::class, 'vih_results', 'vih_id', 'vih_subarea_id')->withPivot('prm_respuesta');
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

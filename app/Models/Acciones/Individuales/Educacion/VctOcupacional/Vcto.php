<?php

namespace App\Models\Acciones\Individuales\Educacion\VctOcupacional;

use App\Models\User;
use App\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoCompeten;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoCaracteri;

class Vcto extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 
        'fecha',
        'concepto', 
        'interinstitu', 
        'prm_remitir', 
        'user_res_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    
    // public function actividades(){
    //     return $this->belongsToMany(PvfActividade::class, 'pvf_perfil_activis', 'pvf_perfil_voca_id', 'pvf_actividad_id');
    // }

    public function vctocompetencias(){
        return $this->hasOne(VctoCompeten::class, 'vcto_id');
    }
    
    public function caracterizacion(){
        return $this->hasMany(VctoCaracteri::class, 'vcto_id');
    }

    public function responsable()
    {
        return $this->belongsTo(User::class, 'user_res_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}

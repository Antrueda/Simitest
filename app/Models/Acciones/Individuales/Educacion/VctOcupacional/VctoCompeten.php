<?php

namespace App\Models\Acciones\Individuales\Educacion\VctOcupacional;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;

class VctoCompeten extends Model
{
    protected $fillable = [
        'vcto_id', 
        'ante_clinico',
        'prm_dinsustancias', 
        'obs_clinico', 
        'prm_alimentacion', 
        'prm_higienemayor', 
        'prm_higienemenor',
        'obs_higiene',
        'prm_vestido', 
        'prm_habitos', 
        'prm_activis',
        'prm_dominancia',
        'obs_general',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function vcto(){
        return $this->belongsTo(Vcto::class, 'vcto_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

}

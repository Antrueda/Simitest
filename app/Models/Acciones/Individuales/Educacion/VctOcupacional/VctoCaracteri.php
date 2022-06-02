<?php

namespace App\Models\Acciones\Individuales\Educacion\VctOcupacional;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;

class VctoCaracteri extends Model
{
    protected $fillable = [
        'vcto_id', 
        'area',
        'observacion', 
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

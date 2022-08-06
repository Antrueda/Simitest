<?php

namespace App\Models\Acciones\Individuales\Educacion;

use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class VEntrevareas extends Model
{
    protected $table = 'v_entrevintras';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'entrevista_id', 'area_id',
    
    ];

    

    public function entrevista(){
        return $this->belongsTo(VEntrevista::class, 'entrevista_id');
    }
    

    
}

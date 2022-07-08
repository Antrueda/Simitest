<?php

namespace App\Models\Acciones\Individuales\Educacion;

use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class VEntrevareas extends Model
{
    protected $table = 'v_entrevareas';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'entrevista_id', 'prm_area_id',
    
    ];

    

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    

    
}

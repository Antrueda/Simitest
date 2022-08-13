<?php

namespace App\Models\Acciones\Individuales\Educacion;

use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class HVEntrevareas extends Model
{
    protected $table = 'v_entrevintras';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'entrevista_id', 'area_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    
    ];

    

    public function entrevista(){
        return $this->belongsTo(VEntrevista::class, 'entrevista_id');
    }
    

    
}

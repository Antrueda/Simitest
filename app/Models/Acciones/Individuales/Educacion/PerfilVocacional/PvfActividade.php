<?php

namespace App\Models\Acciones\Individuales\Educacion\PerfilVocacional;

use Illuminate\Database\Eloquent\Model;

class PvfActividade extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion',
        'area_id', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function area(){
        return $this->belongsTo(PvfArea::class, 'area_id');
    }
}

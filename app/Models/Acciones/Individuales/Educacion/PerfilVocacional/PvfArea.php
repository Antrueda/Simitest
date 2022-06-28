<?php

namespace App\Models\Acciones\Individuales\Educacion\PerfilVocacional;

use Illuminate\Database\Eloquent\Model;

class PvfArea extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function actividades(){
        return $this->hasMany(PvfActividade::class, 'area_id');
    }
}

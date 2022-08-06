<?php

namespace App\Models\Acciones\Individuales\Educacion\PerfilVocacional;

use Illuminate\Database\Eloquent\Model;

class PvfArea extends Model
{
    protected $fillable = [
        'id',
        'nombre', 
        'descripcion', 
        'estusuario_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }

    public function getDescripcionAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function actividades(){
        return $this->hasMany(PvfActividade::class, 'area_id');
    }
}

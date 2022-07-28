<?php

namespace App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional;

use Illuminate\Database\Eloquent\Model;

class VihArea extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function subareas(){
        return $this->hasMany(VihSubarea::class, 'vih_area_id');
    }

    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }

    public function getDescripcionAttribute($value)
    {
        return strtoupper($value);
    }
}

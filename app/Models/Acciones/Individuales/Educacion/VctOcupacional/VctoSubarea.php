<?php

namespace App\Models\Acciones\Individuales\Educacion\VctOcupacional;

use Illuminate\Database\Eloquent\Model;

class VctoSubarea extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion',
        'vcto_area_id', 
        'estusuarios_id', 
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function area(){
        return $this->belongsTo(VctoArea::class, 'vcto_area_id');
    }

    public function items(){
        return $this->hasMany(VctoItem::class, 'vcto_subarea_id');
    }
}

<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;

class EgreApoyo extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'tipo_id', 'nombreper','servicios','contacto','direccion',
        'egreso_id',
        
    ];


    public function egreso(){
        return $this->belongsTo(SEgreso::class, 'egreso_id');
    }
}

<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;

class EgresoDere extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'centro_id', 'egreso_id','censec_id'
    ];


    public function egreso(){
        return $this->belongsTo(SEgreso::class, 'egreso_id');
    }
}

<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;

class EgreComite extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'fechaegreso', 'motivo_egreso','upiegreso_id','fechareunion','numacta',
        'cierreca_id','motivo_id', 'user_id', 'egreso_id', 
        
    ];

    public function egreso(){
        return $this->belongsTo(SEgreso::class, 'egreso_id');
    }
}

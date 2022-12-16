<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;

class EgreRede extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'presenta_id', 'factor_id','dificulta_id',
        'aclara_id', 'predifi_id','ruptura_id',
        'restriespa_id', 'restriserv_id','motivore_id',
        'recibe_id', 'egreso_id',
        
    ];


    public function egreso(){
        return $this->belongsTo(SEgreso::class, 'egreso_id');
    }
}

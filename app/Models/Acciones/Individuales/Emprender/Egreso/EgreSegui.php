<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;

class EgreSegui extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'consul_id', 'observconsu','verifi_id',
        'observerifi', 'contact_id','numcontac',
        'persocpntac', 'parent_id','motivoe_id',
        'vulnera_id', 'victimaescnna_id','riesgoescnna_id',
        'conflicto_id', 'vincula_id','emprende_id',
        'egreso_id','observemp'
        
    ];


    public function egreso(){
        return $this->belongsTo(SEgreso::class, 'egreso_id');
    }

}

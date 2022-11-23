<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use Illuminate\Database\Eloquent\Model;

class VOdonremite extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'user_id', 'remigen_id', 'remisal_id','remiint_id',
        'odonto_id','observacion','evolucion'

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologia::class, 'odonto_id');
    }

    public function remision(){
        return $this->belongsTo(Remision::class, 'remisal_id');
    }



}

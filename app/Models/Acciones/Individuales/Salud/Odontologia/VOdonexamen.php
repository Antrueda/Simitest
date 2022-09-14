<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use Illuminate\Database\Eloquent\Model;

class VOdonexamen extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'descripcion', 'labios_id', 'lengua_id','pisob_id',
        'odonto_id','paladar_id','mucosa_id'

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologia::class, 'odonto_id');
    }


}

<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use Illuminate\Database\Eloquent\Model;

class AnteEnfer extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'diag_id','antece_id',

    ];


    public function antecdentes(){
        return $this->belongsTo(VOdonantece::class, 'antece_id');
    }
}

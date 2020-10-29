<?php

namespace App\Models\Acciones\Individuales\pivotes;

use Illuminate\Database\Eloquent\Model;

class AiSalidaMenoresCon extends Model
{
    protected $table = 'ai_salida_menores_con';

    protected $fillable = ['parametro_id','ai_salida_menores_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];

}

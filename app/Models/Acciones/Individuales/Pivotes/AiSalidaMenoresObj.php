<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use Illuminate\Database\Eloquent\Model;

class AiSalidaMenoresObj extends Model
{
    protected $table = 'ai_salida_menores_obj';

    protected $fillable = ['parametro_id','ai_salida_menores_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];

}

<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use Illuminate\Database\Eloquent\Model;

class AiSalidaMayoresRazones extends Model
{
    protected $table = 'ai_salida_mayores_razones';

    protected $fillable = ['parametro_id','ai_salmay_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];

}

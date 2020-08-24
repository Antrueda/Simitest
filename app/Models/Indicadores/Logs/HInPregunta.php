<?php

namespace App\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInPregunta extends Model
{
    protected $fillable = [
        's_pregunta',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

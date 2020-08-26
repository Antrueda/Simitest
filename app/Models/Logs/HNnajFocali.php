<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HNnajFocali extends Model
{
    protected $fillable = [
        's_nombre_focalizacion',
        'fi_datos_basico_id',
        's_lugar_focalizacion',
        'sis_upzbarri_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
                               
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

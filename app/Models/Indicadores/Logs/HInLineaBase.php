<?php

namespace app\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInLineaBase extends Model
{
    protected $fillable = [
        's_linea_base',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
          
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

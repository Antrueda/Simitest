<?php

namespace App\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInFuente extends Model
{
    protected $fillable = [
        'in_linea_base_id',
        'in_indicador_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

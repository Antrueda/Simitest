<?php

namespace app\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInIndicador extends Model
{
    protected $fillable = [
        's_indicador',
        'area_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

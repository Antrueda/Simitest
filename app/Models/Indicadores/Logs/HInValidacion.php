<?php

namespace app\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInValidacion extends Model
{
    protected $fillable = [
        'in_pregunta_id',
        'in_fuente_id',
        'sis_tabla_id',
        'sis_tcampo_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
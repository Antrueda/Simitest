<?php

namespace app\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInDocIndi extends Model
{
    protected $fillable = [
        'in_indicador_id',
        'sis_documento_fuente_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
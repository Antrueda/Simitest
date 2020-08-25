<?php

namespace app\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HArea extends Model
{
    protected $fillable = [
        'nombre',
        'contexto',
        'descripcion',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

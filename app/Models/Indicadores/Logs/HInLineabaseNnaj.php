<?php

namespace app\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInLineabaseNnaj extends Model
{
    protected $fillable = [
        'in_fuente_id',
        'i_prm_categoria_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

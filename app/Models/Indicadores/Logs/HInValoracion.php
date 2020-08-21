<?php

namespace App\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInValoracion extends Model
{
    protected $fillable = [
        'in_lineabase_nnaj_id',
        'i_prm_categoria_id',
        'i_prm_cactual_id',
        'i_prm_avance_id',
        'i_prm_nivel_id',
        's_valoracion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'deleted_at',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiVestuarioNnaj extends Model
{
    protected $fillable = [
        'user_crea_id',
        'user_edita_id',
        'prm_t_pantalon_id',
        'prm_t_camisa_id',
        'prm_t_zapato_id',
        'prm_sexo_etario_id',
        'sis_nnaj_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

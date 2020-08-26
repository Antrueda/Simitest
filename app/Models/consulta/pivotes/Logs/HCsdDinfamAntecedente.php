<?php

namespace App\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdDinfamAntecedente extends Model
{
    protected $table = 'h_csd_dinfam_antecedente';
    protected $fillable = [
        'parametro_id',
        'csd_dinfamiliar_id',
        'user_crea_id',
        'user_edita_id',
        'prm_tipofuen_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}

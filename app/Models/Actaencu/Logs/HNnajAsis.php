<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HNnajAsis extends Model
{
    use SoftDeletes;

    protected $table = 'h_nnaj_asiss';

    protected $fillable = [
        'fi_datos_basico_id',
        'prm_pefil_id',
        'prm_lugar_focali_id',
        'prm_autorizo_id',
        'observaciones',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];
}

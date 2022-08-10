<?php

namespace App\Models\Indicadores\Administ;

use Illuminate\Database\Eloquent\Model;

class InNnajliba extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'in_areaindi_id',
        'in_indiliba_id',
        'in_libagrup_id',
        'in_grupregu_id',
        'in_pregresp_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
}

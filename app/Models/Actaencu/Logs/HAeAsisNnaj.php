<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAeAsisNnaj extends Model
{
    use SoftDeletes;

    protected $table = 'h_ae_asistencia_sis_nnaj';

    protected $fillable = [
        'ae_asistencia_id',
        'sis_nnaj_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];
}

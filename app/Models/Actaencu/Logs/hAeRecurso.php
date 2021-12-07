<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;

class HAeRecurso extends Model
{
    protected $fillable = [
        'ae_encuentro_id',
        'ae_recuadmi_id',
        'cantidad',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

}

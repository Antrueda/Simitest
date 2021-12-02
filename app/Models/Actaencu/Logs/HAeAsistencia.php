<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAeAsistencia extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ae_encuentro_id',
        'user_funcontr_id',
        'respoupi_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];
    protected $table = 'h_ae_asistencias';
}

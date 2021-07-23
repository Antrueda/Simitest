<?php

namespace App\Models\Actaencu;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeAsistencia extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ae_encuentro_id',
        'ae_asistecias',
        'user_funcontr_id',
        'respoupi_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];
    protected $table = 'ae_asistencias';
}

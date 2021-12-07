<?php

namespace App\Models\Actaencu\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAeContacto extends Model
{
    use SoftDeletes;

    protected $table = 'h_ae_contactos';
    protected $fillable = [
        'ae_encuentro_id',
        'nombres_apellidos',
        'index',
        'sis_entidad_id',
        'cargo',
        'phone',
        'email', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];
}

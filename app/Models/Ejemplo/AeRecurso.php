<?php

namespace App\Models\Ejemplo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeRecurso extends Model
{
    use SoftDeletes;

    protected $table = 'ae_recusos';

    protected $fillable = [
        'ae_encuentro_id',
        'nombres_apellidos',
        'sis_entidad_id',
        'cargo',
        'phone',
        'email', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];

    public function actasEncuentro()
    {
        return $this->belongsTo(AeEncuentro::class, 'ae_encuentro_id');
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}

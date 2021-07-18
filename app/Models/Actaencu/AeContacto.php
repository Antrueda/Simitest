<?php

namespace App\Models\Actaencu;

use App\Models\Sistema\SisEntidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeContacto extends Model
{
    use SoftDeletes;

    protected $table = 'ae_contactos';
    protected $fillable = [
        'ae_encuentro_id',
        'nombres_apellidos',
        'index',
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

    public function sisEntidad()
    {
        return $this->belongsTo(SisEntidad::class, 'sis_entidad_id');
    }

}

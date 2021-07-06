<?php

namespace App\Models;

use App\Models\Sistema\SisEntidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActasEncuentroContacto extends Model
{
    use SoftDeletes;

    protected $table = 'actas_encuentro_contactos';

    public function actasEncuentro()
    {
        return $this->belongsTo(ActasEncuentro::class, 'actas_encuentro_id');
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita');
    }

    public function sisEntidad()
    {
        return $this->belongsTo(SisEntidad::class, 'sis_entidad_id');
    }
}

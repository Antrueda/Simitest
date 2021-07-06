<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActasEncuentroRecurso extends Model
{
    use SoftDeletes;

    protected $table = 'actas_encuentro_recusos';

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
}

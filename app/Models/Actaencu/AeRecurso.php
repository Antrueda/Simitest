<?php

namespace App\Models\Actaencu;

use App\Models\Acciones\Grupales\AgRecurso;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeRecurso extends Pivot
{
    use SoftDeletes;

    protected $fillable = [
        'ae_encuentro_id',
        'ag_recurso_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function actasEncuentro()
    {
        return $this->belongsTo(AeEncuentro::class, 'ae_encuentro_id');
    }

    public function agRecurso()
    {
        return $this->belongsTo(AgRecurso::class);
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

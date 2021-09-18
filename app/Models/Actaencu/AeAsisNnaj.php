<?php

namespace App\Models\Actaencu;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\sistema\SisNnaj;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeAsisNnaj extends Pivot
{
    use SoftDeletes;

    protected $table = 'ae_asistencia_sis_nnaj';

    protected $fillable = [
        'ae_asistencia_id',
        'sis_nnaj_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function aeAsistencia()
    {
        return $this->belongsTo(AeAsistencia::class);
    }

    public function sisNnaj()
    {
        return $this->belongsTo(SisNnaj::class);
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

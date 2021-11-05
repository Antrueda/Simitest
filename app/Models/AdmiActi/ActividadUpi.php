<?php

namespace App\Models\AdmiActi;

use App\Models\sistema\SisDepen;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActividadUpi extends Pivot
{
    use SoftDeletes;

    protected $table = 'actividad_upi';

    protected $fillable = [
        'actividade_id',
        'sis_depen_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function actividade()
    {
        return $this->belongsTo(actividade::class);
    }

    public function sisDepen()
    {
        return $this->belongsTo(SisDepen::class);
    }

    public function sisEsta() {
        return $this->belongsTo(SisEsta::class);
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class);
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class);
    }
}

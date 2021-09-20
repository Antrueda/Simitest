<?php

namespace App\Models\Educacion\Administ\Pruediag;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EdaAsignatuEdaPresaber extends Pivot
{
    protected $fillable = [
        'eda_asignatu_id',
        'eda_presaber_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}

<?php

namespace App\Models\Indicadores\Administ;

use Illuminate\Database\Eloquent\Model;

class InIndiliba extends Model
{
    protected $fillable = [
        'in_linea_base_id','in_areaindi_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id'
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function inLineaBase()
    {
        return $this->belongsTo(InLineaBase::class);
    }

    public function inAreaindi()
    {
        return $this->belongsTo(InAreaindi::class);
    }
}

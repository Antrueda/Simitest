<?php

namespace App\Models\Indicadores\Admin;

use Illuminate\Database\Eloquent\Model;

class InIndiliba extends Model
{
    protected $fillable = [
        'in_linea_base_id','in_areaindi_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id'
    ];

    public function user_crea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function user_edita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function in_linea_base()
    {
        return $this->belongsTo(InLineaBase::class);
    }

    public function in_areaindi()
    {
        return $this->belongsTo(InAreaindi::class);
    }
}

<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FiProcesoFamilia extends Model
{
    protected $fillable = [
        'fi_justrest_id',
        'fi_compfami_id',
        's_proceso',
        'i_prm_vigente_id',
        'i_numero_veces',
        's_motivo',
        'i_hace_cuanto',
        'i_prm_tipo_tiempo_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    

    public function fiJustrest()
    {
        return $this->belongsTo(FiJustrest::class);
    }
}

<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FiRedApoyoAntecedente extends Model
{
    protected $fillable = [
        'sis_entidad_id',
        's_servicio',
        'i_tiempo',
        'i_prm_tiempo_id',
        'i_prm_anio_prestacion_id',
        'sis_nnaj_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
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
    
}

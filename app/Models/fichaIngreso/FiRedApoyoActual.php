<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FiRedApoyoActual extends Model
{
    protected $fillable = [
        'sis_entidad_id',
        'sis_nnaj_id',
        'i_prm_tipo_red_id',
        's_nombre_persona',
        's_servicio',
        's_telefono',
        's_direccion',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
  

    public function i_prm_tipo_red()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_tipo_red_id');
    }
}

<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class CsdJusticia extends Model
{
    protected $fillable = [
        'csd_id',
        'prm_vinculado_id',
        'prm_vin_causa_id',
        'prm_riesgo_id',
        'prm_rie_causa_id',
        'user_crea_id',
        'user_edita_id',
        'prm_tipofuen_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function csd()
    {
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function vinculado()
    {
        return $this->belongsTo(Parametro::class, 'prm_vinculado_id');
    }

    public function vinCausa()
    {
        return $this->belongsTo(Parametro::class, 'prm_vin_causa_id');
    }

    public function riesgo()
    {
        return $this->belongsTo(Parametro::class, 'prm_riesgo_id');
    }

    public function rieCausa()
    {
        return $this->belongsTo(Parametro::class, 'prm_rie_causa_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}

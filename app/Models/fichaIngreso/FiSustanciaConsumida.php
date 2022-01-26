<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSustanciaConsumida extends Model
{
    protected $fillable = [
        'fi_consumo_spa_id',
        'i_prm_sustancia_id',
        'i_edad_uso',
        'i_prm_consume_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1];

    public function user_crea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function user_edita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    
    public function fi_consumo_spa()
    {
        return $this->belongsTo(FiConsumoSpa::class);
    }

    public function i_prm_sustancia()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_sustancia_id');
    }
}

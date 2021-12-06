<?php

namespace App\Models\sistema;

use App\Models\User;
use App\Models\Parametro;
use App\Traits\DateConversor;
use Illuminate\Database\Eloquent\Model; 

class ParametroSubarea extends Model
{
    // parametro_area
    use DateConversor;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parametro_subarea';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'area_parametro_id','prm_subajuste_id','sis_esta_id','user_crea_id','user_edita_id'
    ];

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function param_area()
    {
        return $this->belongsTo(ParametroArea::class, 'area_parametro_id');
    }

    public function subarea()
    {
        return $this->belongsTo(Parametro::class, 'prm_subajuste_id');
    }
}

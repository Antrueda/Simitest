<?php

namespace App\Models\sistema;

use App\Models\User;
use App\Models\Parametro;
use App\Traits\DateConversor;
use Illuminate\Database\Eloquent\Model;

class ParametroArea extends Model
{

    use DateConversor;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'area_parametro';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prm_atencion_id','prm_area_id','sis_esta_id','user_crea_id','user_edita_id'
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

    public function padre()
    {
        return $this->belongsTo(Parametro::class, 'prm_atencion_id');
    }

    public function hijo()
    {
        return $this->belongsTo(Parametro::class, 'prm_area_id');
    }




}

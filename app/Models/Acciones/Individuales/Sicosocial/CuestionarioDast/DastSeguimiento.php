<?php

namespace App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class DastSeguimiento extends Model
{
    protected $fillable = [
        'dast_id',
        'fecha',
        'sis_depen_id',
        'prm_tipo_seguimiento',
        'obs_seguimiento',
        'prm_diligencia',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function getFechaAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function dast()
    {
        return $this->belongsTo(Dast::class, 'dast_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
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

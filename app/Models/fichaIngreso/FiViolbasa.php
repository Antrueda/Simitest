<?php

namespace App\Models\fichaIngreso;

use Illuminate\Database\Eloquent\Model;

class FiViolbasa extends Model
{
    protected $fillable = [
        'fi_violencia_id',
        'prm_violbasa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function fi_violencia()
    {
        return $this->belongsTo(FiViolencia::class);
    }

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
}

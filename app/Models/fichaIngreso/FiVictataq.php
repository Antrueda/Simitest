<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;

class FiVictataq extends Model
{
    protected $fillable = [
        'fi_salud_id',
        'prm_victataq_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function prm_victataq()
    {
        return $this->belongsTo(Parametro::class, 'prm_victataq_id');
    }
}

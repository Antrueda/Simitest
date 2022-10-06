<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionSicorrd;

use Illuminate\Database\Eloquent\Model;

class VsrrdEntorFactor extends Model
{
    protected $fillable = [
        'vsrrd_entorno_id',
        'vsrrd_factor_id',
        'estusuarios_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function factor()
    {
        return $this->belongsTo(VsrrdFactore::class, 'vsrrd_factor_id');
    }
}

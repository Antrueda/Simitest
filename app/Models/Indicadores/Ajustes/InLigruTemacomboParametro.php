<?php

namespace App\Models\Indicadores\Ajustes;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InLigruTemacomboParametro extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lgtemacombo_parametro';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'in_ligru_temacombo_id','parametro_id'
    ];

    public function in_ligru_temacombo()
    {
        return $this->belongsTo(InLigruTemacombos::class, 'lgtemacombo_parametro');
    }

    public function parametro()
    {
        return $this->belongsTo(Parametro::class);
    }
}

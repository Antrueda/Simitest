<?php

namespace App\Models\Indicadores\Ajustes;

use App\Models\Indicadores\InLigru;
use App\Models\Temacombo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InLigruTemacombos extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'in_ligru_temacombo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'in_ligru_id','temacombo_id'
    ];

    public function in_ligru()
    {
        return $this->belongsTo(InLigru::class, 'in_ligru_id', 'id');
    }

    public function temacombo()
    {
        return $this->belongsTo(Temacombo::class);
    }
    
    public function lgtparametros()
    {
        return $this->hasMany(InLigruTemacomboParametro::class, 'lgtemacombo_parametro', 'in_ligru_id', 'in_ligru_temacombo_id');
    }


}

<?php

namespace App\Models\Indicadores\Admin;

use App\Models\Indicadores\Area;
use App\Models\Indicadores\InIndicador;
use Illuminate\Database\Eloquent\Model;

class InAreaindi extends Model
{
    protected $fillable = [
        'area_id','in_indicador_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id'
    ];

    public function user_crea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function user_edita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function in_indicador()
    {
        return $this->belongsTo(InIndicador::class);
    }


}

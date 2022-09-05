<?php

namespace App\Models\CentroZonal;

use Illuminate\Database\Eloquent\Model;

class AsignarCentro extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'centro_id', 'censec_id',
    ];

    public function centro(){
        return $this->belongsTo(CentroZonal::class, 'centro_id');
    }
    public function secundario(){
        return $this->belongsTo(CentroZosec::class, 'censec_id');
    }

}

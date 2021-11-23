<?php

namespace App\Models\Indicadores\Administ;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InAreaindi extends Model
{
    protected $fillable = [
        'area_id','in_indicado_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id'
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function inIndicado()
    {
        return $this->belongsTo(InIndicado::class);
    }


}

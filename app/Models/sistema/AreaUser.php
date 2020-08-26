<?php

namespace App\Models\Sistema;

use app\Models\Indicadores\Area;
use app\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\Auth;

class AreaUser extends Pivot
{
    protected $fillable = [
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

    ];


    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    
}

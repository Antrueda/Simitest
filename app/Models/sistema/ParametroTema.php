<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ParametroTema extends Pivot
{
    protected $fillable = [ 'parametro_id','tama_id', 'estado' ,'user_crea_id','user_edita_id'];
    protected $attributes = ['estado' => 1,'user_crea_id'=>1,'user_edita_id'=>1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}

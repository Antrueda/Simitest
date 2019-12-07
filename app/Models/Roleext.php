<?php

namespace App\Models;
use Spatie\Permission\Models\Role;

class Roleext extends Role
{
    protected $fillable = [ 'nombre', 'activo' ,'user_crea_id','user_edita_id'];
    protected $attributes = ['activo' => 1,'user_crea_id'=>1,'user_edita_id'=>1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}

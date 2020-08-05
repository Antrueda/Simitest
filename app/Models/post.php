<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'sis_esta_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }


}

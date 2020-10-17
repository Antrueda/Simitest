<?php

namespace App\Models\sicosocial;

use App\Models\fichaIngreso\FiCompfami;
use Illuminate\Database\Eloquent\Model;


class Nuclfami extends Model
{
    protected $fillable = ['en_uso', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function fi_comfamis(){
        return $this->hasMany(FiCompfami::class);
    }
}

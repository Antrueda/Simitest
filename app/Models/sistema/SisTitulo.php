<?php

namespace App\Models\Sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisTitulo extends Model
{
    protected $fillable = ['s_titulo', 's_tooltip', 'sis_esta_id', 'user_crea_id', 'user_edita_id','i_prm_tletra_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id' => 1,'i_prm_tletra_id'=>1760];

    
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }
    
}

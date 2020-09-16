<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisEnprsa extends Model
{
    protected $fillable = ['s_enprsa', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

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

<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisEslug extends Model
{
    protected $fillable = [
        'id',
        's_espaluga',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function sis_dependens(){
        return $this->belongsToMany(SisDependen::class);
    }
}

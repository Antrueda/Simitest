<?php

namespace App\Models\Indicadores\Administ;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InIndicado extends Model
{
    protected $fillable = [
        's_indicador',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
    

    public function setSIndicadorAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['s_indicador'] =  strtoupper($value);
        }
    }
}

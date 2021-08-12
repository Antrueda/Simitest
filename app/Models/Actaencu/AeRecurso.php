<?php

namespace App\Models\Actaencu;

use App\Models\sistema\SisEsta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AeRecurso extends Model
{
    protected $fillable = [
        'ae_encuentro_id',
        'ae_recuadmi_id',
        'cantidad',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function ae_encuentro()
    {
        return $this->belongsTo(AeEncuentro::class);
    }

    public function ae_recuadmi()
    {
        return $this->belongsTo(AeRecuadmi::class);
    }

    public function user_crea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function user_edita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}

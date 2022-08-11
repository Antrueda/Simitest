<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiEnfermedadesFamilia extends Model
{
    protected $fillable = [
        'fi_salud_id',
        'fi_compfami_id',
        's_tipo_enfermedad',
        'prm_recimedi_id',
        's_medicamento',
        'prm_rectrata_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function fiSalud()
    {
        return $this->belongsTo(FiSalud::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    
}

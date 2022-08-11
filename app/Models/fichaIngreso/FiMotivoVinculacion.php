<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiMotivoVinculacion extends Model
{
    protected $fillable = [
        'fi_formacion_id',
        'prm_motivinc_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function fi_formacion()
    {
        return $this->belongsTo(FiFormacion::class);
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function motivos($padrexxx)
    {
        $vestuari = ['motivosx' => FiMotivoVinculacion::where('fi_formacion_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['motivosx'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    

    public function prm_motivinc()
    {
        return $this->belongsTo(Parametro::class, 'prm_motivinc_id');
    }
}

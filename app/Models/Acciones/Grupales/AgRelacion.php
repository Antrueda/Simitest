<?php

namespace App\Models\Acciones\Grupales;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgRelacion extends Model
{
    protected $fillable = [
        'ag_recurso_id',
        'ag_actividad_id',
        'i_cantidad',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function ag_actividad()
    {
        return $this->belongsTo(AgActividad::class);
    }
    public function ag_recurso()
    {
        return $this->belongsTo(AgRecurso::class);
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = AgRelacion::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}

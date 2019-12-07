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
        'fi_composicion_fami_id',
        's_tipo_enfermedad',
        'i_prm_recibe_medicina_id',
        's_medicamento',
        'i_prm_rec_tratamiento_id',
        'user_crea_id',
        'user_edita_id',
        'activo'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'activo'=>1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_salud_id']=FiSalud::where('sis_nnaj_id',$dataxxxx['sis_nnaj_id'])->first()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiEnfermedadesFamilia::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}

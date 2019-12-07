<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSacramento extends Model
{
    protected $fillable = [
        'fi_actividadestl_id',
        'i_prm_sacramentos_hechos_id',
        'user_crea_id',
        'user_edita_id',
        'activo'
    ];

    protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function fi_actividadestl()
    {
        return $this->belongsTo(FiActividadestl::class);
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function sacramentos($padrexxx)
    {
        $vestuari = ['sacramen' => FiSacramento::where('fi_actividadestl_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['sacramen'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    public static function setSacramento($objetoxx, $dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $datosxxx = [
                'fi_actividadestl_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'activo' => 1,
            ];
            // dd($dataxxxx);
            FiSacramento::where('fi_actividadestl_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['i_prm_sacramentos_hechos_id'] as $diagener) {
                $datosxxx['i_prm_sacramentos_hechos_id'] = $diagener;
                FiSacramento::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }
}
